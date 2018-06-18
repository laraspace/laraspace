import Vue from 'vue'
import BarChart from './components/BarChart.vue'
import LineChart from './components/LineChart.vue'
import PieChart from './components/PieChart.vue'
import MailSettings from './components/MailSettings.vue'
import TodosApp from './apps/TodosApp.vue'

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

window.Vue = Vue

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.Vue.component('bar-chart', BarChart)
window.Vue.component('line-chart', LineChart)
window.Vue.component('pie-chart', PieChart)
window.Vue.component('mail-settings', MailSettings)

window.Vue.component('todos-app', TodosApp)

let app = new window.Vue({
  el: '#app'
})
