var ChartJS = function () {

    var handleLineChart = function(){

        var ctx =  $('#lineChart');

        var data = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "My First dataset",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(75,192,192,0.4)",
                    borderColor: "rgba(75,192,192,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(75,192,192,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [65, 59, 80, 81, 56, 55, 40],
                }
            ]
        };

        var options = {
            responsive: true,
            maintainAspectRatio: false,
        };

        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });
    };

    var handleBarChart = function(){

        var ctx =  $('#barChart');

        var data = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "My First dataset",
                    backgroundColor: "rgba(255,99,132,0.2)",
                    borderColor: "rgba(255,99,132,1)",
                    borderWidth: 1,
                    hoverBackgroundColor: "rgba(255,99,132,0.4)",
                    hoverBorderColor: "rgba(255,99,132,1)",
                    data: [65, 59, 80, 81, 56, 55, 40],
                }
            ]
        };

        var options = {
            responsive: true,
            maintainAspectRatio: false,
        };

        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    };

    var handlePieAndDoughnutChart = function(){

        var data = {
            labels: [
                "Red",
                "Blue",
                "Yellow"
            ],
            datasets: [
                {
                    data: [300, 50, 100],
                    backgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ],
                    hoverBackgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ]
                }]
        };

        var pieCtx = $('#pieChart'),doughCtx = $('#doughnutChart');

        var options = {
            responsive: true,
            maintainAspectRatio: false,
        };

        var myPieChart = new Chart(pieCtx,{
            type: 'pie',
            data: data,
            options: options
        });

        var myDoughnutChart = new Chart(doughCtx, {
            type: 'doughnut',
            data: data,
            options: options
        });
    };

    return {
        //main function to initiate the module
        init: function () {
            handleBarChart();
            handleLineChart();
            handlePieAndDoughnutChart();
        }
    };

}();

jQuery(document).ready(function() {
    ChartJS.init();
});

