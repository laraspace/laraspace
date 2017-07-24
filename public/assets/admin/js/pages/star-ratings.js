var StarRating = function () {

    var handleDefaults = function(){
        $.fn.raty.defaults.starOn = 'icon-fa icon-fa-fw icon-fa-star color-orange';
        $.fn.raty.defaults.starOff = 'icon-fa icon-fa-fw icon-fa-star-o';
        $.fn.raty.defaults.starHalf = 'icon-fa icon-fa-fw icon-fa-star-half-o color-orange';
        $.fn.raty.defaults.cancelOff = 'icon-fa icon-fa-fw icon-fa-minus-square-o';
        $.fn.raty.defaults.cancelOn  = 'icon-fa icon-fa-fw icon-fa-minus-square';
        $.fn.raty.defaults.starType = 'i';

        $('#star-default').raty();
    };

    var handleReadOnly = function(){
        $('#star-readonly').raty({
            readOnly: true
        });
    };

    var handleWithScore = function(){
        $('#star-score').raty({
            score : 2,
        });
    };

    var handleWithNumberOfStars = function(){
        $('#star-number').raty({
            number   : 10
        });
    };

    var handleHalfStars = function(){
        $('#star-half').raty({
            half: true
        });
    };

    var handleCancelButton = function(){
        $('#star-cancel').raty({
            cancel: true
        });
    };

    var handleCustomIcons = function(){
        $('#star-custom').raty({
            starOn   : 'icon-fa icon-fa-fw icon-fa-heart color-red',
            starOff  : 'icon-fa icon-fa-fw icon-fa-heart-o'
        });
    };

    var handleWithTarget = function(){
        $('#star-target').raty({
            target     : '#target',
            targetKeep : true
        });
    };

    var handleWithPercentage = function(){
        $('#star-percentage').raty({
            number   : 10,
            hints    : ['10%','20%','30%','40%','50%','60%','70%','80%','90%','100%'],
            target     : '#target-percentage',
            targetText : '0',
            targetKeep : true
        });
    };

    return {
        //main function to initiate the module
        init: function () {
            handleDefaults();
            handleReadOnly();
            handleWithScore();
            handleWithNumberOfStars();
            handleHalfStars();
            handleCancelButton();
            handleCustomIcons();
            handleWithTarget();
            handleWithPercentage();
        }
    };

}();

jQuery(document).ready(function() {
    StarRating.init();
});

