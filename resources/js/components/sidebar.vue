<template>
  <div class="accordion" id="accordionParent" style="font-weight: 600">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button
          class="accordion-button"
          id="tabOne"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseOne"
          aria-controls="collapseOne"
          aria-expanded="false"
        >
          Types
        </button>
      </h2>
      <!-- SubItem Types-->
      <div
        id="collapseOne"
        class="accordion-collapse collapse"
        aria-labelledby="headingOne"
        data-bs-parent="#accordionParent"
      >
        <ul class="list-group list-group-flush">
          <li v-for="category in model.category_list" :key="category.id" class="list-group-item list-group-item-action"> {{category.name}}</li>
        </ul>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button
          class="accordion-button"
          id="tabTwo"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseTwo"                       
          aria-controls="collapseTwo"
          aria-expanded="false"
        >
          Brands
        </button>
      </h2>
      <!-- SubItem Brands -->
      <div
        id="collapseTwo"
        class="accordion-collapse collapse"
        aria-labelledby="headingTwo"
        data-bs-parent="#accordionParent"
      >
        <ul class="list-group list-group-flush">
          <li class="list-group-item list-group-item-action">An item</li>
          <li class="list-group-item list-group-item-action">A second item</li>
          <li class="list-group-item list-group-item-action">A third item</li>
          <li class="list-group-item list-group-item-action">A fourth item</li>
          <li class="list-group-item list-group-item-action">
            And a fifth one
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
import CategoryList from "../Axios/categoryAxios";
export default {
  data() {
    return {
      model:{
        category_list:[],
        brand_list:[]
      }

    };
  },
  async created() {
    const { category_list, getCategoryList } = CategoryList();
    await getCategoryList();
    this.model.category_list= category_list;
  }
};
</script>

<style>
.accordion{
  --bs-primary-bg-subtle: #fff;
  --bs-accordion-btn-icon: url(http://127.0.0.1:8000/storage/images/chevron-down-solid.png);
  --bs-accordion-btn-active-icon: url(http://127.0.0.1:8000/storage/images/chevron-down-solid.png);
  --bs-accordion-btn-icon-width: 0.8rem;
  --bs-accordion-inner-border-radius: 0px;
  --bs-border-radius:0px;
}

.list-group{
  --bs-list-group-action-active-bg: #e6f7ff;
  --bs-list-group-action-hover-color:#00ade8;
  --bs-list-group-action-hover-bg: #e6f7ff;
  --bs-list-group-border-width: 0.2rem;
  --bs-border-color: #00ade8;
}

.accordion-button {
  font-size: 1rem;
  font-weight: 500; 
}


</style>