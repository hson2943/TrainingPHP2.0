import './bootstrap';
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap/dist/js/bootstrap.js";
import { Pagination, Menu, Spin, Button, Card, Skeleton, } from 'ant-design-vue';

import { createApp } from 'vue';


//Components
import App from './app.vue'
import Sidebar from "./components/sidebar.vue"
import Header from "./components/header.vue";
import SearchBar from "./components/searchBar";
import ProductList from "./components/productList";
import Product from "./components/product";
import DetailForm from "./components/detailForm";
import router from "./router/index.js"

//Element
import inputTag from './elements/inputTag.vue'

/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* import specific icons */
import { fas } from '@fortawesome/free-solid-svg-icons'

/* add icons to the library */
library.add(fas)

const app = createApp(App);

app.component('Sidebar', Sidebar);
app.component('Header', Header);
app.component('SearchBar', SearchBar);
app.component('ProductList', ProductList);
app.component('Product', Product);
app.component('DetailForm',DetailForm);
app.component('InputTag',inputTag);
app.component('font-awesome-icon', FontAwesomeIcon);

app.use(Menu);
app.use(Spin);
app.use(Pagination);

app.use(router);
//turn off warning in tool browser
app.config.warnHandler = () => {};

app.mount("#app")



