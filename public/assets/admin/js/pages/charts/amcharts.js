var AMCharts = (function () {
  var handleColumnAndLineChart = function () {
    var columnAndLineChart = AmCharts.makeChart('bar-line-chart', {
      'type': 'serial',
      'addClassNames': true,
      'theme': 'light',
      'autoMargins': false,
      'marginLeft': 30,
      'marginRight': 8,
      'marginTop': 10,
      'marginBottom': 26,
      'balloon': {
        'adjustBorderColor': false,
        'horizontalPadding': 10,
        'verticalPadding': 8,
        'color': '#ffffff'
      },
      'dataProvider': [{
        'year': 2009,
        'income': 23.5,
        'expenses': 21.1
      }, {
        'year': 2010,
        'income': 26.2,
        'expenses': 30.5
      }, {
        'year': 2011,
        'income': 30.1,
        'expenses': 34.9
      }, {
        'year': 2012,
        'income': 29.5,
        'expenses': 31.1
      }, {
        'year': 2013,
        'income': 30.6,
        'expenses': 28.2,
        'dashLengthLine': 5
      }, {
        'year': 2014,
        'income': 34.1,
        'expenses': 32.9,
        'dashLengthColumn': 5,
        'alpha': 0.2,
        'additional': '(projection)'
      }],
      'valueAxes': [{
        'axisAlpha': 0,
        'position': 'left'
      }],
      'startDuration': 1,
      'graphs': [{
        'alphaField': 'alpha',
        'balloonText': '<span style="font-size:12px;">' +
        '[[title]] in [[category]]:<br><span style="font-size:20px;">' +
        '[[value]]</span> [[additional]]</span>',
        'fillAlphas': 1,
        'title': 'Income',
        'type': 'column',
        'valueField': 'income',
        'dashLengthField': 'dashLengthColumn'
      }, {
        'id': 'graph2',
        'balloonText': '<span style="font-size:12px;">' +
        '[[title]] in [[category]]:<br><span style="font-size:20px;">' +
        '[[value]]</span> [[additional]]</span>',
        'bullet': 'round',
        'lineThickness': 3,
        'bulletSize': 7,
        'bulletBorderAlpha': 1,
        'bulletColor': '#FFFFFF',
        'useLineColorForBulletBorder': true,
        'bulletBorderThickness': 3,
        'fillAlphas': 0,
        'lineAlpha': 1,
        'title': 'Expenses',
        'valueField': 'expenses',
        'dashLengthField': 'dashLengthLine'
      }],
      'categoryField': 'year',
      'categoryAxis': {
        'gridPosition': 'start',
        'axisAlpha': 0,
        'tickLength': 0
      },
      'export': {
        'enabled': true
      }
    })
  }

  var handleClusterBarChart = function () {
    var clusterBarChart = AmCharts.makeChart('clust-bar-chart', {
      'type': 'serial',
      'categoryField': 'year',
      'theme': 'light',
      'rotate': true,
      'startDuration': 1,
      'categoryAxis': {
        'gridPosition': 'start',
        'position': 'left'
      },
      'trendLines': [],
      'graphs': [
        {
          'balloonText': 'Income:[[value]]',
          'fillAlphas': 0.8,
          'id': 'AmGraph-1',
          'lineAlpha': 0.2,
          'title': 'Income',
          'type': 'column',
          'valueField': 'income'
        },
        {
          'balloonText': 'Expenses:[[value]]',
          'fillAlphas': 0.8,
          'id': 'AmGraph-2',
          'lineAlpha': 0.2,
          'title': 'Expenses',
          'type': 'column',
          'valueField': 'expenses'
        }
      ],
      'guides': [],
      'valueAxes': [
        {
          'id': 'ValueAxis-1',
          'position': 'top',
          'axisAlpha': 0
        }
      ],
      'allLabels': [],
      'balloon': {},
      'titles': [],
      'dataProvider': [
        {
          'year': 2005,
          'income': 23.5,
          'expenses': 18.1
        },
        {
          'year': 2006,
          'income': 26.2,
          'expenses': 22.8
        },
        {
          'year': 2007,
          'income': 30.1,
          'expenses': 23.9
        },
        {
          'year': 2008,
          'income': 29.5,
          'expenses': 25.1
        },
        {
          'year': 2009,
          'income': 24.6,
          'expenses': 25
        }
      ],
      'export': {
        'enabled': true
      }
    })
  }

  var handleDurationOnValueAxisChart = function () {
    var durationOnValueAxisChart = AmCharts.makeChart('line-area-value-axis', {
      'type': 'serial',
      'theme': 'light',
      'legend': {
        'equalWidths': false,
        'useGraphSettings': true,
        'valueAlign': 'left',
        'valueWidth': 120
      },
      'dataProvider': [{
        'date': '2012-01-01',
        'distance': 227,
        'townName': 'New York',
        'townName2': 'New York',
        'townSize': 25,
        'latitude': 40.71,
        'duration': 408
      }, {
        'date': '2012-01-02',
        'distance': 371,
        'townName': 'Washington',
        'townSize': 14,
        'latitude': 38.89,
        'duration': 482
      }, {
        'date': '2012-01-03',
        'distance': 433,
        'townName': 'Wilmington',
        'townSize': 6,
        'latitude': 34.22,
        'duration': 562
      }, {
        'date': '2012-01-04',
        'distance': 345,
        'townName': 'Jacksonville',
        'townSize': 7,
        'latitude': 30.35,
        'duration': 379
      }, {
        'date': '2012-01-05',
        'distance': 480,
        'townName': 'Miami',
        'townName2': 'Miami',
        'townSize': 10,
        'latitude': 25.83,
        'duration': 501
      }, {
        'date': '2012-01-06',
        'distance': 386,
        'townName': 'Tallahassee',
        'townSize': 7,
        'latitude': 30.46,
        'duration': 443
      }, {
        'date': '2012-01-07',
        'distance': 348,
        'townName': 'New Orleans',
        'townSize': 10,
        'latitude': 29.94,
        'duration': 405
      }, {
        'date': '2012-01-08',
        'distance': 238,
        'townName': 'Houston',
        'townName2': 'Houston',
        'townSize': 16,
        'latitude': 29.76,
        'duration': 309
      }, {
        'date': '2012-01-09',
        'distance': 218,
        'townName': 'Dalas',
        'townSize': 17,
        'latitude': 32.8,
        'duration': 287
      }, {
        'date': '2012-01-10',
        'distance': 349,
        'townName': 'Oklahoma City',
        'townSize': 11,
        'latitude': 35.49,
        'duration': 485
      }, {
        'date': '2012-01-11',
        'distance': 603,
        'townName': 'Kansas City',
        'townSize': 10,
        'latitude': 39.1,
        'duration': 890
      }, {
        'date': '2012-01-12',
        'distance': 534,
        'townName': 'Denver',
        'townName2': 'Denver',
        'townSize': 18,
        'latitude': 39.74,
        'duration': 810
      }, {
        'date': '2012-01-13',
        'townName': 'Salt Lake City',
        'townSize': 12,
        'distance': 425,
        'duration': 670,
        'latitude': 40.75,
        'dashLength': 8,
        'alpha': 0.4
      }, {
        'date': '2012-01-14',
        'latitude': 36.1,
        'duration': 470,
        'townName': 'Las Vegas',
        'townName2': 'Las Vegas'
      }, {
        'date': '2012-01-15'
      }, {
        'date': '2012-01-16'
      }, {
        'date': '2012-01-17'
      }, {
        'date': '2012-01-18'
      }, {
        'date': '2012-01-19'
      }],
      'valueAxes': [{
        'id': 'distanceAxis',
        'axisAlpha': 0,
        'gridAlpha': 0,
        'position': 'left',
        'title': 'distance'
      }, {
        'id': 'latitudeAxis',
        'axisAlpha': 0,
        'gridAlpha': 0,
        'labelsEnabled': false,
        'position': 'right'
      }, {
        'id': 'durationAxis',
        'duration': 'mm',
        'durationUnits': {
          'hh': 'h ',
          'mm': 'min'
        },
        'axisAlpha': 0,
        'gridAlpha': 0,
        'inside': true,
        'position': 'right',
        'title': 'duration'
      }],
      'graphs': [{
        'alphaField': 'alpha',
        'balloonText': '[[value]] miles',
        'dashLengthField': 'dashLength',
        'fillAlphas': 0.7,
        'legendPeriodValueText': 'total: [[value.sum]] mi',
        'legendValueText': '[[value]] mi',
        'title': 'distance',
        'type': 'column',
        'valueField': 'distance',
        'valueAxis': 'distanceAxis'
      }, {
        'balloonText': 'latitude:[[value]]',
        'bullet': 'round',
        'bulletBorderAlpha': 1,
        'useLineColorForBulletBorder': true,
        'bulletColor': '#FFFFFF',
        'bulletSizeField': 'townSize',
        'dashLengthField': 'dashLength',
        'descriptionField': 'townName',
        'labelPosition': 'right',
        'labelText': '[[townName2]]',
        'legendValueText': '[[value]]/[[description]]',
        'title': 'latitude/city',
        'fillAlphas': 0,
        'valueField': 'latitude',
        'valueAxis': 'latitudeAxis'
      }, {
        'bullet': 'square',
        'bulletBorderAlpha': 1,
        'bulletBorderThickness': 1,
        'dashLengthField': 'dashLength',
        'legendValueText': '[[value]]',
        'title': 'duration',
        'fillAlphas': 0,
        'valueField': 'duration',
        'valueAxis': 'durationAxis'
      }],
      'chartCursor': {
        'categoryBalloonDateFormat': 'DD',
        'cursorAlpha': 0.1,
        'cursorColor': '#000000',
        'fullWidth': true,
        'valueBalloonsEnabled': false,
        'zoomable': false
      },
      'dataDateFormat': 'YYYY-MM-DD',
      'categoryField': 'date',
      'categoryAxis': {
        'dateFormats': [{
          'period': 'DD',
          'format': 'DD'
        }, {
          'period': 'WW',
          'format': 'MMM DD'
        }, {
          'period': 'MM',
          'format': 'MMM'
        }, {
          'period': 'YYYY',
          'format': 'YYYY'
        }],
        'parseDates': true,
        'autoGridCount': false,
        'axisColor': '#555555',
        'gridAlpha': 0.1,
        'gridColor': '#FFFFFF',
        'gridCount': 50
      },
      'export': {
        'enabled': true
      }
    })
  }

  var handleStackAreaChart = function () {
    var stackAreaChart = AmCharts.makeChart('stack-area-chart', {
      'type': 'serial',
      'theme': 'light',
      'pathToImages': '/assets/admin/img/charts/',
      'marginRight': 30,
      'legend': {
        'equalWidths': false,
        'periodValueText': 'total: [[value.sum]]',
        'position': 'top',
        'valueAlign': 'left',
        'valueWidth': 100
      },
      'dataProvider': [{
        'year': 1994,
        'cars': 1587,
        'motorcycles': 650,
        'bicycles': 121
      }, {
        'year': 1995,
        'cars': 1567,
        'motorcycles': 683,
        'bicycles': 146
      }, {
        'year': 1996,
        'cars': 1617,
        'motorcycles': 691,
        'bicycles': 138
      }, {
        'year': 1997,
        'cars': 1630,
        'motorcycles': 642,
        'bicycles': 127
      }, {
        'year': 1998,
        'cars': 1660,
        'motorcycles': 699,
        'bicycles': 105
      }, {
        'year': 1999,
        'cars': 1683,
        'motorcycles': 721,
        'bicycles': 109
      }, {
        'year': 2000,
        'cars': 1691,
        'motorcycles': 737,
        'bicycles': 112
      }, {
        'year': 2001,
        'cars': 1298,
        'motorcycles': 680,
        'bicycles': 101
      }, {
        'year': 2002,
        'cars': 1275,
        'motorcycles': 664,
        'bicycles': 97
      }, {
        'year': 2003,
        'cars': 1246,
        'motorcycles': 648,
        'bicycles': 93
      }, {
        'year': 2004,
        'cars': 1318,
        'motorcycles': 697,
        'bicycles': 111
      }, {
        'year': 2005,
        'cars': 1213,
        'motorcycles': 633,
        'bicycles': 87
      }, {
        'year': 2006,
        'cars': 1199,
        'motorcycles': 621,
        'bicycles': 79
      }, {
        'year': 2007,
        'cars': 1110,
        'motorcycles': 210,
        'bicycles': 81
      }, {
        'year': 2008,
        'cars': 1165,
        'motorcycles': 232,
        'bicycles': 75
      }, {
        'year': 2009,
        'cars': 1145,
        'motorcycles': 219,
        'bicycles': 88
      }, {
        'year': 2010,
        'cars': 1163,
        'motorcycles': 201,
        'bicycles': 82
      }, {
        'year': 2011,
        'cars': 1180,
        'motorcycles': 285,
        'bicycles': 87
      }, {
        'year': 2012,
        'cars': 1159,
        'motorcycles': 277,
        'bicycles': 71
      }],
      'valueAxes': [{
        'stackType': 'regular',
        'gridAlpha': 0.07,
        'position': 'left',
        'title': 'Traffic incidents'
      }],
      'graphs': [{
        'balloonText': '' +
        '<img src="/assets/admin/img/charts/car.png" style="vertical-align:bottom;' +
        'margin-right: 10px; width:28px; height:21px;"><span style="font-size:14px; color:#000000;">' +
        '<b>[[value]]</b></span>',
        'fillAlphas': 0.6,
        'hidden': true,
        'lineAlpha': 0.4,
        'title': 'Cars',
        'valueField': 'cars'
      }, {
        'balloonText': '' +
        '<img src="/assets/admin/img/charts/motorcycle.png" style="vertical-align:bottom;' +
        ' margin-right: 10px; width:28px; height:21px;"><span style="font-size:14px; color:#000000;">' +
        '<b>[[value]]</b></span>',
        'fillAlphas': 0.6,
        'lineAlpha': 0.4,
        'title': 'Motorcycles',
        'valueField': 'motorcycles'
      }, {
        'balloonText': '' +
        '<img src="/assets/admin/img/charts/bicycle.png" style="vertical-align:bottom; ' +
        'margin-right: 10px; width:28px; height:21px;"><span style="font-size:14px; color:#000000;">' +
        '<b>[[value]]</b></span>',
        'fillAlphas': 0.6,
        'lineAlpha': 0.4,
        'title': 'Bicycles',
        'valueField': 'bicycles'
      }],
      'plotAreaBorderAlpha': 0,
      'marginTop': 10,
      'marginLeft': 0,
      'marginBottom': 0,
      'chartScrollbar': {},
      'chartCursor': {
        'cursorAlpha': 0
      },
      'categoryField': 'year',
      'categoryAxis': {
        'startOnAxis': true,
        'axisColor': '#DADADA',
        'gridAlpha': 0.07,
        'title': 'Year',
        'guides': [{
          category: '2001',
          toCategory: '2003',
          lineColor: '#CC0000',
          lineAlpha: 1,
          fillAlpha: 0.2,
          fillColor: '#CC0000',
          dashLength: 2,
          inside: true,
          labelRotation: 90,
          label: 'fines for speeding increased'
        }, {
          category: '2007',
          lineColor: '#CC0000',
          lineAlpha: 1,
          dashLength: 2,
          inside: true,
          labelRotation: 90,
          label: 'motorcycle fee introduced'
        }]
      },
      'export': {
        'enabled': true
      }
    })
  }

  var handle3dCylinderChart = function () {
    var cylinderChart = AmCharts.makeChart('3d-cylinder-chart', {
      'theme': 'light',
      'type': 'serial',
      'startDuration': 2,
      'dataProvider': [{
        'country': 'USA',
        'visits': 4025,
        'color': '#FF0F00'
      }, {
        'country': 'China',
        'visits': 1882,
        'color': '#FF6600'
      }, {
        'country': 'Japan',
        'visits': 1809,
        'color': '#FF9E01'
      }, {
        'country': 'Germany',
        'visits': 1322,
        'color': '#FCD202'
      }, {
        'country': 'UK',
        'visits': 1122,
        'color': '#F8FF01'
      }, {
        'country': 'France',
        'visits': 1114,
        'color': '#B0DE09'
      }, {
        'country': 'India',
        'visits': 984,
        'color': '#04D215'
      }, {
        'country': 'Spain',
        'visits': 711,
        'color': '#0D8ECF'
      }, {
        'country': 'Netherlands',
        'visits': 665,
        'color': '#0D52D1'
      }, {
        'country': 'Russia',
        'visits': 580,
        'color': '#2A0CD0'
      }, {
        'country': 'South Korea',
        'visits': 443,
        'color': '#8A0CCF'
      }, {
        'country': 'Canada',
        'visits': 441,
        'color': '#CD0D74'
      }, {
        'country': 'Brazil',
        'visits': 395,
        'color': '#754DEB'
      }, {
        'country': 'Italy',
        'visits': 386,
        'color': '#DDDDDD'
      }, {
        'country': 'Taiwan',
        'visits': 338,
        'color': '#333333'
      }],
      'valueAxes': [{
        'position': 'left',
        'axisAlpha': 0,
        'gridAlpha': 0
      }],
      'graphs': [{
        'balloonText': '[[category]]: <b>[[value]]</b>',
        'colorField': 'color',
        'fillAlphas': 0.85,
        'lineAlpha': 0.1,
        'type': 'column',
        'topRadius': 1,
        'valueField': 'visits'
      }],
      'depth3D': 40,
      'angle': 30,
      'chartCursor': {
        'categoryBalloonEnabled': false,
        'cursorAlpha': 0,
        'zoomable': false
      },
      'categoryField': 'country',
      'categoryAxis': {
        'gridPosition': 'start',
        'axisAlpha': 0,
        'gridAlpha': 0
      },
      'export': {
        'enabled': true
      }
    }, 0)
    jQuery('.cylinder_chart_input').off().on('input change', function () {
      var t = jQuery(this).data('property')
      var a = cylinderChart
      cylinderChart.startDuration = 0
      topRadius == t && (a = cylinderChart.graphs[0])
      a[t] = this.value
      cylinderChart.validateNow()
    })
  }

  var handleAnimatedTimeLinePieChart = function () {
    /**
    * Define data for each year
    */
    var chartData = {
      '1995': [
        {'sector': 'Agriculture', 'size': 6.6},
        {'sector': 'Mining and Quarrying', 'size': 0.6},
        {'sector': 'Manufacturing', 'size': 23.2},
        {'sector': 'Electricity and Water', 'size': 2.2},
        {'sector': 'Construction', 'size': 4.5},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 14.6},
        {'sector': 'Transport and Communication', 'size': 9.3},
        {'sector': 'Finance, real estate and business services', 'size': 22.5}
      ],
      '1996': [
        {'sector': 'Agriculture', 'size': 6.4},
        {'sector': 'Mining and Quarrying', 'size': 0.5},
        {'sector': 'Manufacturing', 'size': 22.4},
        {'sector': 'Electricity and Water', 'size': 2},
        {'sector': 'Construction', 'size': 4.2},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 14.8},
        {'sector': 'Transport and Communication', 'size': 9.7},
        {'sector': 'Finance, real estate and business services', 'size': 22}
      ],
      '1997': [
        {'sector': 'Agriculture', 'size': 6.1},
        {'sector': 'Mining and Quarrying', 'size': 0.2},
        {'sector': 'Manufacturing', 'size': 20.9},
        {'sector': 'Electricity and Water', 'size': 1.8},
        {'sector': 'Construction', 'size': 4.2},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 13.7},
        {'sector': 'Transport and Communication', 'size': 9.4},
        {'sector': 'Finance, real estate and business services', 'size': 22.1}
      ],
      '1998': [
        {'sector': 'Agriculture', 'size': 6.2},
        {'sector': 'Mining and Quarrying', 'size': 0.3},
        {'sector': 'Manufacturing', 'size': 21.4},
        {'sector': 'Electricity and Water', 'size': 1.9},
        {'sector': 'Construction', 'size': 4.2},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 14.5},
        {'sector': 'Transport and Communication', 'size': 10.6},
        {'sector': 'Finance, real estate and business services', 'size': 23}
      ],
      '1999': [
        {'sector': 'Agriculture', 'size': 5.7},
        {'sector': 'Mining and Quarrying', 'size': 0.2},
        {'sector': 'Manufacturing', 'size': 20},
        {'sector': 'Electricity and Water', 'size': 1.8},
        {'sector': 'Construction', 'size': 4.4},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 15.2},
        {'sector': 'Transport and Communication', 'size': 10.5},
        {'sector': 'Finance, real estate and business services', 'size': 24.7}
      ],
      '2000': [
        {'sector': 'Agriculture', 'size': 5.1},
        {'sector': 'Mining and Quarrying', 'size': 0.3},
        {'sector': 'Manufacturing', 'size': 20.4},
        {'sector': 'Electricity and Water', 'size': 1.7},
        {'sector': 'Construction', 'size': 4},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 16.3},
        {'sector': 'Transport and Communication', 'size': 10.7},
        {'sector': 'Finance, real estate and business services', 'size': 24.6}
      ],
      '2001': [
        {'sector': 'Agriculture', 'size': 5.5},
        {'sector': 'Mining and Quarrying', 'size': 0.2},
        {'sector': 'Manufacturing', 'size': 20.3},
        {'sector': 'Electricity and Water', 'size': 1.6},
        {'sector': 'Construction', 'size': 3.1},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 16.3},
        {'sector': 'Transport and Communication', 'size': 10.7},
        {'sector': 'Finance, real estate and business services', 'size': 25.8}
      ],
      '2002': [
        {'sector': 'Agriculture', 'size': 5.7},
        {'sector': 'Mining and Quarrying', 'size': 0.2},
        {'sector': 'Manufacturing', 'size': 20.5},
        {'sector': 'Electricity and Water', 'size': 1.6},
        {'sector': 'Construction', 'size': 3.6},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 16.1},
        {'sector': 'Transport and Communication', 'size': 10.7},
        {'sector': 'Finance, real estate and business services', 'size': 26}
      ],
      '2003': [
        {'sector': 'Agriculture', 'size': 4.9},
        {'sector': 'Mining and Quarrying', 'size': 0.2},
        {'sector': 'Manufacturing', 'size': 19.4},
        {'sector': 'Electricity and Water', 'size': 1.5},
        {'sector': 'Construction', 'size': 3.3},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 16.2},
        {'sector': 'Transport and Communication', 'size': 11},
        {'sector': 'Finance, real estate and business services', 'size': 27.5}
      ],
      '2004': [
        {'sector': 'Agriculture', 'size': 4.7},
        {'sector': 'Mining and Quarrying', 'size': 0.2},
        {'sector': 'Manufacturing', 'size': 18.4},
        {'sector': 'Electricity and Water', 'size': 1.4},
        {'sector': 'Construction', 'size': 3.3},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 16.9},
        {'sector': 'Transport and Communication', 'size': 10.6},
        {'sector': 'Finance, real estate and business services', 'size': 28.1}
      ],
      '2005': [
        {'sector': 'Agriculture', 'size': 4.3},
        {'sector': 'Mining and Quarrying', 'size': 0.2},
        {'sector': 'Manufacturing', 'size': 18.1},
        {'sector': 'Electricity and Water', 'size': 1.4},
        {'sector': 'Construction', 'size': 3.9},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 15.7},
        {'sector': 'Transport and Communication', 'size': 10.6},
        {'sector': 'Finance, real estate and business services', 'size': 29.1}
      ],
      '2006': [
        {'sector': 'Agriculture', 'size': 4},
        {'sector': 'Mining and Quarrying', 'size': 0.2},
        {'sector': 'Manufacturing', 'size': 16.5},
        {'sector': 'Electricity and Water', 'size': 1.3},
        {'sector': 'Construction', 'size': 3.7},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 14.2},
        {'sector': 'Transport and Communication', 'size': 12.1},
        {'sector': 'Finance, real estate and business services', 'size': 29.1}
      ],
      '2007': [
        {'sector': 'Agriculture', 'size': 4.7},
        {'sector': 'Mining and Quarrying', 'size': 0.2},
        {'sector': 'Manufacturing', 'size': 16.2},
        {'sector': 'Electricity and Water', 'size': 1.2},
        {'sector': 'Construction', 'size': 4.1},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 15.6},
        {'sector': 'Transport and Communication', 'size': 11.2},
        {'sector': 'Finance, real estate and business services', 'size': 30.4}
      ],
      '2008': [
        {'sector': 'Agriculture', 'size': 4.9},
        {'sector': 'Mining and Quarrying', 'size': 0.3},
        {'sector': 'Manufacturing', 'size': 17.2},
        {'sector': 'Electricity and Water', 'size': 1.4},
        {'sector': 'Construction', 'size': 5.1},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 15.4},
        {'sector': 'Transport and Communication', 'size': 11.1},
        {'sector': 'Finance, real estate and business services', 'size': 28.4}
      ],
      '2009': [
        {'sector': 'Agriculture', 'size': 4.7},
        {'sector': 'Mining and Quarrying', 'size': 0.3},
        {'sector': 'Manufacturing', 'size': 16.4},
        {'sector': 'Electricity and Water', 'size': 1.9},
        {'sector': 'Construction', 'size': 4.9},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 15.5},
        {'sector': 'Transport and Communication', 'size': 10.9},
        {'sector': 'Finance, real estate and business services', 'size': 27.9}
      ],
      '2010': [
        {'sector': 'Agriculture', 'size': 4.2},
        {'sector': 'Mining and Quarrying', 'size': 0.3},
        {'sector': 'Manufacturing', 'size': 16.2},
        {'sector': 'Electricity and Water', 'size': 2.2},
        {'sector': 'Construction', 'size': 4.3},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 15.7},
        {'sector': 'Transport and Communication', 'size': 10.2},
        {'sector': 'Finance, real estate and business services', 'size': 28.8}
      ],
      '2011': [
        {'sector': 'Agriculture', 'size': 4.1},
        {'sector': 'Mining and Quarrying', 'size': 0.3},
        {'sector': 'Manufacturing', 'size': 14.9},
        {'sector': 'Electricity and Water', 'size': 2.3},
        {'sector': 'Construction', 'size': 5},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 17.3},
        {'sector': 'Transport and Communication', 'size': 10.2},
        {'sector': 'Finance, real estate and business services', 'size': 27.2}
      ],
      '2012': [
        {'sector': 'Agriculture', 'size': 3.8},
        {'sector': 'Mining and Quarrying', 'size': 0.3},
        {'sector': 'Manufacturing', 'size': 14.9},
        {'sector': 'Electricity and Water', 'size': 2.6},
        {'sector': 'Construction', 'size': 5.1},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 15.8},
        {'sector': 'Transport and Communication', 'size': 10.7},
        {'sector': 'Finance, real estate and business services', 'size': 28}
      ],
      '2013': [
        {'sector': 'Agriculture', 'size': 3.7},
        {'sector': 'Mining and Quarrying', 'size': 0.2},
        {'sector': 'Manufacturing', 'size': 14.9},
        {'sector': 'Electricity and Water', 'size': 2.7},
        {'sector': 'Construction', 'size': 5.7},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 16.5},
        {'sector': 'Transport and Communication', 'size': 10.5},
        {'sector': 'Finance, real estate and business services', 'size': 26.6}
      ],
      '2014': [
        {'sector': 'Agriculture', 'size': 3.9},
        {'sector': 'Mining and Quarrying', 'size': 0.2},
        {'sector': 'Manufacturing', 'size': 14.5},
        {'sector': 'Electricity and Water', 'size': 2.7},
        {'sector': 'Construction', 'size': 5.6},
        {'sector': 'Trade (Wholesale, Retail, Motor)', 'size': 16.6},
        {'sector': 'Transport and Communication', 'size': 10.5},
        {'sector': 'Finance, real estate and business services', 'size': 26.5}
      ]
    }

    /**
    * Create the chart
    */
    var currentYear = 1995
    var animatedTimeLinePieChart = AmCharts.makeChart('animated-pie-chart', {
      'type': 'pie',
      'theme': 'light',
      'dataProvider': [],
      'valueField': 'size',
      'titleField': 'sector',
      'startDuration': 0,
      'innerRadius': 80,
      'pullOutRadius': 20,
      'marginTop': 30,
      'titles': [{
        'text': 'South African Economy'
      }],
      'allLabels': [{
        'y': '54%',
        'align': 'center',
        'size': 25,
        'bold': true,
        'text': '1995',
        'color': '#555'
      }, {
        'y': '49%',
        'align': 'center',
        'size': 15,
        'text': 'Year',
        'color': '#555'
      }],
      'listeners': [{
        'event': 'init',
        'method': function (e) {
          var chart = e.chart
          function getCurrentData () {
            var data = chartData[currentYear]
            currentYear++
            if (currentYear > 2014) {
              currentYear = 1995
            }
            return data
          }

          function loop () {
            chart.allLabels[0].text = currentYear
            var data = getCurrentData()
            chart.animateData(data, {
              duration: 1000,
              complete: function () {
                setTimeout(loop, 3000)
              }
            })
          }

          loop()
        }
      }],
      'export': {
        'enabled': true
      }
    })
  }

  var handle3dDonutChart = function () {
    var donutChart = AmCharts.makeChart('3d-donut-chart', {
      'type': 'pie',
      'theme': 'light',
      'titles': [{
        'text': 'Visitors countries',
        'size': 16
      }],
      'dataProvider': [{
        'country': 'United States',
        'visits': 7252
      }, {
        'country': 'China',
        'visits': 3882
      }, {
        'country': 'Japan',
        'visits': 1809
      }, {
        'country': 'Germany',
        'visits': 1322
      }, {
        'country': 'United Kingdom',
        'visits': 1122
      }, {
        'country': 'France',
        'visits': 414
      }, {
        'country': 'India',
        'visits': 384
      }, {
        'country': 'Spain',
        'visits': 211
      }],
      'valueField': 'visits',
      'titleField': 'country',
      'startEffect': 'elastic',
      'startDuration': 2,
      'labelRadius': 15,
      'innerRadius': '50%',
      'depth3D': 10,
      'balloonText': '[[title]]<br><span style="font-size:14px"><b>[[value]]</b> ([[percents]]%)</span>',
      'angle': 15,
      'export': {
        'enabled': true
      }
    })

    $('.pie_donut_chart_input').off().on('input change', function () {
      var t = $(this).data('property')
      var a = donutChart
      var l = Number(this.value)
      donutChart.startDuration = 0
      innerRadius == t && (l += '%')
      a[t] = l
      donutChart.validateNow()
    })
  }

  var handleRadarChart = function () {
    var radarchart = AmCharts.makeChart('radar-chart', {
      'type': 'radar',
      'theme': 'light',
      'dataProvider': [{
        'country': 'Czech Republic',
        'litres': 156.9
      }, {
        'country': 'Ireland',
        'litres': 131.1
      }, {
        'country': 'Germany',
        'litres': 115.8
      }, {
        'country': 'Australia',
        'litres': 109.9
      }, {
        'country': 'Austria',
        'litres': 108.3
      }, {
        'country': 'UK',
        'litres': 99
      }],
      'valueAxes': [{
        'axisTitleOffset': 20,
        'minimum': 0,
        'axisAlpha': 0.15
      }],
      'startDuration': 2,
      'graphs': [{
        'balloonText': '[[value]] litres of beer per year',
        'bullet': 'round',
        'lineThickness': 2,
        'valueField': 'litres'
      }],
      'categoryField': 'country',
      'export': {
        'enabled': true
      }
    })
  }

  var handlePolarScatterChart = function () {
    var polarScatterChart = AmCharts.makeChart('polar-scatter-chart', {
      'type': 'radar',
      'theme': 'light',
      'dataProvider': [],
      'valueAxes': [{
        'gridType': 'circles',
        'minimum': 0
      }],
      'startDuration': 1,
      'polarScatter': {
        'minimum': 0,
        'maximum': 359,
        'step': 1
      },
      'legend': {
        'position': 'right'
      },
      'graphs': [{
        'title': 'Trial #1',
        'balloonText': '[[category]]: [[value]] m/s',
        'bullet': 'round',
        'lineAlpha': 0,
        'series': [[83, 5.1], [44, 5.8], [76, 9], [2, 1.4], [100, 8.3], [96, 1.7],
          [68, 3.9], [0, 3], [100, 4.1], [16, 5.5], [71, 6.8], [100, 7.9],
          [9, 6.8], [85, 8.3], [51, 6.7], [95, 3.8], [95, 4.4], [1, 0.2],
          [107, 9.7], [50, 4.2], [42, 9.2], [35, 8], [44, 6], [64, 0.7],
          [53, 3.3], [92, 4.1], [43, 7.3], [15, 7.5], [43, 4.3], [90, 9.9]]
      }, {
        'title': 'Trial #2',
        'balloonText': '[[category]]: [[value]] m/s',
        'bullet': 'round',
        'lineAlpha': 0,
        'series': [[178, 1.3], [129, 3.4], [99, 2.4], [80, 9.9], [118, 9.4], [103, 8.7],
          [91, 4.2], [151, 1.2], [168, 5.2], [168, 1.6], [152, 1.2], [149, 3.4],
          [182, 8.8], [106, 6.7], [111, 9.2], [130, 6.3], [147, 2.9], [81, 8.1],
          [138, 7.7], [107, 3.9], [124, 0.7], [130, 2.6], [86, 9.2], [169, 7.5],
          [122, 9.9], [100, 3.8], [172, 4.1], [140, 7.3], [161, 2.3], [141, 0.9]]
      }, {
        'title': 'Trial #3',
        'balloonText': '[[category]]: [[value]] m/s',
        'bullet': 'round',
        'lineAlpha': 0,
        'series': [[419, 4.9], [417, 5.5], [434, 0.1], [344, 2.5],
          [279, 7.5], [307, 8.4], [279, 9], [220, 8.4], [204, 8], [446, 0.9], [397, 8.9],
          [351, 1.7], [393, 0.7], [254, 1.8], [260, 0.4], [300, 3.5], [199, 2.7],
          [182, 5.8], [173, 2], [201, 9.7], [288, 1.2], [333, 7.4], [308, 1.9],
          [330, 8], [408, 1.7], [274, 0.8], [296, 3.1], [279, 4.3], [379, 5.6],
          [175, 6.8]]
      }],
      'export': {
        'enabled': true
      }
    })
  }

  var handleAnimationsAlongLinesMap = function () {
    /**
    * SVG path for target icon
    */
    var targetSVG = 'M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,' +
    '15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,' +
    '9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z'

    /**
    * SVG path for plane icon
    */
    var planeSVG = 'm2,106h28l24,30h72l-44,-133h35l80,132h98c21,0 21,34 0,34l-98,0 -80,' +
    '134h-35l43,-133h-71l-24,30h-28l15,-47'

    /**
    * Create the map
    */
    var animationsAlongLinesMap = AmCharts.makeChart('map-chart', {
      'type': 'map',
      'theme': 'light',
      'dataProvider': {
        'map': 'worldLow',
        'zoomLevel': 3.5,
        'zoomLongitude': -55,
        'zoomLatitude': 42,
        'lines': [{
          'id': 'line1',
          'arc': -0.85,
          'alpha': 0.3,
          'latitudes': [48.8567, 43.8163, 34.3, 23],
          'longitudes': [2.3510, -79.4287, -118.15, -82]
        }, {
          'id': 'line2',
          'alpha': 0,
          'color': '#000000',
          'latitudes': [48.8567, 43.8163, 34.3, 23],
          'longitudes': [2.3510, -79.4287, -118.15, -82]
        }],
        'images': [{
          'svgPath': targetSVG,
          'title': 'Paris',
          'latitude': 48.8567,
          'longitude': 2.3510
        }, {
          'svgPath': targetSVG,
          'title': 'Toronto',
          'latitude': 43.8163,
          'longitude': -79.4287
        }, {
          'svgPath': targetSVG,
          'title': 'Los Angeles',
          'latitude': 34.3,
          'longitude': -118.15
        }, {
          'svgPath': targetSVG,
          'title': 'Havana',
          'latitude': 23,
          'longitude': -82
        }, {
          'svgPath': planeSVG,
          'positionOnLine': 0,
          'color': '#000000',
          'alpha': 0.1,
          'animateAlongLine': true,
          'lineId': 'line2',
          'flipDirection': true,
          'loop': true,
          'scale': 0.03,
          'positionScale': 1.3
        }, {
          'svgPath': planeSVG,
          'positionOnLine': 0,
          'color': '#585869',
          'animateAlongLine': true,
          'lineId': 'line1',
          'flipDirection': true,
          'loop': true,
          'scale': 0.03,
          'positionScale': 1.8
        }]
      },
      'areasSettings': {
        'unlistedAreasColor': '#8dd9ef'
      },
      'imagesSettings': {
        'color': '#585869',
        'rollOverColor': '#585869',
        'selectedColor': '#585869',
        'pauseDuration': 0.2,
        'animationDuration': 2.5,
        'adjustAnimationSpeed': true
      },
      'linesSettings': {
        'color': '#585869',
        'alpha': 0.4
      },
      'export': {
        'enabled': true
      }
    })
  }

  var handleCapitalsMap = function () {
    /**
    * Define SVG path for target icon
    */
    var targetSVG = 'M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,' +
    '15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,' +
    '15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z'

    /**
    * Create the map
    */
    var capitalsMap = AmCharts.makeChart('capital-map-chart', {
      'type': 'map',
      'projection': 'winkel3',
      'theme': 'light',
      'imagesSettings': {
        'rollOverColor': '#089282',
        'rollOverScale': 3,
        'selectedScale': 3,
        'selectedColor': '#089282',
        'color': '#13564e'
      },

      'areasSettings': {
        'unlistedAreasColor': '#15A892',
        'outlineThickness': 0.1
      },

      'dataProvider': {
        'map': 'worldLow',
        'images': [{
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Vienna',
          'latitude': 48.2092,
          'longitude': 16.3728
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Minsk',
          'latitude': 53.9678,
          'longitude': 27.5766
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Brussels',
          'latitude': 50.8371,
          'longitude': 4.3676
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Sarajevo',
          'latitude': 43.8608,
          'longitude': 18.4214
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Sofia',
          'latitude': 42.7105,
          'longitude': 23.3238
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Zagreb',
          'latitude': 45.8150,
          'longitude': 15.9785
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Pristina',
          'latitude': 42.666667,
          'longitude': 21.166667
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Prague',
          'latitude': 50.0878,
          'longitude': 14.4205
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Copenhagen',
          'latitude': 55.6763,
          'longitude': 12.5681
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Tallinn',
          'latitude': 59.4389,
          'longitude': 24.7545
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Helsinki',
          'latitude': 60.1699,
          'longitude': 24.9384
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Paris',
          'latitude': 48.8567,
          'longitude': 2.3510
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Berlin',
          'latitude': 52.5235,
          'longitude': 13.4115
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Athens',
          'latitude': 37.9792,
          'longitude': 23.7166
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Budapest',
          'latitude': 47.4984,
          'longitude': 19.0408
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Reykjavik',
          'latitude': 64.1353,
          'longitude': -21.8952
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Dublin',
          'latitude': 53.3441,
          'longitude': -6.2675
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Rome',
          'latitude': 41.8955,
          'longitude': 12.4823
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Riga',
          'latitude': 56.9465,
          'longitude': 24.1049
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Vaduz',
          'latitude': 47.1411,
          'longitude': 9.5215
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Vilnius',
          'latitude': 54.6896,
          'longitude': 25.2799
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Luxembourg',
          'latitude': 49.6100,
          'longitude': 6.1296
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Skopje',
          'latitude': 42.0024,
          'longitude': 21.4361
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Valletta',
          'latitude': 35.9042,
          'longitude': 14.5189
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Chisinau',
          'latitude': 47.0167,
          'longitude': 28.8497
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Monaco',
          'latitude': 43.7325,
          'longitude': 7.4189
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Podgorica',
          'latitude': 42.4602,
          'longitude': 19.2595
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Amsterdam',
          'latitude': 52.3738,
          'longitude': 4.8910
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Oslo',
          'latitude': 59.9138,
          'longitude': 10.7387
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Warsaw',
          'latitude': 52.2297,
          'longitude': 21.0122
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Lisbon',
          'latitude': 38.7072,
          'longitude': -9.1355
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Bucharest',
          'latitude': 44.4479,
          'longitude': 26.0979
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Moscow',
          'latitude': 55.7558,
          'longitude': 37.6176
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'San Marino',
          'latitude': 43.9424,
          'longitude': 12.4578
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Belgrade',
          'latitude': 44.8048,
          'longitude': 20.4781
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Bratislava',
          'latitude': 48.2116,
          'longitude': 17.1547
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Ljubljana',
          'latitude': 46.0514,
          'longitude': 14.5060
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Madrid',
          'latitude': 40.4167,
          'longitude': -3.7033
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Stockholm',
          'latitude': 59.3328,
          'longitude': 18.0645
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Bern',
          'latitude': 46.9480,
          'longitude': 7.4481
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Kiev',
          'latitude': 50.4422,
          'longitude': 30.5367
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'London',
          'latitude': 51.5002,
          'longitude': -0.1262
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Gibraltar',
          'latitude': 36.1377,
          'longitude': -5.3453
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Saint Peter Port',
          'latitude': 49.4660,
          'longitude': -2.5522
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Douglas',
          'latitude': 54.1670,
          'longitude': -4.4821
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Saint Helier',
          'latitude': 49.1919,
          'longitude': -2.1071
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Longyearbyen',
          'latitude': 78.2186,
          'longitude': 15.6488
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Kabul',
          'latitude': 34.5155,
          'longitude': 69.1952
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Yerevan',
          'latitude': 40.1596,
          'longitude': 44.5090
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Baku',
          'latitude': 40.3834,
          'longitude': 49.8932
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Manama',
          'latitude': 26.1921,
          'longitude': 50.5354
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Dhaka',
          'latitude': 23.7106,
          'longitude': 90.3978
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Thimphu',
          'latitude': 27.4405,
          'longitude': 89.6730
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Bandar Seri Begawan',
          'latitude': 4.9431,
          'longitude': 114.9425
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Phnom Penh',
          'latitude': 11.5434,
          'longitude': 104.8984
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Peking',
          'latitude': 39.9056,
          'longitude': 116.3958
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Nicosia',
          'latitude': 35.1676,
          'longitude': 33.3736
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': "T'bilisi",
          'latitude': 41.7010,
          'longitude': 44.7930
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'New Delhi',
          'latitude': 28.6353,
          'longitude': 77.2250
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Jakarta',
          'latitude': -6.1862,
          'longitude': 106.8063
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Teheran',
          'latitude': 35.7061,
          'longitude': 51.4358
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Baghdad',
          'latitude': 33.3157,
          'longitude': 44.3922
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Jerusalem',
          'latitude': 31.76,
          'longitude': 35.17
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Tokyo',
          'latitude': 35.6785,
          'longitude': 139.6823
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Amman',
          'latitude': 31.9394,
          'longitude': 35.9349
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Astana',
          'latitude': 51.1796,
          'longitude': 71.4475
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Kuwait',
          'latitude': 29.3721,
          'longitude': 47.9824
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Bishkek',
          'latitude': 42.8679,
          'longitude': 74.5984
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Vientiane',
          'latitude': 17.9689,
          'longitude': 102.6137
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Beyrouth / Beirut',
          'latitude': 33.8872,
          'longitude': 35.5134
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Kuala Lumpur',
          'latitude': 3.1502,
          'longitude': 101.7077
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Ulan Bator',
          'latitude': 47.9138,
          'longitude': 106.9220
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Pyinmana',
          'latitude': 19.7378,
          'longitude': 96.2083
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Kathmandu',
          'latitude': 27.7058,
          'longitude': 85.3157
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Muscat',
          'latitude': 23.6086,
          'longitude': 58.5922
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Islamabad',
          'latitude': 33.6751,
          'longitude': 73.0946
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Manila',
          'latitude': 14.5790,
          'longitude': 120.9726
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Doha',
          'latitude': 25.2948,
          'longitude': 51.5082
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Riyadh',
          'latitude': 24.6748,
          'longitude': 46.6977
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Singapore',
          'latitude': 1.2894,
          'longitude': 103.8500
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Seoul',
          'latitude': 37.5139,
          'longitude': 126.9828
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Colombo',
          'latitude': 6.9155,
          'longitude': 79.8572
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Damascus',
          'latitude': 33.5158,
          'longitude': 36.2939
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Taipei',
          'latitude': 25.0338,
          'longitude': 121.5645
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Dushanbe',
          'latitude': 38.5737,
          'longitude': 68.7738
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Bangkok',
          'latitude': 13.7573,
          'longitude': 100.5020
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Dili',
          'latitude': -8.5662,
          'longitude': 125.5880
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Ankara',
          'latitude': 39.9439,
          'longitude': 32.8560
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Ashgabat',
          'latitude': 37.9509,
          'longitude': 58.3794
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Abu Dhabi',
          'latitude': 24.4764,
          'longitude': 54.3705
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Tashkent',
          'latitude': 41.3193,
          'longitude': 69.2481
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Hanoi',
          'latitude': 21.0341,
          'longitude': 105.8372
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Sanaa',
          'latitude': 15.3556,
          'longitude': 44.2081
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Buenos Aires',
          'latitude': -34.6118,
          'longitude': -58.4173
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Bridgetown',
          'latitude': 13.0935,
          'longitude': -59.6105
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Belmopan',
          'latitude': 17.2534,
          'longitude': -88.7713
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Sucre',
          'latitude': -19.0421,
          'longitude': -65.2559
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Brasilia',
          'latitude': -15.7801,
          'longitude': -47.9292
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Ottawa',
          'latitude': 45.4235,
          'longitude': -75.6979
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Santiago',
          'latitude': -33.4691,
          'longitude': -70.6420
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Bogota',
          'latitude': 4.6473,
          'longitude': -74.0962
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'San Jose',
          'latitude': 9.9402,
          'longitude': -84.1002
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Havana',
          'latitude': 23.1333,
          'longitude': -82.3667
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Roseau',
          'latitude': 15.2976,
          'longitude': -61.3900
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Santo Domingo',
          'latitude': 18.4790,
          'longitude': -69.8908
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Quito',
          'latitude': -0.2295,
          'longitude': -78.5243
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'San Salvador',
          'latitude': 13.7034,
          'longitude': -89.2073
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Guatemala',
          'latitude': 14.6248,
          'longitude': -90.5328
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Ciudad de Mexico',
          'latitude': 19.4271,
          'longitude': -99.1276
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Managua',
          'latitude': 12.1475,
          'longitude': -86.2734
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Panama',
          'latitude': 8.9943,
          'longitude': -79.5188
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Asuncion',
          'latitude': -25.3005,
          'longitude': -57.6362
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Lima',
          'latitude': -12.0931,
          'longitude': -77.0465
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Castries',
          'latitude': 13.9972,
          'longitude': -60.0018
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Paramaribo',
          'latitude': 5.8232,
          'longitude': -55.1679
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Washington',
          'latitude': 38.8921,
          'longitude': -77.0241
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Montevideo',
          'latitude': -34.8941,
          'longitude': -56.0675
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Caracas',
          'latitude': 10.4961,
          'longitude': -66.8983
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Oranjestad',
          'latitude': 12.5246,
          'longitude': -70.0265
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Cayenne',
          'latitude': 4.9346,
          'longitude': -52.3303
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Plymouth',
          'latitude': 16.6802,
          'longitude': -62.2014
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'San Juan',
          'latitude': 18.4500,
          'longitude': -66.0667
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Algiers',
          'latitude': 36.7755,
          'longitude': 3.0597
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Luanda',
          'latitude': -8.8159,
          'longitude': 13.2306
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Porto-Novo',
          'latitude': 6.4779,
          'longitude': 2.6323
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Gaborone',
          'latitude': -24.6570,
          'longitude': 25.9089
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Ouagadougou',
          'latitude': 12.3569,
          'longitude': -1.5352
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Bujumbura',
          'latitude': -3.3818,
          'longitude': 29.3622
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Yaounde',
          'latitude': 3.8612,
          'longitude': 11.5217
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Bangui',
          'latitude': 4.3621,
          'longitude': 18.5873
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Brazzaville',
          'latitude': -4.2767,
          'longitude': 15.2662
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Kinshasa',
          'latitude': -4.3369,
          'longitude': 15.3271
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Yamoussoukro',
          'latitude': 6.8067,
          'longitude': -5.2728
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Djibouti',
          'latitude': 11.5806,
          'longitude': 43.1425
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Cairo',
          'latitude': 30.0571,
          'longitude': 31.2272
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Asmara',
          'latitude': 15.3315,
          'longitude': 38.9183
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Addis Abeba',
          'latitude': 9.0084,
          'longitude': 38.7575
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Libreville',
          'latitude': 0.3858,
          'longitude': 9.4496
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Banjul',
          'latitude': 13.4399,
          'longitude': -16.6775
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Accra',
          'latitude': 5.5401,
          'longitude': -0.2074
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Conakry',
          'latitude': 9.5370,
          'longitude': -13.6785
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Bissau',
          'latitude': 11.8598,
          'longitude': -15.5875
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Nairobi',
          'latitude': -1.2762,
          'longitude': 36.7965
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Maseru',
          'latitude': -29.2976,
          'longitude': 27.4854
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Monrovia',
          'latitude': 6.3106,
          'longitude': -10.8047
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Tripoli',
          'latitude': 32.8830,
          'longitude': 13.1897
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Antananarivo',
          'latitude': -18.9201,
          'longitude': 47.5237
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Lilongwe',
          'latitude': -13.9899,
          'longitude': 33.7703
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Bamako',
          'latitude': 12.6530,
          'longitude': -7.9864
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Nouakchott',
          'latitude': 18.0669,
          'longitude': -15.9900
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Port Louis',
          'latitude': -20.1654,
          'longitude': 57.4896
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Rabat',
          'latitude': 33.9905,
          'longitude': -6.8704
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Maputo',
          'latitude': -25.9686,
          'longitude': 32.5804
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Windhoek',
          'latitude': -22.5749,
          'longitude': 17.0805
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Niamey',
          'latitude': 13.5164,
          'longitude': 2.1157
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Abuja',
          'latitude': 9.0580,
          'longitude': 7.4891
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Kigali',
          'latitude': -1.9441,
          'longitude': 30.0619
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Dakar',
          'latitude': 14.6953,
          'longitude': -17.4439
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Freetown',
          'latitude': 8.4697,
          'longitude': -13.2659
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Mogadishu',
          'latitude': 2.0411,
          'longitude': 45.3426
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Pretoria',
          'latitude': -25.7463,
          'longitude': 28.1876
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Mbabane',
          'latitude': -26.3186,
          'longitude': 31.1410
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Dodoma',
          'latitude': -6.1670,
          'longitude': 35.7497
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Lome',
          'latitude': 6.1228,
          'longitude': 1.2255
        }, {
          'svgPath': targetSVG,
          'zoomLevel': 5,
          'scale': 0.5,
          'title': 'Tunis',
          'latitude': 36.8117,
          'longitude': 10.1761
        }]
      },
      'export': {
        'enabled': true
      }
    })
  }

  var handleZoomableBubbleAndXYChart = function () {
    var xyandbubblechart = AmCharts.makeChart('xy-and-bubble-chart', {
      'type': 'xy',
      'theme': 'light',
      'pathToImages': '/assets/admin/img/charts/',
      'marginRight': 80,
      'marginTop': 17,
      'dataProvider': [{
        'y': 10,
        'x': 14,
        'value': 59,
        'y2': -5,
        'x2': 0,
        'value2': 44
      }, {
        'y': 5,
        'x': 3,
        'value': 50,
        'y2': -15,
        'x2': -8,
        'value2': 12
      }, {
        'y': -10,
        'x': -3,
        'value': 19,
        'y2': -4,
        'x2': 6,
        'value2': 35
      }, {
        'y': -6,
        'x': 5,
        'value': 65,
        'y2': -5,
        'x2': -6,
        'value2': 168
      }, {
        'y': 15,
        'x': -4,
        'value': 92,
        'y2': -10,
        'x2': -8,
        'value2': 102
      }, {
        'y': 13,
        'x': 1,
        'value': 8,
        'y2': -2,
        'x2': -3,
        'value2': 41
      }, {
        'y': 1,
        'x': 6,
        'value': 35,
        'y2': 0,
        'x2': 1,
        'value2': 16
      }],
      'valueAxes': [{
        'position': 'bottom',
        'axisAlpha': 0
      }, {
        'minMaxMultiplier': 1.2,
        'axisAlpha': 0,
        'position': 'left'
      }],
      'startDuration': 1.5,
      'graphs': [{
        'balloonText': 'x:<b>[[x]]</b> y:<b>[[y]]</b><br>value:<b>[[value]]</b>',
        'bullet': 'bubble',
        'lineAlpha': 0,
        'valueField': 'value',
        'xField': 'x',
        'yField': 'y',
        'fillAlphas': 0,
        'bulletBorderAlpha': 0.2,
        'maxBulletSize': 80
      }, {
        'balloonText': 'x:<b>[[x]]</b> y:<b>[[y]]</b><br>value:<b>[[value]]</b>',
        'bullet': 'bubble',
        'lineAlpha': 0,
        'valueField': 'value2',
        'xField': 'x2',
        'yField': 'y2',
        'fillAlphas': 0,
        'bulletBorderAlpha': 0.2,
        'maxBulletSize': 80
      }],
      'marginLeft': 46,
      'marginBottom': 35,
      'chartScrollbar': {},
      'chartCursor': {},
      'balloon': {
        'fixedPosition': true
      },
      'export': {
        'enabled': true
      }
    })
  }

  var handleMultipleDataSetsStockChart = function () {
    var chartData1 = []
    var chartData2 = []
    var chartData3 = []
    var chartData4 = []

    generateChartData()

    function generateChartData () {
      var firstDate = new Date()
      firstDate.setDate(firstDate.getDate() - 500)
      firstDate.setHours(0, 0, 0, 0)

      for (var i = 0; i < 500; i++) {
        var newDate = new Date(firstDate)
        newDate.setDate(newDate.getDate() + i)

        var a1 = Math.round(Math.random() * (40 + i)) + 100 + i
        var b1 = Math.round(Math.random() * (1000 + i)) + 500 + i * 2

        var a2 = Math.round(Math.random() * (100 + i)) + 200 + i
        var b2 = Math.round(Math.random() * (1000 + i)) + 600 + i * 2

        var a3 = Math.round(Math.random() * (100 + i)) + 200
        var b3 = Math.round(Math.random() * (1000 + i)) + 600 + i * 2

        var a4 = Math.round(Math.random() * (100 + i)) + 200 + i
        var b4 = Math.round(Math.random() * (100 + i)) + 600 + i

        chartData1.push({
          'date': newDate,
          'value': a1,
          'volume': b1
        })
        chartData2.push({
          'date': newDate,
          'value': a2,
          'volume': b2
        })
        chartData3.push({
          'date': newDate,
          'value': a3,
          'volume': b3
        })
        chartData4.push({
          'date': newDate,
          'value': a4,
          'volume': b4
        })
      };
    };

    var multipleDataSetsStockChart = AmCharts.makeChart('multiple-data-sets-chart', {
      'type': 'stock',
      'theme': 'light',
      'pathToImages': '/assets/admin/img/charts/',
      'dataSets': [{
        'title': 'first data set',
        'fieldMappings': [{
          'fromField': 'value',
          'toField': 'value'
        }, {
          'fromField': 'volume',
          'toField': 'volume'
        }],
        'dataProvider': chartData1,
        'categoryField': 'date'
      }, {
        'title': 'second data set',
        'fieldMappings': [{
          'fromField': 'value',
          'toField': 'value'
        }, {
          'fromField': 'volume',
          'toField': 'volume'
        }],
        'dataProvider': chartData2,
        'categoryField': 'date'
      }, {
        'title': 'third data set',
        'fieldMappings': [{
          'fromField': 'value',
          'toField': 'value'
        }, {
          'fromField': 'volume',
          'toField': 'volume'
        }],
        'dataProvider': chartData3,
        'categoryField': 'date'
      }, {
        'title': 'fourth data set',
        'fieldMappings': [{
          'fromField': 'value',
          'toField': 'value'
        }, {
          'fromField': 'volume',
          'toField': 'volume'
        }],
        'dataProvider': chartData4,
        'categoryField': 'date'
      }],
      'panels': [{
        'showCategoryAxis': false,
        'title': 'Value',
        'percentHeight': 70,
        'stockGraphs': [{
          'id': 'g1',
          'valueField': 'value',
          'comparable': true,
          'compareField': 'value',
          'balloonText': '[[title]]:<b>[[value]]</b>',
          'compareGraphBalloonText': '[[title]]:<b>[[value]]</b>'
        }],
        'stockLegend': {
          'periodValueTextComparing': '[[percents.value.close]]%',
          'periodValueTextRegular': '[[value.close]]'
        }
      }, {
        'title': 'Volume',
        'percentHeight': 30,
        'stockGraphs': [{
          'valueField': 'volume',
          'type': 'column',
          'showBalloon': false,
          'fillAlphas': 1
        }],
        'stockLegend': {
          'periodValueTextRegular': '[[value.close]]'
        }
      }],
      'chartScrollbarSettings': {
        'graph': 'g1'
      },
      'chartCursorSettings': {
        'valueBalloonsEnabled': true,
        'fullWidth': true,
        'cursorAlpha': 0.1,
        'valueLineBalloonEnabled': true,
        'valueLineEnabled': true,
        'valueLineAlpha': 0.5
      },
      'periodSelector': {
        'position': 'left',
        'periods': [{
          'period': 'MM',
          'selected': true,
          'count': 1,
          'label': '1 month'
        }, {
          'period': 'YYYY',
          'count': 1,
          'label': '1 year'
        }, {
          'period': 'YTD',
          'label': 'YTD'
        }, {
          'period': 'MAX',
          'label': 'MAX'
        }]
      },
      'dataSetSelector': {
        'position': 'left'
      },
      'export': {
        'enabled': true
      }
    })
  }

  return {
    // main function to initiate the module
    init: function () {
      handleColumnAndLineChart()
      handleClusterBarChart()
      handleDurationOnValueAxisChart()
      handleStackAreaChart()
      handle3dCylinderChart()
      handleAnimatedTimeLinePieChart()
      handle3dDonutChart()
      handleRadarChart()
      handlePolarScatterChart()
      handleAnimationsAlongLinesMap()
      handleCapitalsMap()
      handleZoomableBubbleAndXYChart()
      handleMultipleDataSetsStockChart()
    }
  }
})()

jQuery(document).ready(function () {
  AMCharts.init()
})
