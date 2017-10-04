@extends('admin.layouts.layout-basic')

@section('scripts')
    <script type="text/javascript" src="{{asset('assets/admin/js/pages/star-ratings.js')}}"></script>
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
                    <div class="card-body">
                        <div id="star-default" class="star-rating"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Read Only</h6>
                    </div>
                    <div class="card-body">
                        <div id="star-readonly" class="star-rating"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Start with Score</h6>
                    </div>
                    <div class="card-body">
                        <div id="star-score" class="star-rating"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Number of Stars</h6>
                    </div>
                    <div class="card-body">
                        <div id="star-number" class="star-rating"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Half Star</h6>
                    </div>
                    <div class="card-body">
                        <div id="star-half" class="star-rating"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Cancel Button</h6>
                    </div>
                    <div class="card-body">
                        <div id="star-cancel" class="star-rating"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Custom Icons</h6>
                    </div>
                    <div class="card-body">
                        <div id="star-custom" class="star-rating"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>With Target</h6>
                    </div>
                    <div class="card-body">
                        <div id="star-target" class="star-rating"></div>
                        <div id="target" class="star-rating-hint"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6>With Percentage</h6>
                    </div>
                    <div class="card-body">
                        <div id="star-percentage" class="star-rating"></div>
                        <div id="target-percentage" class="star-rating-hint"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
