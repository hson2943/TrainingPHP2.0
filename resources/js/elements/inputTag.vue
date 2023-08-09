<template>
  <label for="formGroupExampleInput" class="form-label">Name</label>
  <input
    :value="modelValue"
    @input="handleInputValue"
    @keypress="checkPriceInput"
    class="form-control"
    :maxlength="inputType == 'price' ? 10 : 50"
    :placeholder="'Input ' + inputType"
  />
  <span class="text-danger error">
    <span v-if="showError">{{ errorCustom }}</span>
  </span>
</template>
<script>
export default {
  props: ["modelValue", "inputType"],
  data() {
    return {
      showError: true,
      errorCustom: "",
    };
  },
  methods:{
    //check every character is type need to get risk of non-digit char
    checkPriceInput(event) {
      if (this.inputType == "price") {
        if (/\D/.test(event.key)) {
          event.preventDefault();
        }
      }
    },
    handleInputValue(event) {
      var value = event.target.value;
      value = value.replace(/\s+/g, " ");
      //ERROR when value.length ==0 value in input filed go appear again
      if (value.length == 0) {
        this.showError = true;
        this.errorCustom = this.inputType + "is not match demand ";
      } 
      else 
      if (this.inputType == "price") {
        value = parseInt(value);
        if (value < 10000 || value > 1000000000) {
          this.showError = true;
        } else {
          this.showError = false;
        }
      } else {
        this.showError = false;
      }

    //   this.$emit("update:modelValue", value);
    },
  }
};
</script>