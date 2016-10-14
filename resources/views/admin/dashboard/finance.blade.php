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
                      Available Balance
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
                      Total Expense
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
            <div class="col-lg-12 col-xl-6 m-t-2">
                <div class="card with-tabs">
                    <div class="card-block">
                        <div class="tabs tabs-simple">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#balanceSummry" role="tab">Balance Summary</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#monthlyProfit" role="tab">Monthly Profit</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#yearly" role="tab">Yearly Profit</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="balanceSummry" role="tabpanel">
                                    <line-graph :labels="['January', 'February', 'March', 'April', 'May', 'June', 'July']" :values="[65, 59, 80, 81, 56, 55, 40]"></line-graph>
                                </div>
                                <div class="tab-pane" id="monthlyProfit" role="tabpanel">
                                    <line-graph :labels="['January', 'February', 'March', 'April', 'May', 'June', 'July']" :values="[100, 1200 , 1300 , 400 , 600 , 620 , 1000]"></line-graph>
                                </div>
                                <div class="tab-pane" id="yearly" role="tabpanel">
                                    <line-graph :labels="['January', 'February', 'March', 'April', 'May', 'June', 'July']" :values="[65, 59, 80, 81, 56, 55, 40]"></line-graph>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6 m-t-2">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa fa-bar-chart text-success"></i> Yearly Sales</h4>
                    </div>
                    <div class="card-block">
                        <bar-graph :labels="['Jan','Feb','Mar','June']" :values="[20,30,40,60]"></bar-graph>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6 m-t-2">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa fa-shopping-cart text-danger"></i> Recent Orders</h4>
                    </div>
                    <div class="card-block">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Walter White</td>
                                <td>05/12/2016</td>
                                <td>555$</td>
                                <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                            </tr>
                            <tr>
                                <td>Hank Hill</td>
                                <td>05/12/2016</td>
                                <td>222$</td>
                                <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6 m-t-2">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa fa-users text-info"></i> New Customers</h4>
                    </div>
                    <div class="card-block">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Walter White</td>
                                <td>05/12/2016</td>
                                <td>555$</td>
                                <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                            </tr>
                            <tr>
                                <td>Hank Hill</td>
                                <td>05/12/2016</td>
                                <td>222$</td>
                                <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
