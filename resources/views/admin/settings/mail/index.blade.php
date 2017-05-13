@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="/assets/js/users/users.js"></script>
    <script src="/assets/js/multidelete.js"></script>


@stop

@section('content')
    <div class="main-content">

        <div class="page-header">
            <h3 class="page-title">Mail</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.mail.index')}}">Mail</a></li>
            </ol>
        </div>
        <div class="row" id="root">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        Mailer
                    </div>
                    <div class="card-block">
                        <form method="post" action="{{route('admin.mail.create')}}"
                              enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label>Mail Host</label>
                                <input type="text" name="host" value="{{ get_setting('host') }}"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Mail Port</label>
                                <input type="text" name="port" value="{{ get_setting('port') }}"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Mail Username From </label>
                                <input type="text" name="from_user" value="{{ get_setting('from_user') }}"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email From</label>
                                <input type="text" name="from" value="{{ get_setting('from') }}"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Mail Username</label>
                                <input type="text" name="username" value="{{ get_setting('username') }}"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Mail Password</label>
                                <input type="text" name="password" value="{{ get_setting('password') }}"
                                       class="form-control">
                            </div>
                            <button class="btn btn-theme btn-large"><i class="fa fa-save"></i>Save Mail Settings
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

