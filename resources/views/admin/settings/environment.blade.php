@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="{{asset('assets/admin/js/settings/environment.js')}}"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Environment</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.setting.environment')}}">Environment</a></li>
            </ol>
        </div>
        <div class="row" id="root">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <form method="post" action="{{route('admin.setting.environment.create')}}">
                            {{csrf_field()}}
                            <textarea name="environment"></textarea>
                            <pre id="environment">{{$env}}</pre>
                            <button class="btn btn-primary btn-large" type="submit">
                                <i class="icon-fa icon-fa-save"></i>Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
