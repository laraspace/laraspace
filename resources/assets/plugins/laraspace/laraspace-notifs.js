var LaraspaceNotifs = function () {

    var handleNotifs = function(){
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        var notify = $('.laraspace-notify'),
            type = notify.data('notify'),
            driver = notify.data('driver'),
            message = notify.data('message'),title = notify.data('title');

        //Laracasts-Flash returns danger as the error type. However we need it to "error" to work with toastr.
        if(type == 'danger'){
            type = 'error';
        }

        if(!message == '' && driver == 'toastr'){
            toastr[type](message, title);
        }else if(!message == ''){
            notieAlert(type,message);
        }

    };

    var notieAlert = function(type,message){
        switch(type) {
            case 'success':
                notie.alert(1, message); // Never hides unless clicked, or escape or enter is pressed
                break;
            case 'warning':
                notie.alert(2, message);
                break;
            case 'info':
                notie.alert(4, message);
                break;
            case 'error':
                notie.alert(3, message);
                break;
            default:
                notie.alert(1, message);

        }
    };

    return {
        //main function to initiate the module
        init: function () {
            handleNotifs();
        },
    };

}();

jQuery(document).ready(function() {
    LaraspaceNotifs.init();
});