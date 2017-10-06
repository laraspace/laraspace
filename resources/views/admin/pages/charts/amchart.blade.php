@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="{{asset('assets/admin/js/pages/charts/amcharts.js')}}"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">AM Charts</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.charts.amcharts')}}">Charts</a></li>
                <li class="breadcrumb-item active">AM Charts</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Column and Line Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="amcharts" id="bar-line-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Clustered Bar Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="amcharts" id="clust-bar-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Duration on Value Axis Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="amcharts" id="line-area-value-axis"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Stacked Area Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="amcharts" id="stack-area-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h6>3D Cylinder Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="amcharts" id="3d-cylinder-chart"></div>
                    </div>
                    <div class="card-footer">
                        <div class="row chart-controls">
                            <div class="col-md-3">
                                <label class="section-semi-title">Top Radius:</label>
                                <input class="cylinder_chart_input" data-property="topRadius" type="range" min="0"
                                       max="1.5" value="1" step="0.01">
                            </div>
                            <div class="col-md-3">
                                <label class="section-semi-title">Angle:</label>
                                <input class="cylinder_chart_input" data-property="angle" type="range" min="0" max="89"
                                       value="30" step="1">
                            </div>
                            <div class="col-md-3">
                                <label class="section-semi-title">Depth:</label>
                                <input class="cylinder_chart_input" data-property="depth3D" type="range" min="1"
                                       max="120" value="40" step="1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Animated Time-Line Pie Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="amcharts" id="animated-pie-chart"></div>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h6>3D Donut Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="amcharts" id="3d-donut-chart"></div>
                    </div>
                    <div class="card-footer">
                        <div class="row chart-controls">
                            <div class="col-md-4">
                                <label class="section-semi-title">Angle:</label>
                                <input class="pie_donut_chart_input" data-property="angle" type="range" min="0" max="89"
                                       value="30" step="1">
                            </div>
                            <div class="col-md-4">
                                <label class="section-semi-title">Depth:</label>
                                <input class="pie_donut_chart_input" data-property="depth3D" type="range" min="1"
                                       max="120" value="40" step="1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h6>Radar Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="amcharts" id="radar-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h6>Polar Scatter Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="amcharts" id="polar-scatter-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Animations along lines Map</h6>
                    </div>
                    <div class="card-body">
                        <div class="amcharts" id="map-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Capitals map</h6>
                    </div>
                    <div class="card-body">
                        <div class="amcharts" id="capital-map-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Zoomable Bubble & XY Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="amcharts" id="xy-and-bubble-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Multiple Data Sets Stock Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="amcharts" id="multiple-data-sets-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
