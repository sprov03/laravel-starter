require('./bootstrap');

/**
 * Vue
 */
import Vue from 'vue';

/**
 * Filters
 */
import './filters';

/**
 * Vue router
 */
import VueRouter from 'vue-router';
import routes from './routes';
Vue.use(VueRouter);
const router = new VueRouter({
    mode: 'history',
    routes: routes
});


/**
 * Tailwind
 */
import VueTailwind from 'vue-tailwind'
Vue.use(VueTailwind);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    el: '#app',
    router
});
