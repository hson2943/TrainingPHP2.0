<template>
  <a-menu
    class="a-menu-custome"
    v-model:selectedKeys="selectedKeys1"
    v-model:openKeys="openKeys1"
    mode="inline"
    :style="{ borderRight: 0 }"
  >
    <a-sub-menu key="sub1">
      <template #title>
        <span> Categories </span>
      </template>
      <a-menu-item :key="0" @click=" clickCategory(0)"> All</a-menu-item>
      <a-menu-item
        v-for="category in model.category_list"
        :key="category.id"
        @click=" clickCategory(category.id)"
        >{{ category.name }}</a-menu-item
      >
    </a-sub-menu>
  </a-menu>
  <a-menu
    class="a-menu-custome"
    v-model:selectedKeys="selectedKeys2"
    v-model:openKeys="openKeys2"
    mode="inline"
    :style="{ height: '100%', borderRight: 0 }"
  >
    <a-sub-menu key="sub2">
      <template #title>
        <span> Brands </span>
      </template>
      <a-menu-item :key="0" @click="clickBrand(0)"> All</a-menu-item>
      <a-menu-item
        v-for="brand_category in model.brand_list"
        :key="brand_category.brand.id"
        @click="clickBrand(brand_category.brand.id)"
      >
        {{ brand_category.brand.name }}</a-menu-item
      >
    </a-sub-menu>
  </a-menu>
</template>

<script>
import CategoryListAxios from "../Axios/categoryAxios";
import BrandListAxios from "../Axios/brandAxios";

export default {
  data() {
    return {
      //make button select according url when refresh
      selectedKeys1: [parseInt(this.$route.query.category_id)],
      selectedKeys2: [parseInt(this.$route.query.brand_id)],

      openKeys1: ["sub1"],
      openKeys2: ["sub2"],

      model: {
        category_list: [],
        brand_list: [],
      },
    };
  },
  created() {
    this.getCategoryList();
    this.getBrandByCate(this.$route.query.category_id);
    console.log(parseInt(this.$route.query.brand_id));
  },
  methods: {
    //get category_list from axios
    async getCategoryList() {
      const { category_list, getCategoryList } = CategoryListAxios();
      await getCategoryList();
      this.model.category_list = category_list;
    },
    //get brand_list are relation with category from axios Onclick
    async getBrandByCate(category_id) {
      //get brand_list by axios
      const { brand_list, getBrandList } = BrandListAxios();
      await getBrandList(category_id);
      this.model.brand_list = brand_list;
    },
    clickCategory(category_id) {
      this.$router.push(`/?category_id=${category_id}&brand_id=0 `);
    },
    //ERROR category_id url change when i click brand
    clickBrand(brand_id) {
      this.$router.push(
        `/?category_id=${this.$route.query.category_id}&brand_id=${brand_id}`
      );
    },
  },
  watch:{
    '$route.query.category_id': function(newCategoryId) {
      this.getBrandByCate(newCategoryId);
  },
  }
};
</script>

<style>
.ant-menu .ant-menu-item,
.ant-menu .ant-menu-submenu,
.ant-menu .ant-menu-submenu-title {
  border-radius: 0px;
}
</style>

<style scoped>
.a-menu-custome {
  font-weight: 600;
}
</style>