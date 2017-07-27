<template>
    <div class="graph-container">
        <canvas id="graph" ref="graph"></canvas>
    </div>
</template>

<script>
    export default {

        props: [
            'labels',
            'values'
        ],

        mounted() {
            let context = this.$refs.graph.getContext('2d');

            let options = {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
            };

            let data = {
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

            let myBarChart = new Chart(context, {
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
