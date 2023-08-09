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
        <a-pagination v-model:current="this.$route.query.page" :total="product_last_page*10" show-less-items @change="changePage"/>
      </div>
      <div class="col-4"></div>
    </div>
  </div>
</template>
<script>
import _ from 'lodash';
import ProductListAxios from "../Axios/productAxios";
import CategoryListAxios from "../Axios/categoryAxios";
import BrandListAxios from "../Axios/brandAxios";
export default {
  data() {
    return {
      product_list: [],
      loading:false,
      product_last_page: 0,
    };
  },
  created() {
     this.getProduct();
     this.getProduct=_.debounce(this.getProduct, 1500)
  },
  methods: {
    async getProduct(){
      // NEED IMPROVE
      if(this.$route.query.category_id =="undefined" || this.$route.query.category_id ==undefined) this.$route.query.category_id ="0"
      if(this.$route.query.brand_id =="undefined" || this.$route.query.brand_id ==undefined) this.$route.query.brand_id ="0"
      if(this.$route.query.key =="undefined" || this.$route.query.key ==undefined) this.$route.query.key =""

      const { product_list,product_last_page, getProductList } = ProductListAxios();
     await getProductList(this.$route.query.category_id,this.$route.query.brand_id ,this.$route.query.key,this.$route.query.page);
     this.product_list=product_list;
     this.product_last_page=product_last_page;
     //stop spin when load data is done
      this.loading=false;
    },
    //event fire when change the page 
    changePage(current){
      this.$router.push(`/?category_id=${this.$route.query.category_id}&brand_id=${this.$route.query.brand_id}&key=${this.$route.query.key}&page=${current}`);
    }
  },
  watch:{
    '$route.query.category_id': function() {
      this.getProduct();
      this.loading=true;
  },
  '$route.query.brand_id': function() {
    this.getProduct();
    this.loading=true;
  },
  '$route.query.key': function() {
    this.getProduct();
    this.loading=true;
  },
  '$route.query.page': function() {
    this.getProduct();
    this.loading=true;
  }
  }
};
</script>
<style>
</style>