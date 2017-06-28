$(document).ready(function () {
    // SPARKLINE CHART
    $(".spl-pie-chart").sparkline('html', {
        type: 'pie',
        width: '150',
        height: '100'
    });
    $(".spl-line-chart").sparkline([5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7], {
        type: 'line',
        width: '150',
        height: '100'
    });
    $(".spl-bar-chart").sparkline('html', {
        type: 'bar',
        height: '100',
        barWidth: 10,
        barSpacing: 3
    });
    $('.spl-cp-bar-chart').sparkline('html', {
        type: 'bar',
        barColor: '#aaf',
        height: '100',
        barWidth: 10,
        barSpacing: 3
    });
    $('.spl-cp-bar-chart').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7], {
        composite: true,
        fillColor: false,
        lineColor: 'red',
        width: '150',
        height: '100'
    });
    $('.spl-cp-inline').sparkline('html', {
        fillColor: false,
        changeRangeMin: 0,
        chartRangeMax: 10,
        width: '150',
        height: '100'
    });
    $('.spl-cp-inline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7], {
        composite: true,
        fillColor: false,
        lineColor: 'red',
        changeRangeMin: 0,
        chartRangeMax: 10,
        width: '150',
        height: '100'
    });
    $('.spl-inline').sparkline('html', {
        width: '150',
        height: '100'
    });
    $('.spl-bar-negative').sparkline('html', {
        type: 'bar',
        barWidth: 10,
        barSpacing: 3,
        height: '100'
    });
    $(".spl-discreate1").sparkline('html', {
        type: 'discrete',
        width: '150',
        height: '100'
    });
    $('.spl-discreate2').sparkline('html', {
        type: 'discrete',
        lineColor: 'blue',
        thresholdColor: 'red',
        thresholdValue: 4,
        width: '150',
        height: '100'
    });
    $(".spl-tristate").sparkline('html', {
        type: 'tristate',
        barWidth: 10,
        barSpacing: 3,
        height: '100'
    });
    $('.spl-tristate-color').sparkline('html', {
        type: 'tristate',
        colorMap: {'-2': '#fa7', '2': '#44f'},
        barWidth: 10,
        barSpacing: 3,
        height: '100'
    });
    $('.spl-boxplot').sparkline('html', {
        type: 'box',
        width: '150',
        height: '70'
    });
    $('.spl-boxplotraw').sparkline('html', {
        type: 'box',
        raw: true,
        showOutliers: true,
        target: 6,
        width: '150',
        height: '70'
    });
    $('.spl-bullet').sparkline('html', {
        type: 'bullet',
        width: '150',
        height: '30'
    });
    function drawMouseSpeedDemo() {
        var mrefreshinterval = 500; // update display every 500ms
        var lastmousex = -1;
        var lastmousey = -1;
        var lastmousetime;
        var mousetravel = 0;
        var mpoints = [];
        var mpoints_max = 30;
        $('html').mousemove(function (e) {
            var mousex = e.pageX;
            var mousey = e.pageY;
            if (lastmousex > -1) {
                mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey));
            }
            lastmousex = mousex;
            lastmousey = mousey;
        });
        var mdraw = function () {
            var md = new Date();
            var timenow = md.getTime();
            if (lastmousetime && lastmousetime != timenow) {
                var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000);
                mpoints.push(pps);
                if (mpoints.length > mpoints_max)
                    mpoints.splice(0, 1);
                mousetravel = 0;
                $('.spl-mousespeed').sparkline(mpoints, {
                    width: mpoints.length * 2, tooltipSuffix: ' pixels per second',
                    height: '100', width: '150'
                });
            }
            lastmousetime = timenow;
            setTimeout(mdraw, mrefreshinterval);
        };
        // We could use setInterval instead, but I prefer to do it this way
        setTimeout(mdraw, mrefreshinterval);
    };
    drawMouseSpeedDemo();

    //AMCHARTS
    var chart = AmCharts.makeChart("bar-line-chart", {
        "type": "serial",
        "addClassNames": true,
        "theme": "light",
        "autoMargins": false,
        "marginLeft": 30,
        "marginRight": 8,
        "marginTop": 10,
        "marginBottom": 26,
        "balloon": {
            "adjustBorderColor": false,
            "horizontalPadding": 10,
            "verticalPadding": 8,
            "color": "#ffffff"
        },

        "dataProvider": [{
            "year": 2009,
            "income": 23.5,
            "expenses": 21.1
        }, {
            "year": 2010,
            "income": 26.2,
            "expenses": 30.5
        }, {
            "year": 2011,
            "income": 30.1,
            "expenses": 34.9
        }, {
            "year": 2012,
            "income": 29.5,
            "expenses": 31.1
        }, {
            "year": 2013,
            "income": 30.6,
            "expenses": 28.2,
            "dashLengthLine": 5
        }, {
            "year": 2014,
            "income": 34.1,
            "expenses": 32.9,
            "dashLengthColumn": 5,
            "alpha": 0.2,
            "additional": "(projection)"
        }],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left"
        }],
        "startDuration": 1,
        "graphs": [{
            "alphaField": "alpha",
            "balloonText": "<span style='font-size:12px;'>" +
            "[[title]] in [[category]]:<br><span style='font-size:20px;'>" +
            "[[value]]</span> [[additional]]</span>",
            "fillAlphas": 1,
            "title": "Income",
            "type": "column",
            "valueField": "income",
            "dashLengthField": "dashLengthColumn"
        }, {
            "id": "graph2",
            "balloonText": "<span style='font-size:12px;'>" +
            "[[title]] in [[category]]:<br><span style='font-size:20px;'>" +
            "[[value]]</span> [[additional]]</span>",
            "bullet": "round",
            "lineThickness": 3,
            "bulletSize": 7,
            "bulletBorderAlpha": 1,
            "bulletColor": "#FFFFFF",
            "useLineColorForBulletBorder": true,
            "bulletBorderThickness": 3,
            "fillAlphas": 0,
            "lineAlpha": 1,
            "title": "Expenses",
            "valueField": "expenses",
            "dashLengthField": "dashLengthLine"
        }],
        "categoryField": "year",
        "categoryAxis": {
            "gridPosition": "start",
            "axisAlpha": 0,
            "tickLength": 0
        },
        "export": {
            "enabled": true
        }
    });
    var chart = AmCharts.makeChart("clust-bar-chart", {
        "type": "serial",
        "theme": "light",
        "categoryField": "year",
        "rotate": true,
        "startDuration": 1,
        "categoryAxis": {
            "gridPosition": "start",
            "position": "left"
        },
        "trendLines": [],
        "graphs": [
            {
                "balloonText": "Income:[[value]]",
                "fillAlphas": 0.8,
                "id": "AmGraph-1",
                "lineAlpha": 0.2,
                "title": "Income",
                "type": "column",
                "valueField": "income"
            },
            {
                "balloonText": "Expenses:[[value]]",
                "fillAlphas": 0.8,
                "id": "AmGraph-2",
                "lineAlpha": 0.2,
                "title": "Expenses",
                "type": "column",
                "valueField": "expenses"
            }
        ],
        "guides": [],
        "valueAxes": [
            {
                "id": "ValueAxis-1",
                "position": "top",
                "axisAlpha": 0
            }
        ],
        "allLabels": [],
        "balloon": {},
        "titles": [],
        "dataProvider": [
            {
                "year": 2005,
                "income": 23.5,
                "expenses": 18.1
            },
            {
                "year": 2006,
                "income": 26.2,
                "expenses": 22.8
            },
            {
                "year": 2007,
                "income": 30.1,
                "expenses": 23.9
            },
            {
                "year": 2008,
                "income": 29.5,
                "expenses": 25.1
            },
            {
                "year": 2009,
                "income": 24.6,
                "expenses": 25
            }
        ],
        "export": {
            "enabled": true
        }

    });

    var chart = AmCharts.makeChart("line-area-value-axis", {
        "type": "serial",
        "theme": "none",
        "legend": {
            "equalWidths": false,
            "useGraphSettings": true,
            "valueAlign": "left",
            "valueWidth": 120
        },
        "dataProvider": [{
            "date": "2012-01-01",
            "distance": 227,
            "townName": "New York",
            "townName2": "New York",
            "townSize": 25,
            "latitude": 40.71,
            "duration": 408
        }, {
            "date": "2012-01-02",
            "distance": 371,
            "townName": "Washington",
            "townSize": 14,
            "latitude": 38.89,
            "duration": 482
        }, {
            "date": "2012-01-03",
            "distance": 433,
            "townName": "Wilmington",
            "townSize": 6,
            "latitude": 34.22,
            "duration": 562
        }, {
            "date": "2012-01-04",
            "distance": 345,
            "townName": "Jacksonville",
            "townSize": 7,
            "latitude": 30.35,
            "duration": 379
        }, {
            "date": "2012-01-05",
            "distance": 480,
            "townName": "Miami",
            "townName2": "Miami",
            "townSize": 10,
            "latitude": 25.83,
            "duration": 501
        }, {
            "date": "2012-01-06",
            "distance": 386,
            "townName": "Tallahassee",
            "townSize": 7,
            "latitude": 30.46,
            "duration": 443
        }, {
            "date": "2012-01-07",
            "distance": 348,
            "townName": "New Orleans",
            "townSize": 10,
            "latitude": 29.94,
            "duration": 405
        }, {
            "date": "2012-01-08",
            "distance": 238,
            "townName": "Houston",
            "townName2": "Houston",
            "townSize": 16,
            "latitude": 29.76,
            "duration": 309
        }, {
            "date": "2012-01-09",
            "distance": 218,
            "townName": "Dalas",
            "townSize": 17,
            "latitude": 32.8,
            "duration": 287
        }, {
            "date": "2012-01-10",
            "distance": 349,
            "townName": "Oklahoma City",
            "townSize": 11,
            "latitude": 35.49,
            "duration": 485
        }, {
            "date": "2012-01-11",
            "distance": 603,
            "townName": "Kansas City",
            "townSize": 10,
            "latitude": 39.1,
            "duration": 890
        }, {
            "date": "2012-01-12",
            "distance": 534,
            "townName": "Denver",
            "townName2": "Denver",
            "townSize": 18,
            "latitude": 39.74,
            "duration": 810
        }, {
            "date": "2012-01-13",
            "townName": "Salt Lake City",
            "townSize": 12,
            "distance": 425,
            "duration": 670,
            "latitude": 40.75,
            "dashLength": 8,
            "alpha": 0.4
        }, {
            "date": "2012-01-14",
            "latitude": 36.1,
            "duration": 470,
            "townName": "Las Vegas",
            "townName2": "Las Vegas"
        }, {
            "date": "2012-01-15"
        }, {
            "date": "2012-01-16"
        }, {
            "date": "2012-01-17"
        }, {
            "date": "2012-01-18"
        }, {
            "date": "2012-01-19"
        }],
        "valueAxes": [{
            "id": "distanceAxis",
            "axisAlpha": 0,
            "gridAlpha": 0,
            "position": "left",
            "title": "distance"
        }, {
            "id": "latitudeAxis",
            "axisAlpha": 0,
            "gridAlpha": 0,
            "labelsEnabled": false,
            "position": "right"
        }, {
            "id": "durationAxis",
            "duration": "mm",
            "durationUnits": {
                "hh": "h ",
                "mm": "min"
            },
            "axisAlpha": 0,
            "gridAlpha": 0,
            "inside": true,
            "position": "right",
            "title": "duration"
        }],
        "graphs": [{
            "alphaField": "alpha",
            "balloonText": "[[value]] miles",
            "dashLengthField": "dashLength",
            "fillAlphas": 0.7,
            "legendPeriodValueText": "total: [[value.sum]] mi",
            "legendValueText": "[[value]] mi",
            "title": "distance",
            "type": "column",
            "valueField": "distance",
            "valueAxis": "distanceAxis"
        }, {
            "balloonText": "latitude:[[value]]",
            "bullet": "round",
            "bulletBorderAlpha": 1,
            "useLineColorForBulletBorder": true,
            "bulletColor": "#FFFFFF",
            "bulletSizeField": "townSize",
            "dashLengthField": "dashLength",
            "descriptionField": "townName",
            "labelPosition": "right",
            "labelText": "[[townName2]]",
            "legendValueText": "[[value]]/[[description]]",
            "title": "latitude/city",
            "fillAlphas": 0,
            "valueField": "latitude",
            "valueAxis": "latitudeAxis"
        }, {
            "bullet": "square",
            "bulletBorderAlpha": 1,
            "bulletBorderThickness": 1,
            "dashLengthField": "dashLength",
            "legendValueText": "[[value]]",
            "title": "duration",
            "fillAlphas": 0,
            "valueField": "duration",
            "valueAxis": "durationAxis"
        }],
        "chartCursor": {
            "categoryBalloonDateFormat": "DD",
            "cursorAlpha": 0.1,
            "cursorColor": "#000000",
            "fullWidth": true,
            "valueBalloonsEnabled": false,
            "zoomable": false
        },
        "dataDateFormat": "YYYY-MM-DD",
        "categoryField": "date",
        "categoryAxis": {
            "dateFormats": [{
                "period": "DD",
                "format": "DD"
            }, {
                "period": "WW",
                "format": "MMM DD"
            }, {
                "period": "MM",
                "format": "MMM"
            }, {
                "period": "YYYY",
                "format": "YYYY"
            }],
            "parseDates": true,
            "autoGridCount": false,
            "axisColor": "#555555",
            "gridAlpha": 0.1,
            "gridColor": "#FFFFFF",
            "gridCount": 50
        },
        "export": {
            "enabled": true
        }
    });
    var chart = AmCharts.makeChart("stack-area-chart", {
        "type": "serial",
        "theme": "none",
        "marginRight": 30,
        "legend": {
            "equalWidths": false,
            "periodValueText": "total: [[value.sum]]",
            "position": "top",
            "valueAlign": "left",
            "valueWidth": 100
        },
        "dataProvider": [{
            "year": 1994,
            "cars": 1587,
            "motorcycles": 650,
            "bicycles": 121
        }, {
            "year": 1995,
            "cars": 1567,
            "motorcycles": 683,
            "bicycles": 146
        }, {
            "year": 1996,
            "cars": 1617,
            "motorcycles": 691,
            "bicycles": 138
        }, {
            "year": 1997,
            "cars": 1630,
            "motorcycles": 642,
            "bicycles": 127
        }, {
            "year": 1998,
            "cars": 1660,
            "motorcycles": 699,
            "bicycles": 105
        }, {
            "year": 1999,
            "cars": 1683,
            "motorcycles": 721,
            "bicycles": 109
        }, {
            "year": 2000,
            "cars": 1691,
            "motorcycles": 737,
            "bicycles": 112
        }, {
            "year": 2001,
            "cars": 1298,
            "motorcycles": 680,
            "bicycles": 101
        }, {
            "year": 2002,
            "cars": 1275,
            "motorcycles": 664,
            "bicycles": 97
        }, {
            "year": 2003,
            "cars": 1246,
            "motorcycles": 648,
            "bicycles": 93
        }, {
            "year": 2004,
            "cars": 1318,
            "motorcycles": 697,
            "bicycles": 111
        }, {
            "year": 2005,
            "cars": 1213,
            "motorcycles": 633,
            "bicycles": 87
        }, {
            "year": 2006,
            "cars": 1199,
            "motorcycles": 621,
            "bicycles": 79
        }, {
            "year": 2007,
            "cars": 1110,
            "motorcycles": 210,
            "bicycles": 81
        }, {
            "year": 2008,
            "cars": 1165,
            "motorcycles": 232,
            "bicycles": 75
        }, {
            "year": 2009,
            "cars": 1145,
            "motorcycles": 219,
            "bicycles": 88
        }, {
            "year": 2010,
            "cars": 1163,
            "motorcycles": 201,
            "bicycles": 82
        }, {
            "year": 2011,
            "cars": 1180,
            "motorcycles": 285,
            "bicycles": 87
        }, {
            "year": 2012,
            "cars": 1159,
            "motorcycles": 277,
            "bicycles": 71
        }],
        "valueAxes": [{
            "stackType": "regular",
            "gridAlpha": 0.07,
            "position": "left",
            "title": "Traffic incidents"
        }],
        "graphs": [{
            "balloonText": "" +
            "<img src='../../assets/admin/img/charts/car.png' style='vertical-align:bottom; " +
            "margin-right: 10px; width:28px; height:21px;'><span style='font-size:14px; color:#000000;'>" +
            "<b>[[value]]</b></span>",
            "fillAlphas": 0.6,
            "hidden": true,
            "lineAlpha": 0.4,
            "title": "Cars",
            "valueField": "cars"
        }, {
            "balloonText": "" +
            "<img src='../../assets/admin/img/charts/motorcycle.png' style='vertical-align:bottom;" +
            " margin-right: 10px; width:28px; height:21px;'><span style='font-size:14px; color:#000000;'>" +
            "<b>[[value]]</b></span>",
            "fillAlphas": 0.6,
            "lineAlpha": 0.4,
            "title": "Motorcycles",
            "valueField": "motorcycles"
        }, {
            "balloonText": "" +
            "<img src='../../assets/admin/img/charts/bicycle.png' style='vertical-align:bottom; " +
            "margin-right: 10px; width:28px; height:21px;'><span style='font-size:14px; color:#000000;'>" +
            "<b>[[value]]</b></span>",
            "fillAlphas": 0.6,
            "lineAlpha": 0.4,
            "title": "Bicycles",
            "valueField": "bicycles"
        }],
        "plotAreaBorderAlpha": 0,
        "marginTop": 10,
        "marginLeft": 0,
        "marginBottom": 0,
        "chartScrollbar": {},
        "chartCursor": {
            "cursorAlpha": 0
        },
        "categoryField": "year",
        "categoryAxis": {
            "startOnAxis": true,
            "axisColor": "#DADADA",
            "gridAlpha": 0.07,
            "title": "Year",
            "guides": [{
                category: "2001",
                toCategory: "2003",
                lineColor: "#CC0000",
                lineAlpha: 1,
                fillAlpha: 0.2,
                fillColor: "#CC0000",
                dashLength: 2,
                inside: true,
                labelRotation: 90,
                label: "fines for speeding increased"
            }, {
                category: "2007",
                lineColor: "#CC0000",
                lineAlpha: 1,
                dashLength: 2,
                inside: true,
                labelRotation: 90,
                label: "motorcycle fee introduced"
            }]
        },
        "export": {
            "enabled": true
        }
    });
    var chart = AmCharts.makeChart("3d-cylinder-chart", {
        "theme": "light",
        "type": "serial",
        "startDuration": 2,
        "dataProvider": [{
            "country": "USA",
            "visits": 4025,
            "color": "#FF0F00"
        }, {
            "country": "China",
            "visits": 1882,
            "color": "#FF6600"
        }, {
            "country": "Japan",
            "visits": 1809,
            "color": "#FF9E01"
        }, {
            "country": "Germany",
            "visits": 1322,
            "color": "#FCD202"
        }, {
            "country": "UK",
            "visits": 1122,
            "color": "#F8FF01"
        }, {
            "country": "France",
            "visits": 1114,
            "color": "#B0DE09"
        }, {
            "country": "India",
            "visits": 984,
            "color": "#04D215"
        }, {
            "country": "Spain",
            "visits": 711,
            "color": "#0D8ECF"
        }, {
            "country": "Netherlands",
            "visits": 665,
            "color": "#0D52D1"
        }, {
            "country": "Russia",
            "visits": 580,
            "color": "#2A0CD0"
        }, {
            "country": "South Korea",
            "visits": 443,
            "color": "#8A0CCF"
        }, {
            "country": "Canada",
            "visits": 441,
            "color": "#CD0D74"
        }, {
            "country": "Brazil",
            "visits": 395,
            "color": "#754DEB"
        }, {
            "country": "Italy",
            "visits": 386,
            "color": "#DDDDDD"
        }, {
            "country": "Taiwan",
            "visits": 338,
            "color": "#333333"
        }],
        "valueAxes": [{
            "position": "left",
            "axisAlpha":0,
            "gridAlpha":0
        }],
        "graphs": [{
            "balloonText": "[[category]]: <b>[[value]]</b>",
            "colorField": "color",
            "fillAlphas": 0.85,
            "lineAlpha": 0.1,
            "type": "column",
            "topRadius":1,
            "valueField": "visits"
        }],
        "depth3D": 40,
        "angle": 30,
        "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
        },
        "categoryField": "country",
        "categoryAxis": {
            "gridPosition": "start",
            "axisAlpha":0,
            "gridAlpha":0

        },
        "export": {
            "enabled": true
        },
        "controls":[{
        "category": "Graph",
        "title": "Top Radius",
        "type": "slider",
        "min": 0,
        "max": 1.5,
        "property": "graphs[0].topRadius"
    }, {
        "category": "Chart",
            "title": "Angle",
            "type": "slider",
            "min":  0,
            "max": 89,
            "property": "angle"
    }, {
        "category": "Chart",
            "title": "Depth 3D",
            "type": "slider",
            "min": 1,
            "max": 120,
            "property": "depth3D"
    }],

    }, 0);

    /**
     * Define data for each year
     */
    var chartData = {
        "1995": [
            { "sector": "Agriculture", "size": 6.6 },
            { "sector": "Mining and Quarrying", "size": 0.6 },
            { "sector": "Manufacturing", "size": 23.2 },
            { "sector": "Electricity and Water", "size": 2.2 },
            { "sector": "Construction", "size": 4.5 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 14.6 },
            { "sector": "Transport and Communication", "size": 9.3 },
            { "sector": "Finance, real estate and business services", "size": 22.5 } ],
        "1996": [
            { "sector": "Agriculture", "size": 6.4 },
            { "sector": "Mining and Quarrying", "size": 0.5 },
            { "sector": "Manufacturing", "size": 22.4 },
            { "sector": "Electricity and Water", "size": 2 },
            { "sector": "Construction", "size": 4.2 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 14.8 },
            { "sector": "Transport and Communication", "size": 9.7 },
            { "sector": "Finance, real estate and business services", "size": 22 } ],
        "1997": [
            { "sector": "Agriculture", "size": 6.1 },
            { "sector": "Mining and Quarrying", "size": 0.2 },
            { "sector": "Manufacturing", "size": 20.9 },
            { "sector": "Electricity and Water", "size": 1.8 },
            { "sector": "Construction", "size": 4.2 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 13.7 },
            { "sector": "Transport and Communication", "size": 9.4 },
            { "sector": "Finance, real estate and business services", "size": 22.1 } ],
        "1998": [
            { "sector": "Agriculture", "size": 6.2 },
            { "sector": "Mining and Quarrying", "size": 0.3 },
            { "sector": "Manufacturing", "size": 21.4 },
            { "sector": "Electricity and Water", "size": 1.9 },
            { "sector": "Construction", "size": 4.2 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 14.5 },
            { "sector": "Transport and Communication", "size": 10.6 },
            { "sector": "Finance, real estate and business services", "size": 23 } ],
        "1999": [
            { "sector": "Agriculture", "size": 5.7 },
            { "sector": "Mining and Quarrying", "size": 0.2 },
            { "sector": "Manufacturing", "size": 20 },
            { "sector": "Electricity and Water", "size": 1.8 },
            { "sector": "Construction", "size": 4.4 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 15.2 },
            { "sector": "Transport and Communication", "size": 10.5 },
            { "sector": "Finance, real estate and business services", "size": 24.7 } ],
        "2000": [
            { "sector": "Agriculture", "size": 5.1 },
            { "sector": "Mining and Quarrying", "size": 0.3 },
            { "sector": "Manufacturing", "size": 20.4 },
            { "sector": "Electricity and Water", "size": 1.7 },
            { "sector": "Construction", "size": 4 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 16.3 },
            { "sector": "Transport and Communication", "size": 10.7 },
            { "sector": "Finance, real estate and business services", "size": 24.6 } ],
        "2001": [
            { "sector": "Agriculture", "size": 5.5 },
            { "sector": "Mining and Quarrying", "size": 0.2 },
            { "sector": "Manufacturing", "size": 20.3 },
            { "sector": "Electricity and Water", "size": 1.6 },
            { "sector": "Construction", "size": 3.1 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 16.3 },
            { "sector": "Transport and Communication", "size": 10.7 },
            { "sector": "Finance, real estate and business services", "size": 25.8 } ],
        "2002": [
            { "sector": "Agriculture", "size": 5.7 },
            { "sector": "Mining and Quarrying", "size": 0.2 },
            { "sector": "Manufacturing", "size": 20.5 },
            { "sector": "Electricity and Water", "size": 1.6 },
            { "sector": "Construction", "size": 3.6 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 16.1 },
            { "sector": "Transport and Communication", "size": 10.7 },
            { "sector": "Finance, real estate and business services", "size": 26 } ],
        "2003": [
            { "sector": "Agriculture", "size": 4.9 },
            { "sector": "Mining and Quarrying", "size": 0.2 },
            { "sector": "Manufacturing", "size": 19.4 },
            { "sector": "Electricity and Water", "size": 1.5 },
            { "sector": "Construction", "size": 3.3 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 16.2 },
            { "sector": "Transport and Communication", "size": 11 },
            { "sector": "Finance, real estate and business services", "size": 27.5 } ],
        "2004": [
            { "sector": "Agriculture", "size": 4.7 },
            { "sector": "Mining and Quarrying", "size": 0.2 },
            { "sector": "Manufacturing", "size": 18.4 },
            { "sector": "Electricity and Water", "size": 1.4 },
            { "sector": "Construction", "size": 3.3 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 16.9 },
            { "sector": "Transport and Communication", "size": 10.6 },
            { "sector": "Finance, real estate and business services", "size": 28.1 } ],
        "2005": [
            { "sector": "Agriculture", "size": 4.3 },
            { "sector": "Mining and Quarrying", "size": 0.2 },
            { "sector": "Manufacturing", "size": 18.1 },
            { "sector": "Electricity and Water", "size": 1.4 },
            { "sector": "Construction", "size": 3.9 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 15.7 },
            { "sector": "Transport and Communication", "size": 10.6 },
            { "sector": "Finance, real estate and business services", "size": 29.1 } ],
        "2006": [
            { "sector": "Agriculture", "size": 4 },
            { "sector": "Mining and Quarrying", "size": 0.2 },
            { "sector": "Manufacturing", "size": 16.5 },
            { "sector": "Electricity and Water", "size": 1.3 },
            { "sector": "Construction", "size": 3.7 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 14.2 },
            { "sector": "Transport and Communication", "size": 12.1 },
            { "sector": "Finance, real estate and business services", "size": 29.1 } ],
        "2007": [
            { "sector": "Agriculture", "size": 4.7 },
            { "sector": "Mining and Quarrying", "size": 0.2 },
            { "sector": "Manufacturing", "size": 16.2 },
            { "sector": "Electricity and Water", "size": 1.2 },
            { "sector": "Construction", "size": 4.1 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 15.6 },
            { "sector": "Transport and Communication", "size": 11.2 },
            { "sector": "Finance, real estate and business services", "size": 30.4 } ],
        "2008": [
            { "sector": "Agriculture", "size": 4.9 },
            { "sector": "Mining and Quarrying", "size": 0.3 },
            { "sector": "Manufacturing", "size": 17.2 },
            { "sector": "Electricity and Water", "size": 1.4 },
            { "sector": "Construction", "size": 5.1 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 15.4 },
            { "sector": "Transport and Communication", "size": 11.1 },
            { "sector": "Finance, real estate and business services", "size": 28.4 } ],
        "2009": [
            { "sector": "Agriculture", "size": 4.7 },
            { "sector": "Mining and Quarrying", "size": 0.3 },
            { "sector": "Manufacturing", "size": 16.4 },
            { "sector": "Electricity and Water", "size": 1.9 },
            { "sector": "Construction", "size": 4.9 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 15.5 },
            { "sector": "Transport and Communication", "size": 10.9 },
            { "sector": "Finance, real estate and business services", "size": 27.9 } ],
        "2010": [
            { "sector": "Agriculture", "size": 4.2 },
            { "sector": "Mining and Quarrying", "size": 0.3 },
            { "sector": "Manufacturing", "size": 16.2 },
            { "sector": "Electricity and Water", "size": 2.2 },
            { "sector": "Construction", "size": 4.3 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 15.7 },
            { "sector": "Transport and Communication", "size": 10.2 },
            { "sector": "Finance, real estate and business services", "size": 28.8 } ],
        "2011": [
            { "sector": "Agriculture", "size": 4.1 },
            { "sector": "Mining and Quarrying", "size": 0.3 },
            { "sector": "Manufacturing", "size": 14.9 },
            { "sector": "Electricity and Water", "size": 2.3 },
            { "sector": "Construction", "size": 5 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 17.3 },
            { "sector": "Transport and Communication", "size": 10.2 },
            { "sector": "Finance, real estate and business services", "size": 27.2 } ],
        "2012": [
            { "sector": "Agriculture", "size": 3.8 },
            { "sector": "Mining and Quarrying", "size": 0.3 },
            { "sector": "Manufacturing", "size": 14.9 },
            { "sector": "Electricity and Water", "size": 2.6 },
            { "sector": "Construction", "size": 5.1 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 15.8 },
            { "sector": "Transport and Communication", "size": 10.7 },
            { "sector": "Finance, real estate and business services", "size": 28 } ],
        "2013": [
            { "sector": "Agriculture", "size": 3.7 },
            { "sector": "Mining and Quarrying", "size": 0.2 },
            { "sector": "Manufacturing", "size": 14.9 },
            { "sector": "Electricity and Water", "size": 2.7 },
            { "sector": "Construction", "size": 5.7 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 16.5 },
            { "sector": "Transport and Communication", "size": 10.5 },
            { "sector": "Finance, real estate and business services", "size": 26.6 } ],
        "2014": [
            { "sector": "Agriculture", "size": 3.9 },
            { "sector": "Mining and Quarrying", "size": 0.2 },
            { "sector": "Manufacturing", "size": 14.5 },
            { "sector": "Electricity and Water", "size": 2.7 },
            { "sector": "Construction", "size": 5.6 },
            { "sector": "Trade (Wholesale, Retail, Motor)", "size": 16.6 },
            { "sector": "Transport and Communication", "size": 10.5 },
            { "sector": "Finance, real estate and business services", "size": 26.5 } ]
    };


    /**
     * Create the chart
     */
    var currentYear = 1995;
    var chart = AmCharts.makeChart( "animated-pie-chart", {
        "type": "pie",
        "theme": "light",
        "dataProvider": [],
        "valueField": "size",
        "titleField": "sector",
        "startDuration": 0,
        "innerRadius": 80,
        "pullOutRadius": 20,
        "marginTop": 30,
        "titles": [{
            "text": "South African Economy"
        }],
        "allLabels": [{
            "y": "54%",
            "align": "center",
            "size": 25,
            "bold": true,
            "text": "1995",
            "color": "#555"
        }, {
            "y": "49%",
            "align": "center",
            "size": 15,
            "text": "Year",
            "color": "#555"
        }],
        "listeners": [ {
            "event": "init",
            "method": function( e ) {
                var chart = e.chart;

                function getCurrentData() {
                    var data = chartData[currentYear];
                    currentYear++;
                    if (currentYear > 2014)
                        currentYear = 1995;
                    return data;
                }

                function loop() {
                    chart.allLabels[0].text = currentYear;
                    var data = getCurrentData();
                    chart.animateData( data, {
                        duration: 1000,
                        complete: function() {
                            setTimeout( loop, 3000 );
                        }
                    } );
                }

                loop();
            }
        } ],
        "export": {
            "enabled": true
        }
    } );

});