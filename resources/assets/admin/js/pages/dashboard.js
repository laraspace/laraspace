import Vue from 'vue';

import LineGraph from '../components/LineGraph.vue';
import BarGraph from '../components/BarGraph.vue';
import PieGraph from '../components/PieGraph.vue';

new Vue({
    el : '#dashboardPage',
    components : { LineGraph,BarGraph,PieGraph},
});

