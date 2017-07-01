@extends('admin.layouts.layout-basic')
@section('styles')
    <style>
        .gauges .col{
            display: flex;
            justify-content: center;
            margin:20px auto !important;
        }
        .gauge-lg {
            height: 250px;
        }
        .gauge-md {
            height: 180px;
        }
        .gauge-sm {
            height: 120px;
        }
    </style>
@stop
@section('scripts')
    <script src="{{asset('assets/admin/js/demo/charts/gauges.js')}}"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Gauge Charts</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.components.graphs')}}">Components</a></li>
                <li class="breadcrumb-item active">Gauge Charts</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Basic Gauges</h6>
                    </div>
                    <div class="card-block">
                        <div class="row gauges">
                            <div class="col">
                                <canvas class="gauge-lg basic-gauge"></canvas>
                                <div class="gauge-text-field"></div>
                            </div>
                            <div class="col">
                                <canvas class="gauge-md basic-gauge"></canvas>
                                <div class="gauge-text-field"></div>
                            </div>
                            <div class="col">
                                <canvas class="gauge-sm basic-gauge"></canvas>
                                <div class="gauge-text-field"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Donut</h6>
                    </div>
                    <div class="card-block">
                        <div class="row gauges">
                            <div class="col">
                                <canvas class="gauge-lg donut-gauge" height="250" width="500" id="donut"></canvas>
                                <div class="gauge-text-field"></div>
                            </div>
                            <div class="col">
                                <canvas class="gauge-md donut-gauge" height="250" width="500"></canvas>
                                <div class="gauge-text-field"></div>
                            </div>
                            <div class="col">
                                <canvas class="gauge-sm donut-gauge" height="250" width="500"></canvas>
                                <div class="gauge-text-field"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Color Gauges</h6>
                    </div>
                    <div class="card-block">
                        <div class="row gauges">
                            <div class="col">
                                <canvas class="gauge-lg color-gauge"></canvas>
                                <div class="gauge-text-field"></div>
                            </div>
                            <div class="col">
                                <canvas class="gauge-md color-gauge"></canvas>
                                <div class="gauge-text-field"></div>
                            </div>
                            <div class="col">
                                <canvas class="gauge-sm color-gauge"></canvas>
                                <div class="gauge-text-field"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
