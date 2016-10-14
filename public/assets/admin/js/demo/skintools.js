var SkinTools = function () {

    var setSkinOnLoad = function(){
        var skin = localStorage.getItem("currentSkin");

        if(skin)
        {
            // Set Active class on radio with currently active skin and remove active class from other radios
            $('[data-skin]').each(function(){
                if($(this).data('skin') == skin){
                    $(this).addClass('active');
                }else{
                    $(this).removeClass('active');
                }
            });

            setSkin(skin);
        }
    };

    var handleSkinToolToggler = function () {
        //On Click Action
        $('.skin-tools-action').on('click',function(){
            $(this).parent('.skin-tools').toggleClass('is-open');
        });
    };

    var handleSkinRadio = function(){
        $('.skin-tools-content').on('click','[data-skin]',function(){

            $('[data-skin]').not(this).each(function(){
                $(this).removeClass('active');
            });

            var logoSrc = ($(this).data('logo') == 'white') ? '/assets/admin/img/logo_white.png' : '/assets/admin/img/logo-desk.png';

            replaceLogo(logoSrc);

            $(this).addClass('active');

            var  skin = $(this).data('skin');
            localStorage.setItem("currentSkin", skin);

            setSkin(skin);
        });
    };

    var replaceLogo = function(src){
        var logo = $('#logo-desk');
        logo.fadeOut(400,function(){
            logo.fadeIn(400)[0].src = src;
        });
    };

    var resetSkin = function(){
        $("body").removeClass (function (index, css) {
            return (css.match (/(^|\s)skin-\S+/g) || []).join(' ');
        });
    };

    var setSkin = function(skin){
        resetSkin();
        $("body").addClass('skin-' + skin);
    };

    return {
        //main function to initiate the module
        init: function () {
            handleSkinToolToggler();
            handleSkinRadio();
        },
        beforeInit : function(){
            setSkinOnLoad();
        }
    };

}();

// SkinTools.beforeInit();

jQuery(document).ready(function() {
    SkinTools.init();
});