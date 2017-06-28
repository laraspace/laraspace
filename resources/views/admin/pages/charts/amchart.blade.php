@extends('admin.layouts.layout-basic')
@section('styles')
    <style>
        .amcharts {
            width: 100%;
            height: 500px;
        }
    </style>
    @stop
@section('scripts')
    <script src="{{asset('assets/admin/js/demo/graph.js')}}"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Graphs</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.components.graphs')}}">Components</a></li>
                <li class="breadcrumb-item active">Graphs</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Column and Line mix Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="bar-line-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Clustered Bar Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="clust-bar-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Clustered Bar Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="line-area-value-axis"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Stacked Area Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="stack-area-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>3D Cylinder Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="3d-cylinder-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Animated Time-Line Pie Chart</h6>
                    </div>
                    <div class="card-block">
                        <div class="amcharts" id="animated-pie-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
