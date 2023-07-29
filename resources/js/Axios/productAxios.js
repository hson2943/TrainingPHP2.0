import { ref } from 'vue'
import axios from "axios";

export default function getDataProduct() {
    const product_list = ref([])
    const getProductList = async () => {
        const response = await axios.get(`http://127.0.0.1:8000/api/product`);
        product_list.value=response.data
    }

    return {
        product_list,
        getProductList,
    }
}