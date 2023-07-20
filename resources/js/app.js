// require('./bootstrap');

import './bootstrap';
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap/dist/js/bootstrap.js";

import { createApp } from 'vue';


//Components
import App from './app.vue'
import Sidebar from "./components/sidebar.vue"
import Header from "./components/header.vue";
import SearchBar from "./components/searchBar";
import ProductList from "./components/productList";
import Product from "./components/product";
import Pagination from "./components/pagination";
import router from "./router/index.js"


const app = createApp(App);

app.use(router);

app.component('Sidebar', Sidebar);
app.component('Header', Header);
app.component('SearchBar', SearchBar);
app.component('ProductList', ProductList);
app.component('Product', Product);
app.component('Pagination',Pagination);
app.component('Pagination',Pagination);

app.mount("#app")



