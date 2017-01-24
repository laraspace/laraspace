<template>
    <div class="graph-container">
        <canvas id="graph" ref="graph"></canvas>
    </div>
</template>

<script>
    import Chart from 'chart.js';

    export default {

        props: [
            'labels',
            'values'
        ],

        mounted: function () {

            var context = this.$refs.graph.getContext('2d');

            var options = {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
            };

            var data = {
                labels: this.labels,
                datasets: [
                    {
                        label: "My First dataset",
                        backgroundColor: "rgba(79, 196, 127,0.2)",
                        borderColor: "rgba(79, 196, 127,1)",
                        borderWidth: 1,
                        hoverBackgroundColor: "rgba(79, 196, 127,0.4)",
                        hoverBorderColor: "rgba(79, 196, 127,1)",
                        data: this.values,
                    }
                ]
            };

            var myBarChart = new Chart(context, {
                type: 'bar',
                data: data,
                options: options
            });
        }
    }
</script>

<style>
    .graph-container {
        height: 300px;
    }
</style>
