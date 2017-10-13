@extends('admin.layouts.layout-basic')

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Cards</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Basic UI</a></li>
                <li class="breadcrumb-item active">Cards</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-body">
                <h4>Basic Cards</h4>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5>Default Card</h5>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero
                                    voluptatum!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Card with header</h5>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero
                                    voluptatum!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
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
                                <h6><i class="icon-fa icon-fa-star"></i> Card With Icon</h6>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero
                                    voluptatum!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="mt-4">Card With Actions</h4>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="caption">
                                    <h6>Card with Button Actions</h6>
                                </div>
                                <div class="actions">
                                    <button class="btn btn-primary btn-sm"> <i class="icon-fa icon-fa-plus"></i> Add New</button>
                                    <button class="btn btn-danger btn-sm"> <i class="icon-fa icon-fa-trash"></i> Delete</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero voluptatum!</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="caption">
                                    <h6>Card with Dropdown Button</h6>
                                </div>
                                <div class="actions">
                                    <div class="btn-group" role="group">
                                        <button id="cardDropButton" type="button" class="btn btn-sm btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Filters
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="cardDropButton">
                                            <a class="dropdown-item" href="#">Update</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero voluptatum!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="mt-4">Colorful Header</h4>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h6><i class="icon-fa icon-fa-star"></i> Primary</h6>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero
                                    voluptatum!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h6><i class="icon-fa icon-fa-info"></i> Info</h6>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero
                                    voluptatum!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-danger">
                                <h6><i class="icon-fa icon-fa-ambulance"></i> Danger</h6>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero
                                    voluptatum!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <h6><i class="icon-fa icon-fa-warning"></i> Warning</h6>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero
                                    voluptatum!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-success">
                                <h6><i class="icon-fa icon-fa-check"></i> Success</h6>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero
                                    voluptatum!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <h6><i class="icon-fa icon-fa-cube"></i> Dark</h6>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Alias enim excepturi exercitationem ipsum labore provident quam ut velit vero
                                    voluptatum!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="mt-4">Background Inverse</h4>

                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-primary text-xs-center">
                            <div class="card-body">
                                <blockquote class="card-bodyquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                        ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-success text-xs-center">
                            <div class="card-body">
                                <blockquote class="card-bodyquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                        ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-info text-xs-center">
                            <div class="card-body">
                                <blockquote class="card-bodyquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                        ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-warning text-xs-center">
                            <div class="card-body">
                                <blockquote class="card-bodyquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                        ante.</p>
                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-danger text-xs-center">
                            <div class="card-body">
                                <blockquote class="card-bodyquote">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                        ante.</p>
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
