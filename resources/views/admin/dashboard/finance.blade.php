@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="/assets/admin/js/pages/dashboard.js"></script>
@stop

@section('content')
    <div class="main-content" id="dashboardPage">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <a class="dashbox dashbox-circle-progress" href="#">
                    <span class="desc">
                        Sales
                    </span>
                    <span class="title text-primary">
                      $ 3500
                    </span>
                    <div class="easy-pie-chart" data-percent="20" data-color="#007dcc">
                        <span class="percent text-primary"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-12 col-lg-6">
                <a class="dashbox dashbox-circle-progress" href="#">
                    <span class="desc">
                      Profit
                    </span>
                    <span class="title text-success">
                      $ 1000
                    </span>
                    <div class="easy-pie-chart" data-percent="50" data-color="#4fc47f">
                        <span class="percent text-success"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-12 col-lg-6">
                <a class="dashbox dashbox-circle-progress" href="#">
                    <span class="desc">
                        Expense
                    </span>
                    <span class="title text-danger">
                      $ 200
                    </span>
                    <div class="easy-pie-chart" data-percent="70" data-color="#f35a3d">
                        <span class="percent text-danger"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-12 col-lg-6">
                <a class="dashbox dashbox-circle-progress" href="#">
                    <span class="desc">
                      Revenue
                    </span>
                    <span class="title text-info">
                      $ 5000
                    </span>
                    <div class="easy-pie-chart" data-percent="80" data-color="#5BBFDE">
                        <span class="percent text-info"></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-12 m-t-2">
                <div class="card with-tabs">
                    <div class="card-header">
                        <div class="caption">
                            <h6><i class="fa fa-bar-chart text-success"></i> Total Expenses</h6>
                        </div>

                        <div class="actions tabs-simple">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#balanceSummry"
                                       role="tab">Daily</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#monthlyProfit" role="tab">Monthly</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#yearly" role="tab">Yearly</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card-block">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="balanceSummry" role="tabpanel">
                                <line-graph
                                        :labels="['Oct 10', 'Oct 11', 'Oct 12', 'Oct 13', 'Oct 14', 'Oct 15', 'Oct 16']"
                                        :values="[200 , 1000 , 300, 551, 516, 225, 40]"></line-graph>
                            </div>
                            <div class="tab-pane" id="monthlyProfit" role="tabpanel">
                                <line-graph :labels="['January', 'February', 'March', 'April', 'May', 'June', 'July']"
                                            :values="[5000, 6000 , 2000 , 7000 , 1000 , 3000 , 5000]"></line-graph>
                            </div>
                            <div class="tab-pane" id="yearly" role="tabpanel">
                                <line-graph :labels="['2011', '2012', '2013', '2014', '2015', '2016', '2017']"
                                            :values="[10000, 20000, 12444, 15000, 17000, 14000, 20000]"></line-graph>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6 m-t-2">
                <div class="card">
                    <div class="card-header">
                        <div class="caption">
                            <h6><i class="fa fa-credit-card text-primary"></i> Summary</h6>
                        </div>
                        <div class="actions">
                            <div class="btn-group" role="group">
                                <button id="summaryFilterDrop" type="button" class="btn btn-sm btn-primary-outline dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Filters
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="summaryFilterDrop">
                                    <a class="dropdown-item" href="#">October</a>
                                    <a class="dropdown-item" href="#">September</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <pie-graph
                                :labels="['Revenue', 'Expense', 'Profit']"
                                :values="[300, 50, 250]"
                                :bg-colors="['#5BBFDE','#f35a3d','#4fc47f']"
                                :hover-bg-colors="['#5BBFDE','#f35a3d','#4fc47f']">
                        </pie-graph>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6 m-t-2">
                <div class="card">
                    <div class="card-header">
                        <div class="caption">
                            <h6><i class="fa fa-shopping-cart text-danger"></i> Total Revenue</h6>
                        </div>
                        <div class="actions">
                            <button class="btn btn-danger btn-sm"> Today</button>
                            <button class="btn btn-danger-outline btn-sm"> Past Month</button>
                        </div>
                    </div>
                    <div class="card-block">
                        <bar-graph :labels="['January', 'February', 'March', 'April', 'May', 'June', 'July']"
                                   :values="[5000, 6000 , 2000 , 7000 , 1000 , 3000 , 5000]"></bar-graph>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
