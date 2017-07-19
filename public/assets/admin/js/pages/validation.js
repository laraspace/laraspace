var FormValidation = function () {

    // Login form validation
    var handleValidation = function() {

        // for more info visit the official plugin documentation:
        // http://docs.jquery.com/Plugins/Validation
        var form = $('#validateForm');

        form.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",  // validate all fields including form hidden input
            rules: {
                password: {
                    minlength: 2,
                    required: true
                },
                password_confirmation : {
                    equalTo : '#password',
                    required : true
                },
                email: {
                    required: true,
                    email: true
                },
                username : {
                    required : true
                },
                terms : {
                    required : true
                },
                mail_from : {
                    required: true,
                    email: true
                },
                mail_mailgun_user : {
                    required: true
                },
                mail_mailgun_secret : {
                    required: true
                },
                mail_mailgun_domain : {
                    required: true
                },

                mail_sendgrid_host : {
                    required: true
                },

                mail_sendgrid_username : {
                    required: true
                },

                mail_sendgrid_password : {
                    required: true
                },

                mail_sendgrid_user : {
                    required: true
                },

                mail_sparkpost_secret : {
                    required: true
                },

                mail_sparkpost_user : {
                    required: true
                },

                mail_sparkpost_from : {
                    required: true
                },
                notify_mail : {
                    required: true,
                    email: true
                }
            },

            highlight: function (element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-danger'); // set danger class to the control group
            },

            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                    .closest('.form-group').removeClass('has-danger'); // set danger class to the control group
            },
            errorPlacement: function (error, element) {
                if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            },
            success: function (label) {
                label
                    .closest('.form-group').removeClass('has-danger'); // set success class to the control group
            },
        });

    };


    return {
        //main function to initiate the module
        init: function () {
            handleValidation();
        }
    };

}();

jQuery(document).ready(function() {
    FormValidation.init();
});