@extends('admin.layouts.layout-basic')



@section('styles')
    <style>
        #mouseover-target, #target-precision{
            float: right;
            background: #eee;
            padding: 0 15px;
            width: 90px;
            height: 25px;
        }
        #star-score-target,#star-precision{
            float: left;
        }

    </style>
@stop
@section('scripts')
    <script type="text/javascript" charset="utf-8" src="{{asset('assets/jquery.raty.js')}}"></script>
    <script>
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
    </script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Notifications</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Notifications</a></li>
                <li class="breadcrumb-item active">Notifications</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Default</h6>
                    </div>
                    <div class="card-block">
                        <div id="star"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Read only</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-read"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Started with a score</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-score"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Starting with a callback</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-callback" data-rating="3"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Number of stars</h6>
                    </div>
                    <div class="card-block">
                        <div id="no-of-star"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Click function</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-click"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Cancel button</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-cancel"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Half star</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-half"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Custom round</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-round"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Custom icons</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-icon"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Range of custom icons</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-icon-range"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Group of elements</h6>
                    </div>
                    <div class="card-block">
                        <div class="star-group"></div>
                        <div class="star-group"></div>
                        <div class="star-group"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Displaying the score in a target element</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-bigger"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Displaying the score in a target element</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-score-target"></div>
                        <div id="mouseover-target"> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Half star voting precision</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-precision"></div>
                        <div id="target-precision"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Without space between stars</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-without-space"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Single icon</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-single"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
