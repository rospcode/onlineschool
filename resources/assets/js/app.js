

require('./bootstrap');


window.Vue = require('vue');


Vue.component('testcount', require('./components/testcount.vue').default);


const app = new Vue({
    el: '#app',
});
