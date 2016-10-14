import Vue from 'vue';

import LineGraph from '../components/LineGraph.vue';
import BarGraph from '../components/BarGraph.vue';

new Vue({
    el : '#dashboardPage',
    components : { LineGraph,BarGraph},
});

