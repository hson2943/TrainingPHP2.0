<template>
  <a-menu
    class="a-menu-custome"
    v-model:selectedKeys="selectedKeys1"
    v-model:openKeys="openKeys"
    mode="inline"
    :style="{ borderRight: 0 }"
  >
    <a-sub-menu key="sub1">
      <template #title>
        <span> Categories </span>
      </template>
      <a-menu-item :key="0" v-on:click="showBrandByCate(0)"> All</a-menu-item>
      <a-menu-item
        v-for="category in model.category_list"
        :key="category.id"
        v-on:click="showBrandByCate(category.id)"
        >{{ category.name }}</a-menu-item
      >
    </a-sub-menu>
  </a-menu>
  <a-menu
    class="a-menu-custome"
    v-model:selectedKeys="selectedKeys1"
    v-model:openKeys="openKeys"
    mode="inline"
    :style="{ height: '100%', borderRight: 0 }"
  >
    <a-sub-menu key="sub2">
      <template #title>
        <span> Brands </span>
      </template>
      <a-menu-item :key="0" v-on:click="saveBrand(0)"> All</a-menu-item>
      <a-menu-item
        v-for="brand in model.brand_list"
        :key="brand.id"
        v-on:click="saveBrand(brand.brand.id)"
      >
        {{ brand.brand.name }}</a-menu-item
      >
    </a-sub-menu>
  </a-menu>
</template>

<script>
import CategoryList from "../Axios/categoryAxios";
import BrandList from "../Axios/brandAxios";

export default {
  data() {
    return {
      state: {
        category_id: 0,
        brand_id: 0,
      },
      model: {
        category_list: [],
        brand_list: [],
      },
    };
  },
  //get category_list from axios
  async created() {
    const { category_list, getCategoryList } = CategoryList();
    await getCategoryList();
    this.model.category_list = category_list;
  },

  methods: {
    //get brand_list relate to category from axios Onclick
    async showBrandByCate(category_id) {
      const { brand_list, getBrandList } = BrandList();
      await getBrandList(category_id);
      this.model.brand_list = brand_list;
      //save state of category id
      this.state.category_id = category_id;
      this.$router.push(
        `/?category_id=${category_id}&&/?brand_id=${this.state.brand_id}`
      );
    },
    saveBrand(brand_id) {
      //save state of brand id
      this.state.brand_id = brand_id;
      this.$router.push(
        `/?category_id=${this.state.category_id}&&/?brand_id=${brand_id}`
      );
    },
  },
};
</script>

<style>
:where(.css-dev-only-do-not-override-eq3tly).ant-menu .ant-menu-item,
:where(.css-dev-only-do-not-override-eq3tly).ant-menu .ant-menu-submenu,
:where(.css-dev-only-do-not-override-eq3tly).ant-menu .ant-menu-submenu-title {
  border-radius: 0px;
}
</style>

<style scoped>
.a-menu-custome {
  font-weight: 600;
}
</style>