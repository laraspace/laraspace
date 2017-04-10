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

        //Change timeout value here.
        let timeout = 5;

        switch(type) {
            case 'success':
                notie.alert({
                    type : 1,
                    text : message,
                    time : timeout
                })
                break;
            case 'warning':
                notie.alert({
                    type : 2,
                    text : message,
                    time : timeout
                })
                break;
            case 'info':
                notie.alert({
                    type : 3,
                    text : message,
                    time : timeout
                })
                break;
            case 'error':
                notie.alert({
                    type : 4,
                    text : message,
                    time : timeout
                })
                break;
            default:
                notie.alert({
                    type : 1,
                    text : message,
                    time : timeout
                })

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