import { ref } from 'vue'
import axios from "axios";

var api = 'http://127.0.0.1:8000/api/product'

export default function getDataProduct() {
  const product_list = ref([])
  const getProductList = async (category_id, brand_id, key) => {

    var form = new FormData();
    //brand_id, cate_id=0 key="" when go to default url
    form.append("key", key ? key : "");
    form.append("category_id", category_id ? category_id : 0);
    form.append("brand_id", brand_id ? brand_id : 0);

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