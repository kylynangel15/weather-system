import * as Vue from "vue";
import App from './App.vue'
import { router } from "./router";
import { createPinia } from "pinia";
import piniaPluginPersistedstate from "pinia-plugin-persistedstate";
import axios from 'axios'
import VueAxios from 'vue-axios'
import './assets/css/app.css'
import './assets/style/style.styl'
import 'font-awesome/css/font-awesome.min.css'
import '@mdi/font/css/materialdesignicons.css'


const app = Vue.createApp(App);

const pinia = createPinia();
pinia.use(piniaPluginPersistedstate);
app.use(pinia);
app.use(router);
app.router = router;

app.use(VueAxios, axios)
app.mount("#app");