<template>
     <div class="card shadow" style="width: 31%;">
  <img :src="product.thumbnail" class="img-fluid pt-2 rounded" style="width: 100%;" alt="">
  <div class="card-body">
    <h5 class="card-title">{{ product.name }}</h5>
    <div class="container overflow-hidden">
  <div class="row ">
    <div class="col">
      <a class="btn btn-primary w-100" @click="goToUpdate(product.id)">Edit </a>
    </div>
    <div class="col">
      <a href="#" class="btn btn-primary w-100">Delete </a>

    </div>
  </div>
</div>
  </div>
</div>
</template>
<script>

export default {
  props: {
product:Object,
  },
  methods:{
    goToUpdate(product_id){
      this.$router.push({ name: "update", params: { id: product_id } });
    },
  }
};
</script>