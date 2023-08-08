<template>
  <div class="container" style="background-color: #fff; border-radius: 10px">
    <!-- List product -->
    <div
      class="row p-5 gy-4"
      style="display: flex; justify-content: space-around"
    >
    <a-spin v-if="loading" size="large" />
      <Product v-else v-for="product in product_list" :key="product.id" :product="product"></Product>
    </div>
    <!-- Pagination -->
    <div class="row pb-5 pt-1">
      <div class="col-4"></div>
      <div class="col-4">
        <pagination></pagination>
      </div>
      <div class="col-4"></div>
    </div>
  </div>
</template>
<script>
import _ from 'lodash';
import ProductListAxios from "../Axios/productAxios";
export default {
  data() {
    return {
      product_list: [],
      loading:false,
    };
  },
  created() {
     this.getProduct();
     this.getProduct=_.debounce(this.getProduct, 2000)
  },
  methods: {
    async getProduct(){
      const { product_list, getProductList } = ProductListAxios();
     await getProductList(this.$route.query.category_id,this.$route.query.brand_id ,this.$route.query.key);
     this.product_list=product_list;
      this.loading=false;
    },
  },
  watch:{
    '$route.query.category_id': function(newCategoryId) {
      this.getProduct();
      this.loading=true;
  },
  '$route.query.brand_id': function(newBrandId) {
    this.getProduct();
    this.loading=true;
  },
  '$route.query.key': function(newKey) {
    this.getProduct();
    this.loading=true;
  }
  }
};
</script>
<style>
</style>