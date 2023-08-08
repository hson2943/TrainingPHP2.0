<template>
    <div class="input-group mb-3">
  <button class="btn btn-light">
    <font-awesome-icon icon="magnifying-glass" class="search-icon" />
  </button>
  <input v-model="keyword" type="text" class="form-control" placeholder="Search.." style="border: none;"  @keypress="validateKeyAndSetURL">

</div>
</template>
<script>
export default{
  data() {
    return{
      keyword:"",
    }
  },
  methods: {
    validateKeyAndSetURL(event) {
      var regex = new RegExp("^[0-9a-zA-Z \b]+$");
      var key = String.fromCharCode(
        !event.charCode ? event.which : event.charCode
      );
      if (!regex.test(key)) {
        event.preventDefault();
      }
      this.$router.push(`/?category_id=${this.$route.query.category_id}&brand_id=${this.$route.query.brand_id}&key=${this.keyword}`);
    },
  },
}

</script>