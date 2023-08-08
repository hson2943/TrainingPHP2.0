import { ref } from 'vue'
import axios from "axios";
import { isSet } from 'lodash';

var api = 'http://127.0.0.1:8000/api/product'

export default function getDataProduct() {
  const product_list = ref([]);
  const product_current_page = ref();
  const product_last_page = ref();
  const getProductList = async (category_id, brand_id, key, current_page) => {

    var form = new FormData();

    if (key === "undefined") key = undefined;
    if (category_id === "undefined") category_id = undefined;
    if (brand_id === "undefined") brand_id = undefined;

    //brand_id, cate_id=0 key="" when go to default url
    form.append("key", key != undefined ? key : "");
    form.append("category_id", category_id != undefined ? category_id : 0);
    form.append("brand_id", brand_id != undefined ? brand_id : 0);
    axios({
      method: "post",
      url: api + "?page=" + current_page,
      data: form,
      headers: { "Content-Type": "multipart/form-data" },
    })
      .then(function (response) {
        //handle success
        product_list.value = response.data.data.data;
        product_last_page.value = response.data.data.last_page;
      })
      .catch(function (response) {
        //handle error
        console.log(response);
      });
  }
  return {
    product_list,
    product_last_page,
    getProductList,
  }
}