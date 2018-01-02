@extends('admin.layouts.layout-basic')

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Progress Bar</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Basic UI</a></li>
                <li class="breadcrumb-item active">Progress Bar</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Basic Progress Bars</div>
                    <div class="card-body">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                 aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50"
                                 aria-valuemin="0"
                                 aria-valuemax="100">50%
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                                 aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                 aria-valuemin="0" aria-valuemax="100">100%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Progress Bars Colored</div>
                    <div class="card-body">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                 aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Multiple Progress Bars</div>
            <div class="card-body">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                         aria-valuemax="100"></div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30"
                         aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Height</div>
            <div class="card-body">
                <div class="progress" style="height: 1px;">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress" style="height: 20px;">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Striped Progress Bars</div>
            <div class="card-body">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%"
                         aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%"
                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%"
                         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%"
                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%"
                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Animated stripes Progress Bars</div>
            <div class="card-body">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                         style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar"
                         style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar"
                         style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar"
                         style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar"
                         style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
@stop
