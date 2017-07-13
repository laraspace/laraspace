var GaugesChart = function () {

    //Gauges
    var handleGauges = function () {
        var opts_basic = {
            angle: 0.15, /// The span of the gauge arc
            lineWidth: 0.44, // The line thickness
            pointer: {
                length: 0.64, // Relative to gauge radius
                strokeWidth: 0.035, // The thickness
                color: '#8C8C8C'
            },
            colorStart: '#ffde00',   // Colors
            colorStop: '#ffde00',    // just experiment with them
            strokeColor: '#E0E0E0'   // to see which ones work best for you
        };

        $(".basic-gauge").each(function () {

            if (opts_basic !== false) {

                var gauge = new Gauge(this).setOptions(opts_basic);
                gauge.maxValue = 3000; // set max gauge value
                gauge.setMinValue(0);  // set min value
                gauge.animationSpeed = 32; // set animation speed (32 is default value)
                gauge.set(1250); // set actual value
                gauge.setTextField(this.nextElementSibling);
            }
        });
    };

    var handleDonutGauges = function () {
        var opts_donuts = {
            angle: 0.35, // The span of the gauge arc
            lineWidth: 0.07, // The line thickness
            radiusScale: 1, // Relative radius
            limitMax: false,     // If false, the max value of the gauge will be updated if value surpass max
            limitMin: false,     // If true, the min value of the gauge will be fixed unless you set it manually
            colorStart: '#ffde00',   // Colors
            colorStop: '#ffde00',    // just experiment with them
            strokeColor: '#E0E0E0',  // to see which ones work best for you
            generateGradient: true,
            highDpiSupport: true     // High resolution support
        };
        $(".donut-gauge").each(function () {
            if (opts_donuts !== false) {
                // $('.gauge-lg .donut-gauge').attr({'width': '500', 'height': '250'});
                // $('.gauge-lg .donut-gauge').attr({'width': '500', 'height': '250'});
                // $('.gauge-md .donut-gauge').attr({'width': '360', 'height': '180'});
                // $('.gauge-sm .donut-gauge').attr({'width': '240', 'height': '120'});
                var donut = new Donut(this).setOptions(opts_donuts);
                donut.maxValue = 3000; // set max gauge value
                donut.setMinValue(0);  // set min value
                donut.animationSpeed = 32; // set animation speed (32 is default value)
                donut.set(1250); // set actual value
                donut.setTextField(this.nextElementSibling);
            }
        });


    };

    var handleColorGauges = function () {
        var opts_color_gauge = {
            angle: -0.2, // The span of the gauge arc
            lineWidth: 0.2, // The line thickness
            radiusScale: 1, // Relative radius
            pointer: {
                length: 0.6, // // Relative to gauge radius
                strokeWidth: 0.035, // The thickness
                color: '#000000' // Fill color
            },
            limitMax: false,     // If false, the max value of the gauge will be updated if value surpass max
            limitMin: false,     // If true, the min value of the gauge will be fixed unless you set it manually
            colorStart: '#6FADCF',   // Colors
            colorStop: '#8FC0DA',    // just experiment with them
            strokeColor: '#E0E0E0',  // to see which ones work best for you
            generateGradient: true,
            highDpiSupport: true,   // High resolution support
            staticZones: [
                {strokeStyle: "#F03E3E", min: 100, max: 500}, // Red from 100 to 130
                {strokeStyle: "#FFDD00", min: 500, max: 1100}, // Yellow
                {strokeStyle: "#30B32D", min: 1100, max: 2300}, // Green
                {strokeStyle: "#FFDD00", min: 2300, max: 2700}, // Yellow
                {strokeStyle: "#F03E3E", min: 2700, max: 3000}  // Red
            ],
        };

        $(".color-gauge").each(function () {
            if (opts_color_gauge !== false) {
                var colorgauge = new Gauge(this).setOptions(opts_color_gauge);
                colorgauge.maxValue = 3000; // set max gauge value
                colorgauge.setMinValue(0);  // set min value
                colorgauge.animationSpeed = 32; // set animation speed (32 is default value)
                colorgauge.set(1250); // set actual value
                colorgauge.setTextField(this.nextElementSibling);
            }
        });
    };

    return {
        //main function to initiate the module
        init: function () {
            handleGauges();
            handleDonutGauges();
            handleColorGauges();
        }
    };

}();

jQuery(document).ready(function() {
    GaugesChart.init();
});