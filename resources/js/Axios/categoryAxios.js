import { ref } from 'vue'
import axios from "axios";

var api = 'http://127.0.0.1:8000/api/category'

export default function getDataCategory() {
    const category_list = ref([])
    const getCategoryList = async () => {

        axios({
            method: "get",
            url: api,
            headers: { "Content-Type": "multipart/form-data" },
          })
            .then(function (response) {
              //handle success
              category_list.value= response.data.data;
              console.log(category_list.value);
            })
            .catch(function (response) {
              //handle error
              console.log(response);
            });
    }
    return {
        category_list,
        getCategoryList,
    }
}