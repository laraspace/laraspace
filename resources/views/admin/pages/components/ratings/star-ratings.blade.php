@extends('admin.layouts.layout-basic')

@section('scripts')
    <script type="text/javascript" src="{{asset('assets/admin/js/pages/rating.js')}}"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Star Ratings</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.components.zoom')}}">Components</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.components.rating.bar')}}">Ratings</a></li>
                <li class="breadcrumb-item active">Star</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Default</h6>
                    </div>
                    <div class="card-block">
                        <div id="star"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Read only</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-read"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
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
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Starting with a callback</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-callback" data-rating="3"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Number of stars</h6>
                    </div>
                    <div class="card-block">
                        <div id="no-of-star"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
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
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Cancel button</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-cancel"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Half star</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-half"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
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
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Custom icons</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-icon"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Range of custom icons</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-icon-range"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
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
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Displaying the score in a target element</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-bigger"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Displaying the score in a target element</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-score-target"></div>
                        <div id="mouseover-target"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
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
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Without space between stars</h6>
                    </div>
                    <div class="card-block">
                        <div id="star-without-space"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
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
