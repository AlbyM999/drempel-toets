

require('./bootstrap');

window.Vue = require('vue').default;
import {createApp} from 'vue';
import router from './router.js';
import App from './layouts/App.vue';
import store from "./store/index.js";

createApp(App)
    .use(store)
    .use(router)
    .mount("#app")



