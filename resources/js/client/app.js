require('./bootstrap');

import Vue from 'vue';
import Buefy from 'buefy';
import 'buefy/dist/buefy.css';
import './filters';
Vue.use(Buefy);

import VueRouter from 'vue-router';
Vue.use(VueRouter);
import routes from './routes';

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
