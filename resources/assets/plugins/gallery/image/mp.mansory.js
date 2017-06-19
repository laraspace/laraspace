(function ( $ ) {

	$.fn.mpmansory = function ( options ) {

		var settings = $.extend({
			childrenClass: '',
			breakpoints: {
					lg: 4,
					md: 4,
					sm: 6,
					xs: 12
			},
			distributeBy: {
				attr: 'data-order',
				attrOrder: 'asc',
				order: false,
				height: false
			},
			onload: function ( items ) {
				return true;
			}
			
		}, options);

		Array.min = function( array ){
		    return Math.min.apply( Math, array );
		};

		$.emptyArray = function ( array ) {
			for (var i = 0; i<array.length; i++) {
				array[i].remove();
			}

			return new Array();
		}

		$.fn.initialize = function ( columns, classStr ) {
			/*
			 * @params [string] {classStr} - the bootstrap column string
			 * @return [Array] - list of columns to create
			 * @description - creates the grid columns in wich the items will be distributed
			 */
			
			var cols = [];

			for (var i = 0; i<columns; i++) {
				
				var wrap = $('<div></div>');
				wrap.addClass(classStr);
				$(this).append(wrap);
				cols.push(wrap);
			
			}

			return cols;

		}

		$.fn.distributeItemsByHeight = function ( wrappers, items ) {
			/*
			 * @params [Array] {wrappers} - the array containing the columns elements
			 * @params [Array] {items} - the array containing items
			 * @description - distribute the items through the columns - to the columns with lowest height
			 */
			var counter = 0;

			for (var k = 0; k<items.length; k++) {

				var $heights = new Array();

				for (var i = 0; i<wrappers.length; i++ ) {

					//get the wrappers height
					
					$heights.push(wrappers[i].height());

				}

				//get the wrapper with the lowest height
				var min = Array.min($heights) == Number.POSITIVE_INFINITY || Array.min($heights) == Number.NEGATIVE_INFINITY ? 0 : Array.min($heights);
				wrappers[$heights.indexOf(min)].append(items[k]);
	
			}

		}

		$.fn.getCurrentColumnSize = function () {

			if ($(window).width() > 1200) {
				return 'lg';
			} else if ($(window).width() > 992) {
				return 'md';
			} else if ($(window).width() > 720) {
				return 'sm';
			} else if ($(window).width() > 480) {
				return 'xs';
			} else if ($(window).width() > 320) {
				return 'xs';
			} else {
				return 'xs';
			}

		}

		$.fn.distributeItemsByOrder = function ( wrappers, items ) {
			/*
			 * @params [Array] {wrappers} - the array containing the columns elements
			 * @params [Array] {items} - the array containing items
			 * @description - distribute the items through the columns - to the columns with lowest height
			 */
			var counter = 0;

			for (var k = 0; k<items.length; k++) {
				if (counter == wrappers.length) counter = 0; 
				wrappers[counter].append(items[k]);
				counter++;
			}

		}

		$.fn.orderItemsByAttr = function (items, order) {

			var attrs = new Array();
			for ( var k = 0; k<items.length; k++ ) {
				attrs.push($(items[k]).attr(order.attr));
			}

			if  (order.attrOrder == 'asc') {
				attrs.sort(function (a, b) { return a-b });
			} else {
				attrs.sort(function (a, b) { return b-a });
			}

			var ordered_items = new Array();

			for ( var i = 0; i<attrs.length; i++) {
				var item = $.grep(items, function (e) {return $(e).attr(order.attr) == attrs[i]});
				ordered_items.push(item);
			}
			return ordered_items;
		}

		$.fn.distributeItemsByAttr = function ( wrappers, items, order) {

			var counter = 0;
			var counter2 = 0;

			for (var i = 0; i<items.length; i++) {
				
				if (counter == wrappers.length) counter = 0;
				if ( items[i].length > 1) {
					if (counter2 == items[i].length) counter2 = 0; 
					wrappers[counter].append($(items[i][counter2]));
					counter2++;
				} else {
					wrappers[counter].append($(items[i]));	
				}
				counter++;
			}	
		}

		$.fn.apply = function ( settings, nrOfColumns, wrappers, items ) {

			var _this = $(this);
			
			var currentSize = _this.getCurrentColumnSize();

			var columns = nrOfColumns; //find number of columns

			//build the bootstrap class string
			var classStr = "col-lg-" + settings.breakpoints.lg + " col-md-"+settings.breakpoints.md + " col-sm-" + settings.breakpoints.sm + " col-xs-" + settings.breakpoints.xs + " " + settings.columnClasses;

			wrappers = $(this).initialize( columns, classStr ); //create columns'white

			if ( settings.distributeBy.order ) {
				_this.distributeItemsByOrder( wrappers, items); //apply mansory		
			} else if ( settings.distributeBy.height ) {
				_this.distributeItemsByHeight( wrappers, items); //apply mansory
			} else if ( settings.distributeBy.attr ) {
				_this.distributeItemsByAttr( wrappers, _this.orderItemsByAttr(items, settings.distributeBy), settings.distributeBy);
			}
			return { wrappers: wrappers, items: items };
		}



		return this.each(function () {

			var _this = $(this);

			var currentSize = _this.getCurrentColumnSize();

			var numberOfColumns = 12 / settings.breakpoints[currentSize];

			var items = _this.children( (settings.childrenClass != '' ? '.'+settings.childrenClass : 'div') );

			var wrappers = new Array();

			var returns = _this.apply( settings, numberOfColumns, wrappers, items );
			
			wrappers = returns.wrappers;

			$(window).on('resize', function ( e ) {

				if (_this.getCurrentColumnSize() != currentSize ) {
					numberOfColumns = 12 / settings.breakpoints[_this.getCurrentColumnSize()];
					wrappers = $.emptyArray(wrappers);
					returns = _this.apply( settings , numberOfColumns, wrappers, items);
					wrappers = returns.wrappers;
					currentSize = _this.getCurrentColumnSize();

				}

			});

			if (settings.hasOwnProperty('onload')) {

				//execute on load
				settings.onload( items );

			}

		});
	}

})(jQuery);