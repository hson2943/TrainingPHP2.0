<template>
  <div class="container" style="background-color: #fff; border-radius: 10px">
    <!-- List product -->
    <div
      class="row p-5 gy-4"
      style="display: flex; justify-content: space-around"
    >
      <Product v-for="product in product_list" :key="product.id" :product="product"></Product>
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
import ProductListAxios from "../Axios/productAxios";
export default {
  data() {
    return {
      category_id: this.$route.query.category_id,
      brand_id: this.$route.query.brand_id,
      product_list: [],
    };
  },
  created() {
     this.getProduct();
  },
  methods: {
    async getProduct(){
      const { product_list, getProductList } = ProductListAxios();
     await getProductList(this. category_id,this.brand_id , "");
     this.product_list=product_list;
    }
  },
  watch:{
    '$route.query.category_id': function(newCategoryId) {
      this.category_id= newCategoryId;
      this.getProduct();
  },
  '$route.query.brand_id': function(newBrandId) {
    this.brand_id= newBrandId;
    this.getProduct();
  }
  }
};
</script>
<style>
</style>