@extends('admin.layouts.layout-large-icons')

@section('scripts')
    <script src="/assets/admin/js/dashboard/dashboard.js"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-3">
                <a class="dashbox" href="#">
                    <i class="fa fa-envelope text-primary"></i>
        <span class="title">
          35
        </span>
        <span class="desc">
          Mails
        </span>
                </a>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-3">
                <a class="dashbox" href="#">
                    <i class="fa fa-ticket text-success"></i>
        <span class="title">
          200
        </span>
        <span class="desc">
          Pending Tickets
        </span>
                </a>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-3">
                <a class="dashbox" href="#">
                    <i class="fa fa-shopping-cart text-danger"></i>
        <span class="title">
          100
        </span>
        <span class="desc">
          New Orders
        </span>
                </a>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-3">
                <a class="dashbox" href="#">
                    <i class="fa fa-comments text-info"></i>
        <span class="title">
          59
        </span>
        <span class="desc">
          Comments
        </span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6 m-t-2">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa fa-line-chart text-primary"></i> Monthly Sales</h4>
                    </div>
                    <div class="card-block">
                        <line-graph :labels="['Jan','Feb','Mar','June']" :values="[20,30,40,60]"></line-graph>
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
            <div class="col-lg-12 col-xl-6 m-t-3">
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
                                <td>Hank Hill</td>
                                <td>05/12/2016</td>
                                <td>555$</td>
                                <td><a href="#" class="btn btn-secondary btn-xs">View</a></td>
                            </tr>
                            <tr>
                                <td>Walter White</td>
                                <td>05/12/2016</td>
                                <td>222$</td>
                                <td><a href="#" class="btn btn-secondary btn-xs">View</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6 m-t-3">
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
                                <td>Hank Hill</td>
                                <td>05/12/2016</td>
                                <td>555$</td>
                                <td><a href="#" class="btn btn-secondary btn-xs">View</a></td>
                            </tr>
                            <tr>
                                <td>Walter White</td>
                                <td>05/12/2016</td>
                                <td>222$</td>
                                <td><a href="#" class="btn btn-secondary btn-xs">View</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
