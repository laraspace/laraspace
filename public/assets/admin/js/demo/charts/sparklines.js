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
});