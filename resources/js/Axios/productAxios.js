import { ref } from 'vue'
import axios from "axios";

var api = 'http://127.0.0.1:8000/api/product'

export default function getDataProduct() {
    const product_list = ref([])
    const getProductList = async () => {

        var form = new FormData();
        form.append("key", "");
        form.append("category_id", "2");
        form.append("brand_id", "");
        axios({
            method: "post",
            url: api,
            data: form,
            headers: { "Content-Type": "multipart/form-data" },
          })
            .then(function (response) {
              //handle success
              product_list.value=response.data;
              console.log(response);
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