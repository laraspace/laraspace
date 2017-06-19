@extends('admin.layouts.layout-basic')
@section('styles')
    <style>
        #editor {
            width: 100%;
            height: 500px;
            border: 1px solid #e4eef3;
        }
    </style>
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
                        <pre id="editor">{{$env}}</pre>
                        <button class="btn btn-theme btn-large" @click="saveEnvFile">
                            <i class="fa fa-save"></i>Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.min.js"></script>
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.js"></script>
    <script>
        new Vue({
            el: "#root",

            data: {
                editor: '',
            },
            mounted: function () {
                this.editor = ace.edit("editor");
            },
            methods: {
                saveEnvFile: function () {
                    var env = this.editor.getSession().getValue();
                    axios.post('env/create', {env: env})
                        .then(function (response) {
                            location.reload();
                        });
                },
            }
        });

    </script>
@stop
