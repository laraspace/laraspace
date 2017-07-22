// $(document).ready(function () {
//
//
//     $('#star').raty({
//         starType : 'i',
//         starOn: 'icon-fa icon-fa-fw icon-fa-star',
//         starOff: 'icon-fa icon-fa-fw icon-fa-star-o',
//     });
//
//     $('#star-read').raty({
//         readOnly : true,
//         score    : 2
//     });
//
//     $('#star-score').raty({
//         score    : 2
//     });
//
//     $('#star-callback').raty({
//         score    : function() {
//             return $(this).attr('data-rating');
//         }
//     });
//
//     $('#no-of-star').raty({
//         scoreName: 'entity.score',
//         number   : 10
//     });
//
//     $('#star-click').raty({
//         click    : function(score, evt) {
//             alert('ID: ' + $(this).attr('id') + '\nscore: ' + score + '\nevent: ' + evt);
//         }
//     });
//
//     $('#star-cancel').raty({
//         cancel    : true,
//         cancelOff : 'fa fa-fw fa-minus-square-o',
//         cancelOn  : 'fa fa-fw fa-minus-square'
//     });
//
//     $('#star-half').raty({
//         half     : true,
//     });
//
//     $('#star-round').raty({
//         score    : 1.26,
//         round    : { down: .25, full: .6, up: .76 }
//     });
//
//     $('#star-icon').raty({
//         hints    : ['a', '', null, 'd', '5'],
//         starOn   : 'flag-on.png',
//         starOff  : 'flag-off.png'
//     });
//
//     $('#star-icon-range').raty({
//         path     :'../../../assets/admin/img/rating/',
//         iconRange: [
//             { range: 2, on: 'face-a.png', off: 'face-a-off.png' },
//             { range: 3, on: 'face-b.png', off: 'face-b-off.png' },
//             { range: 4, on: 'face-c.png', off: 'face-c-off.png' },
//             { range: 5, on: 'face-d.png', off: 'face-d-off.png' }
//         ]
//     });
//
//     $('.star-group').raty({
//         path      :'../../../assets/admin/img/rating/',
//     });
//
//     $('#star-bigger').raty({
//         path      :'../../../assets/admin/img/rating/',
//         cancel    : true,
//         cancelOff : 'cancel-off-big.png',
//         cancelOn  : 'cancel-on-big.png',
//         half      : true,
//         size      : 24,
//         starHalf  : 'star-half-big.png',
//         starOff   : 'star-off-big.png',
//         starOn    : 'star-on-big.png'
//     });
//
//     $('#star-score-target').raty({
//         path      :'../../../assets/admin/img/rating/',
//         cancel    : true,
//         mouseover : function(score, evt) {
//             var target = $('#mouseover-target');
//
//             if (score === null) {
//                 target.html('Boring!');
//             } else if (score === undefined) {
//                 target.empty();
//             } else {
//                 target.html(score);
//             }
//         }
//     });
//
//     $('#star-precision').raty({
//         path       :'../../../assets/admin/img/rating/',
//         half       : true,
//         precision  : true,
//         size       : 24,
//         starHalf   : 'star-half-big.png',
//         starOff    : 'star-off-big.png',
//         starOn     : 'star-on-big.png',
//         target     : '#target-precision',
//         targetType : 'number',
//     });
//
//     $('#star-without-space').raty({
//         path       :'../../../assets/admin/img/rating/',
//         space      : false
//     });
//
//     $('#star-single').raty({
//         path       :'../../../assets/admin/img/rating/',
//         single     : true
//     });
// });

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

