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
          <li
            class="list-group-item list-group-item-action"
            aria-current="true"
          >
            An item
          </li>
          <li class="list-group-item list-group-item-action">A second item</li>
          <li class="list-group-item list-group-item-action">A third item</li>
          <li class="list-group-item list-group-item-action">A fourth item</li>
          <li class="list-group-item list-group-item-action">
            And a fifth one
          </li>
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
// TEST
// $(document).ready(function () {
//   $("#testjquery").click(function () {
//     $(this).hide();
//   });
// });

export default {
  data() {
    return {
    };
  },
  methods: {
  },
};
</script>

<style>
.accordion-item {
  border: 0px;
}

.accordion-item:first-of-type .accordion-button {
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
}

.accordion-button {
  font-size: 1.25rem;
  font-weight: 600;
}
</style>