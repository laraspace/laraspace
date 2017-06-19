$(document).ready(function () {
    $('#star').raty({
        path:'../../assets/admin/img/rating/',
    });
    $('#star-read').raty({
        path     :'../../assets/admin/img/rating/',
        readOnly : true,
        score    : 2
    });
    $('#star-score').raty({
        path     :'../../assets/admin/img/rating/',
        score    : 2
    });
    $('#star-callback').raty({
        path     :'../../assets/admin/img/rating/',
        score    : function() {
            return $(this).attr('data-rating');
        }
    });
    $('#no-of-star').raty({
        path     :'../../assets/admin/img/rating/',
        scoreName: 'entity.score',
        number   : 10
    });
    $('#star-click').raty({
        path     :'../../assets/admin/img/rating/',
        click    : function(score, evt) {
            alert('ID: ' + $(this).attr('id') + '\nscore: ' + score + '\nevent: ' + evt);
        }
    });
    $('#star-cancel').raty({
        path     :'../../assets/admin/img/rating/',
        cancel   : true
    });
    $('#star-half').raty({
        path     :'../../assets/admin/img/rating/',
        half     : true,
        score    : 3.3
    });
    $('#star-round').raty({
        path     :'../../assets/admin/img/rating/',
        score    : 1.26,
        round    : { down: .25, full: .6, up: .76 }
    });
    $('#star-icon').raty({
        path     :'../../assets/admin/img/rating/',
        hints    : ['a', '', null, 'd', '5'],
        starOn   : 'flag-on.png',
        starOff  : 'flag-off.png'
    });
    $('#star-icon-range').raty({
        path     :'../../assets/admin/img/rating/',
        iconRange: [
            { range: 2, on: 'face-a.png', off: 'face-a-off.png' },
            { range: 3, on: 'face-b.png', off: 'face-b-off.png' },
            { range: 4, on: 'face-c.png', off: 'face-c-off.png' },
            { range: 5, on: 'face-d.png', off: 'face-d-off.png' }
        ]
    });
    $('.star-group').raty({
        path      :'../../assets/admin/img/rating/',
    });
    $('#star-bigger').raty({
        path      :'../../assets/admin/img/rating/',
        cancel    : true,
        cancelOff : 'cancel-off-big.png',
        cancelOn  : 'cancel-on-big.png',
        half      : true,
        size      : 24,
        starHalf  : 'star-half-big.png',
        starOff   : 'star-off-big.png',
        starOn    : 'star-on-big.png'
    });
    $('#star-score-target').raty({
        path      :'../../assets/admin/img/rating/',
        cancel    : true,
        mouseover : function(score, evt) {
            var target = $('#mouseover-target');

            if (score === null) {
                target.html('Boring!');
            } else if (score === undefined) {
                target.empty();
            } else {
                target.html(score);
            }
        }
    });
    $('#star-precision').raty({
        path       :'../../assets/admin/img/rating/',
        half       : true,
        precision  : true,
        size       : 24,
        starHalf   : 'star-half-big.png',
        starOff    : 'star-off-big.png',
        starOn     : 'star-on-big.png',
        target     : '#target-precision',
        targetType : 'number',
    });
    $('#star-without-space').raty({
        path       :'../../assets/admin/img/rating/',
        space      : false
    });
    $('#star-single').raty({
        path       :'../../assets/admin/img/rating/',
        single     : true
    });
});