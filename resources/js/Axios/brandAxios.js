import { ref } from 'vue'
import axios from "axios";

var api = 'http://127.0.0.1:8000/api/brandByCate/'

export default function getDataBrandByCate() {
    const brand_list = ref([])
    const getBrandList = async (category_id) => {
        axios({
            method: "get",
            url: api + category_id,
            headers: { "Content-Type": "multipart/form-data" },
          })
            .then(function (response) {
              //handle success
              brand_list.value= response.data.data;
              console.log(brand_list.value);
            })
            .catch(function (response) {
              //handle error
              console.log(response);
            });
    }
    return {
        brand_list,
        getBrandList,
    }
}