
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('bar-chart', require('./components/BarChart.vue'));
Vue.component('line-chart', require('./components/LineChart.vue'));
Vue.component('pie-chart', require('./components/PieChart.vue'));
Vue.component('todos', require('./components/Todos.vue'));
Vue.component('mail-settings', require('./components/MailSettings.vue'));
Vue.component('env-editor', require('./components/Environment.vue'));

new Vue({
    el: '#app',
});
