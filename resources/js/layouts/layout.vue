<template>
  <div>
    <main>
      <Header class="sticky-top" />
      <div class="container-fuild" >
        <div class="row g-0">
          <div class="col-2">
            <Sidebar />
          </div>
          <div class="col-10">
            <!-- Contain changing page  -->
            <router-view> </router-view>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>