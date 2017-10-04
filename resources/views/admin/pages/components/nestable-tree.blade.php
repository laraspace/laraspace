@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="{{asset('/assets/admin/js/pages/nestable/tree.js')}}"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Nestable Tree</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.components.nestableTree') }}">Components</a></li>
                <li class="breadcrumb-item active">Nestable Tree</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6>Default Tree</h6>
                    </div>
                    <div class="card-body">
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
                    <div class="card-body">
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
                    <div class="card-body">
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
                    <div class="card-body">
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