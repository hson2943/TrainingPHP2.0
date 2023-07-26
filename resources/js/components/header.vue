<template>
    <div>
       <header>
         <nav class="navbar navbar-expand-lg" style="background-color: #00ade8;"  >
  <div class="container-fluid">
<!-- Logo -->
    <img src="http://127.0.0.1:8000/storage/images/ncc.png" href="#" class="navbar-brand" style="height: auto; width: 7%;" alt="">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
      <div class="navbar-nav mx-5">
        <a class="nav-link" aria-current="page" href="./">Home</a>
        <a class="nav-link" href="#">Manage Product</a>
      </div>
    </div>
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" style="background-color: #00ade8; border-color: #fff;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="true">
    USER 1
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
  </div>
</nav>
       </header>
    </div>
    </template>
    <style>


.navbar-nav {
    --bs-nav-link-color: #fff;
    --bs-nav-link-hover-color: #fff;

}
.nav-link{
  font-weight: 600;
  font-size:1.2rem;
}

.btn{
  border: none;
}

  </style>