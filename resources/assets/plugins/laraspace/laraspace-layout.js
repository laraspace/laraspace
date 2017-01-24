var LaraspaceLayout = function () {

    var toggleSideBar = function (){
        var icon = $('.hamburger').first();
        $('body').toggleClass('sidebar-open');
        icon.toggleClass('is-active');
    };

    var handleSideBar = function () {
        // Sidebar menu slide
        $('.side-nav .has-child a').on('click',function(e){
            var menu = $(this).next('.sub-menu'),listItem = $(this).parent('li');

            menu.collapse('toggle');
            listItem.toggleClass('open');

            //Close already open menus
            var otherItems =  listItem.siblings('.open');
            otherItems.each(function(){
                var menu = $(this).find('.sub-menu');

                menu.collapse('toggle');
                $(this).toggleClass('open');
            });
        });


        // Open the menu if Active
        var openMenus = $('.side-nav .has-child.open').find('.sub-menu');
        openMenus.collapse('show');

        // Mobile Toggle
        $('.nav-toggle').on('click',function(e){
            e.preventDefault();
            toggleSideBar();
        });

    };

    var handleMobileOverlay = function () {
        $('.mobile-menu-overlay').on('click',function(e){
            e.preventDefault();

            toggleSideBar();
        });
    };



    var handleCustomScrollBars = function(){


        // setTimeout(function(){
        //     $(".scroll-pane").mCustomScrollbar({theme:"minimal-dark"});
        // },1000);

        $(".scroll-pane").mCustomScrollbar({theme:"minimal-dark"});
    };


    return {
        //main function to initiate the module
        init: function () {
            handleSideBar();
            handleMobileOverlay();
            handleCustomScrollBars();
        }
    };

}();

jQuery(document).ready(function() {
    LaraspaceLayout.init();
});