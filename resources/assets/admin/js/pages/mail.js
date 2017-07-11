import Vue from 'vue';

Vue.component('mailgun', {
    template: '#mailgun-template'
});
Vue.component('sendgrid', {
    template: '#sendgrid-template'
});
Vue.component('sparkpost', {
    template: '#sparkpost-template'
});
new Vue({
    el: "#mail-driver",

    data: {
        currentView:'mailgun',
    },
});