var FormWizard = function () {

    var handleBasicWizardOne = function (){
        $("#basic-wizard").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            autoFocus: true
        });
    };

    var handleBasicWizardTwo = function(){
        $("#basic-wizard-2").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            autoFocus: true
        });
    };

    var handleBasicWizardThree = function(){
        var form = $("#basic-wizard-3");
        form.validate({
            errorPlacement: function errorPlacement(error, element) {
                element.after(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
        form.steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            autoFocus: true,
            onStepChanging: function (event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function (event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function (event, currentIndex) {
                alert("Submitted!");
            }
        });
    };

    var handleBasicWizardFour = function(){
        $("#basic-wizard-4").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            autoFocus: true
        });

    };

    return {
        //main function to initiate the module
        init: function () {
            handleBasicWizardOne();
            handleBasicWizardTwo();
            handleBasicWizardThree();
            handleBasicWizardFour();
        }
    };

}();

$.Deferred(function() {
    FormWizard.init();
});