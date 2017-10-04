@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="{{asset('assets/admin/js/pages/charts/morris.js')}}"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Morris Charts</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.charts.morris')}}">Charts</a></li>
                <li class="breadcrumb-item active">Morris Charts</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Line Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="morris" id="morris-line-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Area Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="morris" id="morris-area-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Donut Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="morris" id="morris-donut-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Bar Chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="morris" id="morris-bar-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
