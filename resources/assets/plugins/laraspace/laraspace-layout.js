var LaraspaceLayout = function () {

    var toggleSideBar = function () {
        var icon = $('.hamburger').first();
        $('body').toggleClass('sidebar-open');
        icon.toggleClass('is-active');
    };

    var handleSideBar = function () {
        $("#menu").metisMenu();

        // Mobile Toggle
        $('.nav-toggle').on('click', function (e) {
            e.preventDefault();
            toggleSideBar();
        });
    };

    var handleMobileOverlay = function () {
        $('.mobile-menu-overlay').on('click', function (e) {
            e.preventDefault();
            toggleSideBar();
        });
    };

    var handleHorizontalSidebar = function () {
        $('.dropdown-submenu .dropdown-subitem').click(function (e) {
            $(this).toggleClass('active');
            $(this).parent().siblings('.dropdown-submenu').find('.dropdown-menu').hide();
            $(this).next('.dropdown-menu').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    };

    var handleCustomScrollBars = function () {

        // setTimeout(function(){
        //     $(".scroll-pane").mCustomScrollbar({theme:"minimal-dark"});
        // },1000);

        $(".scroll-pane").mCustomScrollbar({theme: "minimal-dark"});
    };


    return {
        //main function to initiate the module
        init: function () {
            handleSideBar();
            handleMobileOverlay();
            handleCustomScrollBars();
            handleHorizontalSidebar();
        }
    };

}();

jQuery(document).ready(function () {
    LaraspaceLayout.init();
});