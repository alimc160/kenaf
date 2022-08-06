//require('./bootstrap');
window.Vue = require('vue');
import store from './store';
import axios from 'axios';
window.store = store;
window.axios = axios;



/*  var app = new Vue({
    el: '#app',
    store
}); */
Vue.prototype.$__ = window.t;  