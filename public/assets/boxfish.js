/**
 * BoxFish.js
 *
 * jQuery plugin to create dynamic resizing columnar boxes.
 *
 * @version: 0.2
 * @authors: Jeremy Harris
 * @license: MIT
 */

(function ($) {

    $.fn.boxfish = function( options ) {

        // Define settings
        var settings = $.extend({
            columns: 3,
            breakpoints: [
               [1280, 5],
               [1024, 4],
               [768, 3],
               [480, 2],
               [300, 1]
            ]
        }, options );

        // Initialize values on plugin load
        var boxes               = $(this);
        var boxCount            = boxes.length;
        var container           = boxes.parent();
        var containerWidth      = getContainerWidth();
        var containerHeight     = getContainerHeight();
        var horizontalMargin    = 0;
        var horizontalPadding   = 0;
        var resizeTimer;

        // Add boxfish classes
        boxes.addClass('boxfish-box');
        container.addClass('boxfish-container');

        // Perform initial on-load scaling
        scaleBoxes();

        /** 
         * Catch window resize event
         */
        $(window).on('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(resizeComplete, 100);
        });

        /**
         * Window resize event callback
         *
         * Triggered by setTimeout() so that it doesn't fire dozens
         * of times in a row, rather it will fire once after the resize
         * is complete (roughly).
         */
        function resizeComplete() {
            scaleBoxes();
        }

        /**
         * Scale Boxes
         */
        function scaleBoxes() {

            // Recalculate container size
            containerWidth = getContainerWidth();
            containerHeight = getContainerHeight();

            // Rescale box dimensions
            scaleWidth();
            scaleHeight();
        }

        /**
         * Scale box widths
         */
        function scaleWidth() {

            // Init
            var maxWidth = getMaxBoxWidth();
            var firstBox = boxes.first();

            // Determine factors affecting width
            horizontalMargin = parseInt(firstBox.css('margin-left'), 10) + parseInt(firstBox.css('margin-right'), 10);
            horizontalPadding = parseInt(firstBox.css('padding-left'), 10) + parseInt(firstBox.css('padding-right'), 10);
            horizontalBorders = parseInt(firstBox.css('border-left-width'), 10) + parseInt(firstBox.css('border-right-width'), 10);
            
            // Process boxes
            boxes.each(function(index, element) {
                $(this).width(maxWidth - (horizontalMargin + horizontalPadding + horizontalBorders));
            });

        }

        /**
         * Scale box heights
         */
        function scaleHeight() {

            // Init
            var maxHeight = getMaxBoxHeight();

            // Process boxes
            boxes.each(function(index, element) {
                $(this).css('height','auto');
                $(this).animate({ height: maxHeight }, 1, function() {
                    scaleRowHeight();
                });
            });

        }

        /**
         * Scale row heights
         *
         * Similar to the scaleHeight method, except this looks rows generated
         * by float wrapping and resizes the height of items in that row to the 
         * height of the largest item in the row.
         */
        function scaleRowHeight() {

            // Init
            var rows = [];
            
            // Determine rows based on top positions of boxes
            for (x = 0; x < boxes.length; x++) {
                topPos = boxes[x].offsetTop;
                if ( ! rows[topPos])
                    rows[topPos] = [];
                rows[topPos].push(boxes[x]);
            }
            for (var t in rows) {
                maxRowHeight = [];
                for(x=0;x<rows[t].length;x++) {
                    var rowHeight = $(rows[t][x]).outerHeight(true);
                    if ( ! maxRowHeight[t])
                        maxRowHeight[t] = 0;
                    if (maxRowHeight[t] < rowHeight)
                        maxRowHeight[t] = rowHeight;
                }
                for(x=0;x<rows[t].length;x++) {
                    $(rows[t][x]).animate({ height: maxRowHeight[t] }, 1);
                }
            }
        }

        function resetBoxClears() {
            return $(boxes).css('clear', '');
        }

        function clearWrappedFloats() {

            var firstBox = $(boxes).first();
            var lastBox = $(firstBox);
            var currentRow = $(firstBox);
            var offset = 0;
            var count = 0;

            // Reset clear
            resetBoxClears();
            $(boxes).css('border', '1px solid #DDD');

            boxes.each(function(index, box) {

                // Get offset            
                offset = $(box).offset();
                console.log('/=====================================\\');
                console.log($(box).attr('id') + ": LEFT = " + offset.left + " ... TOP = " + offset.top);
                console.log($(currentRow).offset());
                console.log('\\=====================================/');



                // If not first box and offset is equal to first box offset
                if(count > 0 && offset.left == firstBox.offset().left && offset.top >= currentRow.offset().top)
                {
                    console.log("BOX " + $(lastBox).attr('id') + " CLEARED");
                    console.log("COUNT: " + count);
                    console.log("LEFT OFFSET: " + offset.left);

                    //$(lastBox).css('clear', 'left');
                    $(lastBox).css('border', '1px solid red');
                    currentRow = null;
                    currentRow = $(box);
                }

               // Next box
               count++;

               lastBox = $(box);

            });
            console.log("--------------");
            console.log("--------------");
            console.log("--------------");
            console.log("--------------");
        }

        /**
         * Timer driven logic to recalculate the height if
         * images have not completed loading
         */
        var triggerHeightRecalc = function() {
            setTimeout(function() {
                if (imagesLoaded())
                    scaleHeight();
                else
                    triggerHeightRecalc();
            }, 100);
        }; triggerHeightRecalc();


        /**
         * Check if images in boxes are loaded as these affect
         * the height calculations.
         */
        function imagesLoaded() {
            var images = boxes.find('img');
            images.each(function(index, image) {
                if ( ! image.complete ) {
                    return false;
                }
                if (typeof image.naturalWidth !== "undefined" && image.naturalWidth === 0) {
                    return false;
                }
            });
            return true;
        }

        /**
         * Calculate container (parent) width
         *
         * @return integer
         */
        function getContainerWidth() {
            return parseInt(container.width(), 10);
        }

        /**
         * Calculate container (parent) height
         *
         * @return integer
         */
        function getContainerHeight() {
            return parseInt(container.height(), 10);
        }

        /**
         * Calculate maximum box width
         *
         * Uses column count defined by breakpoints to determine how many columns
         * and what their widths should be.
         *
         * @return float
         */
        function getMaxBoxWidth() {
            var match = [0, 0];
            var columns = settings.columns;
            for (i = 0; i < settings.breakpoints.length; i++) {
                if (settings.breakpoints[i][0] < containerWidth && settings.breakpoints[i][0] > match[0]) {
                    match = settings.breakpoints[i];
                }
            }
            if (match[1] > 0)
                columns = match[1];

            return containerWidth / columns;
        }

        /**
         * Calculate maximum box height
         *
         * @return float
         */
        function getMaxBoxHeight() {
            var maxBoxHeight = 0;
            var boxHeight = 0;
            boxes.each(function(index, element) {
                boxHeight = $(this).outerHeight(true);
                if (boxHeight > maxBoxHeight)
                    maxBoxHeight = boxHeight;
            });
            return maxBoxHeight;
        }

        /**
         * Add breakpoint to column calculations
         *
         * Public method for end user to add a breakpoint to be used
         * in determining number of columns.
         *
         * @param integer   Pixel width to break on
         * @param integer   Columns to use after break
         */
        this.addBreakpoint = function(pixels, columns) {

            // Format parameters
            pixels = parseInt(pixels, 10);
            columns = parseInt(columns, 10);

            // Variable to determine if matching breakpoint (pixels) was found in interation
            var hasMatch = false;

            // If already set, then update columns
            for (i = 0; i < settings.breakpoints.length; i++) {
                if (settings.breakpoints[i][0] == pixels) {
                    settings.breakpoints[i][1] = columns;
                    hasMatch = true;
                    break;
                }
            }

            // If no match was found, set custom breakpoint
            if ( ! hasMatch) {
                settings.breakpoints[settings.breakpoints.length] = [pixels, columns];
            }

            // Rearrange boxes
            scaleWidth();

            return this;

        };

        // Return plugin to end user so they can call public methods
        return this;
    };

}( jQuery ));