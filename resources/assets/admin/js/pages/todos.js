import Vue from 'vue';
import Todos from '../components/Todos.vue';

window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': $("input[name=_token]").attr("value")
};

new Vue({
    el : '#TodosApp',
    data : {
        hello : 'Hello'
    },
    components : { Todos }
});


