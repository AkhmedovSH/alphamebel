/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');
window.axios = require('axios');
window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.component('product-component', require('./components/ProductComponent.vue').default);


Vue.component('product-sofas-component', require('./components/ProductSofasComponent.vue').default);
Vue.component('product-chairs-component', require('./components/ProductChairsComponent.vue').default);
Vue.component('product-mattress-component', require('./components/ProductMattressComponent.vue').default);


Vue.component('product-wardobes-beds-comads-component', require('./components/ProductWardobesBedsComadsComponent.vue').default);
Vue.component('basket-component', require('./components/BasketComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


  
export const helper = {
    formatMoney: (money) => {
        money = parseInt(money)
        return money.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1 ')
    }
};
Vue.prototype.$helper = helper

const app = new Vue({
    el: '#app',
});
