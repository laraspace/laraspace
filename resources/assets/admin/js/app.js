
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

window.Vue = require('vue')

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.Vue.component('bar-chart', require('./components/BarChart.vue'))
window.Vue.component('line-chart', require('./components/LineChart.vue'))
window.Vue.component('pie-chart', require('./components/PieChart.vue'))
window.Vue.component('mail-settings', require('./components/MailSettings.vue'))

window.Vue.component('todos-app', require('./apps/TodosApp.vue'))

let app = new window.Vue({
  el: '#app'
})
