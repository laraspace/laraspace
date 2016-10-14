@extends('admin.layouts.layout-basic')

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Cards</h3>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Basic UI</a></li>
                <li class="active">Cards</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-block">
                <h4>Basic Cards</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-block">
                                <h5>Default Card</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero voluptatum!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Card with header</h5>
                            </div>
                            <div class="card-block">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero voluptatum!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-block">
                                <h5>Card with Footer</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, molestias.</p>
                            </div>
                            <div class="card-footer">
                                Card footer
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="fa fa-star"></i> Card With Icon</h5>
                            </div>
                            <div class="card-block">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero voluptatum!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="m-t-2">Colorful Header</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h5><i class="fa fa-star"></i> Primary</h5>
                            </div>
                            <div class="card-block">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero voluptatum!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h5><i class="fa fa-info"></i> Info</h5>
                            </div>
                            <div class="card-block">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero voluptatum!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-danger">
                                <h5><i class="fa fa-ambulance"></i> Danger</h5>
                            </div>
                            <div class="card-block">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero voluptatum!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <h5><i class="fa fa-warning"></i> Warning</h5>
                            </div>
                            <div class="card-block">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero voluptatum!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-success">
                                <h5><i class="fa fa-check"></i> Success</h5>
                            </div>
                            <div class="card-block">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero voluptatum!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <h5><i class="fa fa-cube"></i> Dark</h5>
                            </div>
                            <div class="card-block">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero voluptatum!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="m-t-2">Background Inverse</h4>
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-inverse card-primary text-xs-center">
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-inverse card-success text-xs-center">
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-inverse card-info text-xs-center">
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-inverse card-warning text-xs-center">
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-inverse card-danger text-xs-center">
                            <div class="card-block">
                                <blockquote class="card-blockquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
