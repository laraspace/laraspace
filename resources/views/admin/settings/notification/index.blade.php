@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="/assets/js/users/users.js"></script>
    <script src="/assets/js/multidelete.js"></script>
@stop

@section('content')
    <div class="main-content">

        <div class="page-header">
            <h3 class="page-title">Notification</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.notification.index')}}">Notification</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-block">
                        <form method="post" action="{{route('admin.notification.create')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>To Mail</label>
                                <input type="text" name="notify_mail" class="form-control"
                                       value="{{ get_setting('notify_mail') }}">
                            </div>
                            <button class="btn btn-theme btn-large"><i class="fa fa-save"></i>Save Notification Mail
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
