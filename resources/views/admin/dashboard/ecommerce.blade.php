@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="/assets/admin/js/dashboard/dashboard.js"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-3">
                <a class="dashbox dashbox-line-progress" href="#">
                    <i class="fa fa-tags text-primary"></i>
                    <span class="desc">
                      Categories
                    </span>
                    <span class="title text-primary">
                      35
                    </span>
                    <progress class="progress" value="20" max="100">20%</progress>
                </a>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-3">
                <a class="dashbox dashbox-line-progress" href="#">
                    <i class="fa fa-star text-success"></i>
                    <span class="desc">
                      Products
                    </span>
                    <span class="title text-success">
                      2000
                    </span>
                    <progress class="progress progress-success" value="50" max="100">50%</progress>
                </a>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-3">
                <a class="dashbox dashbox-line-progress" href="#">
                    <i class="fa fa-shopping-cart text-danger"></i>
                    <span class="desc">
                      New Orders
                    </span>
                    <span class="title text-danger">
                      100
                    </span>
                    <progress class="progress progress-danger" value="70" max="100">70%</progress>
                </a>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-3">
                <a class="dashbox dashbox-line-progress" href="#">
                    <i class="fa fa-comments text-info"></i>
                    <span class="desc">
                      Reviews
                    </span>
                    <span class="title text-info">
                      59
                    </span>
                    <progress class="progress progress-info" value="80" max="100">80%</progress>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 m-t-2">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa fa-line-chart text-primary"></i> Monthly Sales</h4>
                    </div>
                    <div class="card-block">
                        <line-graph :labels="['Jan','Feb','Mar','June']" :values="[20,30,40,60]"></line-graph>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6 m-t-2">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa fa-shopping-cart text-danger"></i> Pending Orders</h4>
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
