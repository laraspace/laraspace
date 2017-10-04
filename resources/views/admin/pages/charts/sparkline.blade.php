@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="{{asset('assets/admin/js/pages/charts/sparklines.js')}}"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Sparkline Charts</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.charts.sparklines')}}">Charts</a></li>
                <li class="breadcrumb-item active">Sparkline Charts</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="sparkline-chart">
                            <div class="row">
                                <div class="sparkline-chart-type">
                                    <h5 class="section-semi-title">Mouse Speed:</h5>
                                    <span class="spl-chart spl-mousespeed"></span>
                                </div>
                                <div class="sparkline-chart-type">
                                    <h5 class="section-semi-title">Line Chart:</h5>
                                    <span class="spl-chart spl-line-chart"></span>
                                </div>
                                <div class="sparkline-chart-type">
                                    <h5 class="section-semi-title">Inline Chart:</h5>
                                    <span class="spl-inline">1,4,4,7,5,9,10</span>
                                </div>

                                <div class="sparkline-chart-type">
                                    <h5 class="section-semi-title">Composite Inline Chart:</h5>
                                    <span class="spl-cp-inline">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span>
                                </div>

                                <div class="sparkline-chart-type">
                                    <h5 class="section-semi-title">Bar Charts:</h5>
                                    <span class="spl-bar-chart">6, 10, 5, 2, 0, 6, 15, 13, 1, 4, 2, 3</span>
                                </div>
                                <div class="sparkline-chart-type">
                                    <h5 class="section-semi-title">Negative Bar Charts:</h5>
                                    <span class="spl-bar-chart">5,6,7,2,0,-4,-2,4,2,4,-7,3,-3,5</span>
                                </div>
                                <div class="sparkline-chart-type">
                                    <h5 class="section-semi-title">Stacked Chart:</h5>
                                    <span class="spl-bar-chart">0:2,2:4,4:2,4:1,6:2,3:3,5:7,3,2:6</span>
                                </div>
                                <div class="sparkline-chart-type">
                                    <h5 class="section-semi-title">Composite Inline Bar Chart:</h5>
                                    <span class="spl-cp-bar-chart">4,6,7,7,4,3,2,1,4</span>
                                </div>

                                <div class="sparkline-chart-type">
                                    <h5 class="section-semi-title">Discrete Charts:</h5>
                                    <span class="spl-discreate1">4,6,7,7,4,3,2,1,4,4,5,5,8,3,3</span>
                                </div>

                                <div class="sparkline-chart-type">
                                    <h5 class="section-semi-title">Discrete with threshold:</h5>
                                    <span class="spl-discreate2">4,6,7,7,4,3,2,1,4,4,5,5,8,3,3</span>
                                </div>
                                <div class="sparkline-chart-type">
                                    <h5 class="section-semi-title">Tristate Charts:</h5>
                                    <span class="spl-tristate">1,1,0,1,-1,-1,1,-1,0,0,1,1</span>
                                </div>
                                <div class="sparkline-chart-type">
                                    <h5 class="section-semi-title">Composite Inline Bar Chart:</h5>
                                    <span class="spl-tristate-color">1,2,0,2,-1,-2,1,-2,0,0,1,1</span>
                                </div>

                                <div class="sparkline-chart-type">
                                    <h5 class="section-semi-title">Box Plot:</h5>
                                    <span class="spl-boxplot">4,27,34,52,54,59,61,68,78,82,85,87,91,93,100</span>
                                </div>
                                <div class="sparkline-chart-type">
                                    <h5 class="section-semi-title">Pre-computed box Plot:</h5>
                                    <span class="spl-boxplotraw">1, 3, 5, 8, 10, 15, 18</span>
                                </div>
                                <div class="sparkline-chart-type">
                                    <h5 class="section-semi-title">Bullet charts:</h5>
                                    <span class="spl-bullet">10,12,12,9,7</span>
                                </div>

                                <div class="sparkline-chart-type">
                                    <h5 class="section-semi-title">Pie Chart:</h5>
                                    <span class="spl-pie-chart">4,2,3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
