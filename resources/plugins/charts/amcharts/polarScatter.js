/*
Plugin Name: amCharts Radar Scatter
Description: Display scatter graphs on radar/polar chart
Author: Martynas Majeris, amCharts
Version: 1.0.1
Author URI: http://www.amcharts.com/

Copyright 2016-2017 amCharts

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

  http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

Please note that the above license covers only this plugin. It by all means does
not apply to any other amCharts products that are covered by different licenses.
*/

/* globals AmCharts */
/* jshint -W061 */

AmCharts.addInitHandler( function( chart ) {

	// check if polar scatter is enabled
	if ( chart.polarScatter === undefined )
		return;

	// process data for polar scatter chart
	AmCharts.processPolarScatter( chart );

}, [ "radar" ] );

AmCharts.processPolarScatter = function( chart ) {
	// check if everything is set
	chart.categoryField = chart.categoryField || "angle";
	chart.polarScatter.minimum = chart.polarScatter.minimum || 0;
	chart.polarScatter.maximum = chart.polarScatter.maximum || 359;
	chart.polarScatter.step = chart.polarScatter.step || 1;

	// check if axisFrequency is set
	if ( chart.valueAxes === undefined )
		chart.valueAxes = [ {} ];

	if ( chart.valueAxes[ 0 ].axisFrequency === undefined )
		chart.valueAxes[ 0 ].axisFrequency = Math.ceil( ( chart.polarScatter.maximum - chart.polarScatter.minimum ) / 12 );

	// init empty data provider
	var data = [],
		dpoints = {};
	for ( var i = chart.polarScatter.minimum; i <= chart.polarScatter.maximum; i += chart.polarScatter.step ) {
		dpoints[ i ] = {};
		dpoints[ i ][ chart.categoryField ] = i;
		data.push( dpoints[ i ] );
	}

	for ( var g = 0; g < chart.graphs.length; g++ ) {
		var graph = chart.graphs[ g ];
		graph.valueField = graph.valueField || "value" + g;
		if ( graph.series !== undefined ) {
			for ( var i = 0; i < graph.series.length; i++ ) {
				var dp = graph.series[ i ];
				if ( dpoints[ dp[ 0 ] ] !== undefined ) {
					dpoints[ dp[ 0 ] ][ graph.valueField ] = dp[ 1 ];
				}
			}
		}
	}

	// add data provider
	chart.dataProvider = data;
}