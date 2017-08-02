@extends('admin.layouts.layout-basic')

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Environment</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.settings.environment')}}">Environment</a></li>
            </ol>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <env-editor inline-template>
                            <form method="post" action="{{route('admin.settings.environment.post')}}">
                                {{csrf_field()}}
                                <textarea v-show="false" name="environment" >@{{ textarea }}</textarea>
                                <pre id="environment">{{$env}}</pre>
                                <button class="btn btn-primary btn-large" type="submit">
                                    <i class="icon-fa icon-fa-save"></i>Save
                                </button>
                            </form>
                        </env-editor>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
