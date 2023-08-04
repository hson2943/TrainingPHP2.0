import { ref } from 'vue'
import axios from "axios";

var api = 'http://127.0.0.1:8000/api/product'

export default function getDataProduct() {
  const product_list = ref([])
  const getProductList = async (category_id, brand_id, key) => {

    var form = new FormData();
    // form.append("key", key ? key : null);
    // form.append("category_id", category_id ? category_id : null);
    // form.append("brand_id", brand_id ? brand_id : null);
    form.append("key", key );
    form.append("category_id", category_id );
    form.append("brand_id", brand_id );
    axios({
      method: "post",
      url: api,
      data: form,
      headers: { "Content-Type": "multipart/form-data" },
    })
      .then(function (response) {
        //handle success
        product_list.value = response.data.data.data;
        console.log(product_list.value);
      })
      .catch(function (response) {
        //handle error
        console.log(response);
      });
  }
  return {
    product_list,
    getProductList,
  }
}