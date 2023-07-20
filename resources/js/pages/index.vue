<template>
  <div>
    <div class="container justify-content-md-center p-5" style="background-color: #eee2e2; ">
      <div class="row ">
        <div class="col-2">
          <button type="button" class="btn btn-primary">Add Product</button>
        </div>
        <div class="col-2"></div>
        <div class="col-8">
          <SearchBar></SearchBar>
        </div>
      
      </div>
      <div class="row pt-4">
          <div class="d-flex">
            <ProductList></ProductList>
          </div>
        </div>
    </div>
  </div>
</template>
<style>

</style>