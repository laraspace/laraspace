@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="{{asset('assets/admin/js/demo/charts/gauges.js')}}"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Gauge Charts</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.charts.gauges')}}">Charts</a></li>
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
                        <div class="row gauges-row">
                            <div class="col">
                                <div class="gauge gauge-lg">
                                    <canvas class="basic-gauge"></canvas>
                                    <div class="gauge-label"></div>
                                </div>
                            </div>
                            <div class="col ">
                                <div class="gauge gauge-md">
                                    <canvas class="basic-gauge"></canvas>
                                    <div class="gauge-label"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="gauge gauge-sm">
                                    <canvas class="basic-gauge"></canvas>
                                    <div class="gauge-label"></div>
                                </div>
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
                        <div class="row gauges-row">
                            <div class="col">
                                <div class="gauge gauge-lg">
                                    <canvas class="donut-gauge" height="250" width="500" id="donut"></canvas>
                                    <div class="gauge-label middle-label"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="gauge gauge-md">
                                    <canvas class="donut-gauge" height="250" width="500"></canvas>
                                    <div class="gauge-label middle-label"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="gauge gauge-sm">
                                    <canvas class="donut-gauge" height="250" width="500"></canvas>
                                    <div class="gauge-label middle-label"></div>
                                </div>
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
                        <div class="row gauges-row">
                            <div class="col">
                                <div class="gauge gauge-lg">
                                    <canvas class="color-gauge"></canvas>
                                    <div class="gauge-label"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="gauge gauge-md">
                                    <canvas class="color-gauge"></canvas>
                                    <div class="gauge-label"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="gauge gauge-sm">
                                    <canvas class="color-gauge"></canvas>
                                    <div class="gauge-label"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
