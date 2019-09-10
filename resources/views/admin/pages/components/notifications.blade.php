@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="/assets/admin/js/pages/notifications.js"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Notifications</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.components.notifications')}}">Components</a></li>
                <li class="breadcrumb-item active">Notifications</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Toastr</h6>
                    </div>
                    <div class="card-body buttons-demo">
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-success" data-toastr="success" data-message="Hello World"
                                        data-title="Success!">
                                    Success
                                </button>
                                <button class="btn btn-info" data-toastr="info" data-message="Hello World"
                                        data-title="Note!">
                                    Info
                                </button>
                                <button class="btn btn-danger" data-toastr="error" data-message="Hello World"
                                        data-title="Error!">
                                    Error
                                </button>
                                <button class="btn btn-warning" data-toastr="warning" data-message="Hello World"
                                        data-title="Warning!">
                                    Warning
                                </button>
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
                        <h6>Notie.js</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-success" data-notie="success" data-message="Hello World">
                                    Success
                                </button>
                                <button class="btn btn-info" data-notie="info" data-message="Hello World">
                                    Info
                                </button>
                                <button class="btn btn-danger" data-notie="error" data-message="Hello World">
                                    Error
                                </button>
                                <button class="btn btn-warning" data-notie="warning" data-message="Hello World">
                                    Warning
                                </button>
                                <button class="btn btn-primary" data-notie="confirm">
                                    Confirm
                                </button>
                                <button class="btn btn-outline-primary" data-notie="input">
                                    Input
                                </button>
                                <button class="btn btn-primary btn-rounded" data-notie="select">
                                    Select
                                </button>
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
                        <h6>Easy Flash Notifications</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <p>Laraspace provides an easy way for your Laravel Application to handle notification alerts
                                    using any of the above plugins. Just call any of the functions mentioned below inside
                                    your controller method and you'll see the notification in the view.</p>

                                <p><code>flash('You've Logged in Successfully.')->success();</code></p>

                                <p><code>flash('There's something wrong.')->warning();</code></p>

                                <p><code>flash('Validation Error')->error();</code></p>

                                <p><code>flash('Laraspace is Awesome!')->info();</code></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
