@extends('admin.layouts.layout-basic')
@section('styles')
    <link href="{{asset('assets/admin/twilight.css')}}" rel="stylesheet" type="text/css">
    <style>
        #editor {
            width: 100%;
            height: 500px;
            border: 1px solid #e4eef3;
        }
    </style>
@stop
@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.1/axios.min.js"></script>
    <script type="text/javascript" src="{{asset('assets\admin\ace.js')}}"></script>
    <script>
        new Vue({
            el: "#root",

            mounted: function () {
                var editor = ace.edit("editor");

                editor.commands.addCommand({
                    name: 'saveFile',
                    bindKey: {
                        win: 'Ctrl-S',
                        mac: 'Command-S',
                        sender: 'editor|cli'
                    },
                    exec: function () {
                        var envd = editor.getSession().getValue();

                        axios.post('env/create', {env: envd})
                            .then(function (response) {
                                location.reload();
                            });
                    }
                });
                editor.getSession().setTabSize(4);
                editor.setHighlightActiveLine(true);
                editor.resize();
            },
        });

    </script>
@stop

@section('content')
    <div class="main-content">

        <div class="page-header">
            <h3 class="page-title">Environment</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.setting.environment')}}">Ace Editor</a></li>
            </ol>
        </div>
        <div class="row" id="root">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Environment File
                    </div>
                    <div class="card-block">
                        <pre id="editor">{{$env}}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

