@extends('admin.layouts.layout-basic')

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Settings</h3>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li><a href="{{route('admin.settings.index')}}">Settings</a></li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>Easy Site Settings API</h3>
            </div>
            <div class="card-block">
                <p>Laraspace provides easy way to store and retrieve your Site Settings</p>
                <p><code>Setting::setSetting('key','value')</code></p>
                <p><code>Setting::getSetting('key')</code></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Example Social Settings</h3>
                    </div>
                    <div class="card-block">
                        <form action="{{route('admin.settings.social')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label">Facebook Page URL</label>
                                    <div class="col-md-10">
                                        <div class="input-icon">
                                            <i class="fa fa-facebook"></i>
                                            <input type="text" class="form-control" name="facebook" value="{{get_setting('facebook')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label">Google Plus URL</label>
                                    <div class="col-md-10">
                                        <div class="input-icon">
                                            <i class="fa fa-google-plus"></i>
                                            <input type="text" class="form-control" name="google" value="{{get_setting('google')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label">Twitter URL</label>
                                    <div class="col-md-10">
                                        <div class="input-icon">
                                            <i class="fa fa-twitter"></i>
                                            <input type="text" class="form-control" name="twitter" value="{{get_setting('twitter')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
