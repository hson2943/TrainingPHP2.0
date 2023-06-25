import './bootstrap';
import { createApp } from 'vue';
import App from './app.vue'
import Sidebar from "./components/sidebar.vue"
import Header from "./components/header.vue";
import router from "./router/index.js"





const app = createApp(App);

app.use(router);

app.component('Sidebar', Sidebar);
app.component('Header', Header);

app.mount("#app")



