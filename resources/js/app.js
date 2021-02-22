

require('./bootstrap');

import Vue from 'vue'

import routes from './router'

window.Vue = require('vue').default;

//mdb <-------------------------------------->

require("bootstrap-css-only/css/bootstrap.min.css");
require("mdbvue/lib/css/mdb.min.css");
require("@fortawesome/fontawesome-free/css/all.min.css");

Vue.component('example-component', require('./components/ExampleComponent.vue').default);



const app = new Vue({
    el: '#app',
    router: routes,
});
