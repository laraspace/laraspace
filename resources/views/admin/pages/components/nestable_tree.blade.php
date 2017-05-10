@extends('admin.layouts.layout-basic')

@section('scripts')
    <script>
        //js for container 1
        $('#container').jstree();

        //js for Tree With Drag & Drop
        $('#container2').jstree({
            "core" : { "check_callback" : true }, // so that operations work
            "plugins" : ["dnd"]
        });

        // js for Tree With SearchBox
        $('#container3').jstree({
            "plugins" : ["search"]
        });
        $("#s").submit(function(e) {
            e.preventDefault();
            $("#container").jstree(true).search($("#q").val());
        });

        //js for With Icons
        $('#container4').jstree({
            "types" : {
                "default" : {
                    "icon" : "fa fa-user"
                },
                "demo" : {
                    "icon" : "fa fa-users"
                }
            },
            "plugins" : ["types"]
        });
    </script>
@stop
@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Nestable Tree</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.components.nestable_tree') }}">Components</a></li>
                <li class="breadcrumb-item active">Nestable Tree</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6>Default Tree</h6>
                    </div>
                    <div class="card-block">
                        <div id="container">
                            <ul>
                                <li data-jstree='{"opened":true}'>Root node
                                    <ul>
                                        <li>Child node 1</li>
                                        <li>Child node 2</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6>Tree With Drag & Drop</h6>
                    </div>
                    <div class="card-block">
                        <div id="container2">
                            <ul>
                                <li data-jstree='{"opened":true}'>Root node
                                    <ul>
                                        <li>Child node 1</li>
                                        <li>Child node 2</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6>Tree With SearchBox</h6>
                    </div>
                    <div class="card-block">
                        <form id="s">
                            <input type="search" id="q" class="form-control"/><br>
                            <button type="submit" class="btn btn-default">Search</button>
                        </form><br />
                        <div id="container3">
                            <ul>
                                <li data-jstree='{"opened":true}'>Root node
                                    <ul>
                                        <li>Child node 1</li>
                                        <li>Child node 2</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6>With Icons</h6>
                    </div>
                    <div class="card-block">
                        <div id="container4">
                            <ul>
                                <li data-jstree='{"opened":true, "type":"demo"}'>Root node
                                    <ul>
                                        <li>b</li>
                                        <li>a</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop