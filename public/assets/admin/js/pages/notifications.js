var Notifications = function () {

    var handleToastrNotifs = function(){
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

        $('[data-toastr]').on('click',function(){
            var type = $(this).data('toastr'),message = $(this).data('message'),title = $(this).data('title');
            toastr[type](message, title);
        });
    };

    var handleNotieNotifs = function(){

        $('[data-notie]').on('click',function(){
            var type = $(this).data('notie'),message = $(this).data('message'),title = $(this).data('title');

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
                case 'confirm':
                    notie.confirm('Are you sure you want to do that?', 'Yes', 'Cancel', function() {
                        notie.alert(1, 'Good choice!', 2);
                    });
                    break;
                case 'input':
                    notie.input({
                        type: 'password',
                        placeholder: 'Enter your password'
                    }, 'Please enter your password:', 'Submit', 'Cancel', function(valueEntered) {
                        notie.alert(1, 'You entered: ' + valueEntered, 2);
                    }, function(valueEntered) {
                        notie.alert(3, 'You cancelled with this value: ' + valueEntered, 2);
                    });
                    break;
                case 'select':
                    notie.select('Demo item #1, owner is Jane Smith',
                        [
                            { title: 'Share' },
                            { title: 'Open', color: '#57BF57' },
                            { title: 'Edit', type: 2 },
                            { title: 'Delete', type: 3 }
                        ],
                        function() {
                            notie.alert(1, 'Share item!', 3);
                        }, function() {
                            notie.alert(1, 'Open item!', 3);
                        }, function() {
                            notie.alert(2, 'Edit item!', 3);
                        }, function() {
                            notie.alert(3, 'Delete item!', 3);
                        });
                    break;

                default:
                    notie.alert(1, 'Success!');
            }
        });


    };



    return {
        //main function to initiate the module
        init: function () {
            handleToastrNotifs();
            handleNotieNotifs();
        }
    };

}();

jQuery(document).ready(function() {
    Notifications.init();
});