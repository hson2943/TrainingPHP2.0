<template>
    <form
      action=""
      class="rounded bg-white p-5"
    >

      <div class="row">
        <div class="col-md-6 col-12">
          <div class="col mb-1">Product Information</div>
          <div class="col mb-1">
            <label for="formGroupExampleInput" class="form-label"
              >Name</label
            >
            <input
              type="text"
              class="form-control"
              id="formGroupExampleInput"
              placeholder="Example input placeholder"
            />
          </div>
          <div class="col mb-1">
            <label for="formGroupExampleInput" class="form-label"
              >Type</label
            >
            <input
              type="text"
              class="form-control"
              id="formGroupExampleInput"
              placeholder="Example input placeholder"
            />
          </div>
          <div class="col mb-1">
            <label for="formGroupExampleInput" class="form-label"
              >Brand</label
            >
            <input
              type="text"
              class="form-control"
              id="formGroupExampleInput"
              placeholder="Example input placeholder"
            />
          </div>
          <div class="col mb-1">
            <label for="formGroupExampleInput" class="form-label"
              >Price</label
            >
            <input
              type="text"
              class="form-control"
              id="formGroupExampleInput"
              placeholder="Example input placeholder"
            />
          </div>
          <div class="col mb-1">
            <label for="formGroupExampleInput" class="form-label"
              >Description</label
            >
            <textarea
              class="form-control"
              aria-label="With textarea"
            ></textarea>
          </div>
          <div class="" style=" display: flex; justify-content: space-evenly; margin-top: 48px !important;">
            <button type="button" class="btn btn-primary">Delete</button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
        <div class="col-md-6 col-12">
          <label for=" mb-1">Main Image</label>

          <div id="carouselExampleIndicators mb-1" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/homepage/families-gallery/2023/revuelto/revuelto_m.png" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/homepage/families-gallery/2023/revuelto/revuelto_m.png" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/homepage/families-gallery/2023/revuelto/revuelto_m.png" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
          <label class=" mb-4" for="">Slide</label>
          <div class="row">
            <div class="col-6">

              <div class="row mb-4">
                <label for=""> Image 1 </label>
                <div class="input-image">
                  <img
                    class="card-img-top shadow"
                    src="http://127.0.0.1:8000/storage/images/add.png"
                    alt=""
                  />
                </div>
              </div>

              <div class="row">
                <label for=""> Image 3 </label>
                <div class="input-image">
                  <img
                    class="card-img-top shadow"
                    src="http://127.0.0.1:8000/storage/images/add.png"
                    alt=""
                  />
                </div>
              </div>

            </div>
            <div class="col-6">

              <div class="row mb-4">
                  <label for=""> Image 2 </label>
                  <div class="input-image">
                    <img
                      class="card-img-top shadow"
                      src="http://127.0.0.1:8000/storage/images/add.png"
                      alt=""
                    />
                </div>
              </div>
              <div class="row">
                  <label for=""> Image 4 </label>
                  <div class="input-image">
                    <img
                      class="card-img-top shadow"
                      src="http://127.0.0.1:8000/storage/images/add.png"
                      alt=""
                    />
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    

    </form>
</template>
<style scoped>
.container{
  display: flex;
}
.card-img-top.shadow {
  border: 3px solid rgb(233, 215, 215);
  border-radius: 10px;
  width: 45%;
  box-sizing: border-box;
}
.input-image {
  padding-top: 15%;
  padding-left: 25%;
}
</style>