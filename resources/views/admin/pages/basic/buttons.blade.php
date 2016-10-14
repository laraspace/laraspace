@extends('admin.layouts.layout-basic')

@section('scripts')
    <script>
        // Ladda Buttons
        Ladda.bind( 'div:not(.progress-demo) .ladda-button', { timeout: 2000 } );

        // Bind progress buttons and simulate loading progress
        Ladda.bind( '.progress-demo button', {
            callback: function( instance ) {
                var progress = 0;
                var interval = setInterval( function() {
                    progress = Math.min( progress + Math.random() * 0.1, 1 );
                    instance.setProgress( progress );

                    if( progress === 1 ) {
                        instance.stop();
                        clearInterval( interval );
                    }
                }, 200 );
            }
        } );
    </script>
@stop

@section('content')
    <div class="main-content buttons-demo">
        <div class="page-header">
            <h3 class="page-title">Buttons</h3>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">UI Elements</a></li>
                <li class="active">Buttons</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>General Buttons</h5>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <h5 class="section-semi-title">Default Buttons</h5>
                                    <button class="btn btn-theme">
                                        Theme
                                    </button>
                                    <button class="btn btn-primary">
                                        Primary
                                    </button>
                                    <button class="btn btn-secondary">
                                        Secondary
                                    </button>
                                    <button class="btn btn-info">
                                        Info
                                    </button>
                                    <button class="btn btn-danger">
                                        Danger
                                    </button>
                                    <button class="btn btn-success">
                                        Success
                                    </button>
                                    <button class="btn btn-warning">
                                        Warning
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Outline Buttons</h5>
                                <button type="button" class="btn btn-theme-outline">Theme</button>
                                <button type="button" class="btn btn-primary-outline">Primary</button>
                                <button type="button" class="btn btn-secondary-outline">Secondary</button>
                                <button type="button" class="btn btn-success-outline">Success</button>
                                <button type="button" class="btn btn-info-outline">Info</button>
                                <button type="button" class="btn btn-warning-outline">Warning</button>
                                <button type="button" class="btn btn-danger-outline">Danger</button>
                            </div>
                        </div>
                        <div class="row m-t-2">
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Sizes</h5>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-xs">
                                        Extra Small
                                    </button>
                                    <button class="btn btn-primary btn-sm">
                                        Small
                                    </button>
                                    <button class="btn btn-primary">
                                        Default
                                    </button>
                                    <button class="btn btn-primary btn-lg">
                                        Large
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Rounded Buttons</h5>
                                <div class="form-group">
                                    <button class="btn btn-theme btn-rounded">
                                        Theme
                                    </button>
                                    <button class="btn btn-primary btn-rounded">
                                        Primary
                                    </button>
                                    <button class="btn btn-secondary btn-rounded">
                                        Secondary
                                    </button>
                                    <button class="btn btn-info btn-rounded">
                                        Info
                                    </button>
                                    <button class="btn btn-danger btn-rounded">
                                        Danger
                                    </button>
                                    <button class="btn btn-success btn-rounded">
                                        Success
                                    </button>
                                    <button class="btn btn-warning btn-rounded">
                                        Warning
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-2">
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Icon Buttons</h5>
                                <div class="form-group">
                                    <button class="btn btn-theme">
                                        <i class="fa fa-plane"></i> Theme
                                    </button>
                                    <button class="btn btn-primary">
                                        <i class="fa fa-star"></i> Primary
                                    </button>
                                    <button class="btn btn-secondary">
                                        <i class="fa fa-map-marker"></i>  Mark
                                    </button>
                                    <button class="btn btn-info">
                                        <i class="fa fa-envelope"></i> Notify
                                    </button>
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                    <button class="btn btn-success">
                                        <i class="fa fa-user"></i> Login
                                    </button>
                                    <button class="btn btn-warning">
                                        <i class="fa fa-warning"></i> Warn
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Pressable Buttons</h5>
                                <div class="form-group">
                                    <button class="btn btn-theme btn-pressable">
                                        <i class="fa fa-plane"></i> Theme
                                    </button>
                                    <button class="btn btn-primary btn-pressable">
                                        Primary
                                    </button>
                                    <button class="btn btn-secondary btn-pressable">
                                        Secondary
                                    </button>
                                    <button class="btn btn-info btn-pressable">
                                        Info
                                    </button>
                                    <button class="btn btn-danger btn-pressable">
                                        Danger
                                    </button>
                                    <button class="btn btn-success btn-pressable">
                                        Success
                                    </button>
                                    <button class="btn btn-warning btn-pressable">
                                        Warning
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card m-t-2">
                    <div class="card-header">
                        <h5>Button Groups</h5>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Variations</h5>
                                <div class="form-group">
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-default-outline">Left</button>
                                        <button type="button" class="btn btn-default-outline">Middle</button>
                                        <button type="button" class="btn btn-default-outline">Right</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary-outline">Left</button>
                                        <button type="button" class="btn btn-primary-outline">Middle</button>
                                        <button type="button" class="btn btn-primary-outline">Right</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-danger-outline">Left</button>
                                        <button type="button" class="btn btn-danger-outline">Middle</button>
                                        <button type="button" class="btn btn-danger-outline">Right</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Toolbar</h5>
                                <div class="form-group">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-default-outline">1</button>
                                            <button type="button" class="btn btn-default-outline">2</button>
                                            <button type="button" class="btn btn-default-outline">3</button>
                                            <button type="button" class="btn btn-default-outline">4</button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Second group">
                                            <button type="button" class="btn btn-default-outline">5</button>
                                            <button type="button" class="btn btn-default-outline">6</button>
                                            <button type="button" class="btn btn-default-outline">7</button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Third group">
                                            <button type="button" class="btn btn-default-outline">8</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-default-outline">1</button>
                                        <button type="button" class="btn btn-default-outline">2</button>

                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-default-outline dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-icon btn-info"><i class="fa fa-align-left"></i></button>
                                            <button type="button" class="btn btn-icon btn-info"><i class="fa fa-align-center"></i></button>
                                            <button type="button" class="btn btn-icon btn-info"><i class="fa fa-align-right"></i></button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-icon btn-info"><i class="fa fa-bold"></i></button>
                                            <button type="button" class="btn btn-icon btn-info"><i class="fa fa-italic"></i></button>
                                            <button type="button" class="btn btn-icon btn-info"><i class="fa fa-underline"></i></button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-icon btn-info-outline"><i class="fa fa-file-image-o"></i></button>
                                            <button type="button" class="btn btn-icon btn-info-outline"><i class="fa fa-folder"></i></button>
                                            <button type="button" class="btn btn-icon btn-info-outline"><i class="fa fa-pencil"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row m-t-3">
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Vertical Group</h5>
                                <div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
                                    <button type="button" class="btn btn-primary-outline">1</button>
                                    <button type="button" class="btn btn-primary-outline">2</button>

                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary-outline dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropdown
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
                                    <button type="button" class="btn btn-icon btn-primary-outline"><i class="fa fa-file"></i></button>
                                    <button type="button" class="btn btn-icon btn-primary-outline"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-icon btn-primary-outline"><i class="fa fa-image"></i></button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Justified Button Group</h5>
                                <div class="btn-group btn-group-justified">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            <br>
                                            <span class="text-uppercase hidden-xs">Listing</span>
                                        </button>
                                    </div>

                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-info">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <br>
                                            <span class="text-uppercase hidden-xs">Review</span>
                                        </button>
                                    </div>

                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-success">
                                            <i class="fa fa-rocket" aria-hidden="true"></i>
                                            <br>
                                            <span class="text-uppercase hidden-xs">Details</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card m-t-2">
                    <div class="card-header">
                        <h5>Ladda Buttons</h5>
                    </div>
                    <div class="card-block ladda-buttons-demo">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Expand</h5>
                                <div class="form-group">
                                    <button class="btn btn-primary ladda-button" data-style="expand-left"><span class="ladda-label">expand-left</span></button>
                                    <button class="btn btn-primary ladda-button" data-style="expand-right"><span class="ladda-label">expand-right</span></button>
                                    <button class="btn btn-primary ladda-button" data-style="expand-up"><span class="ladda-label">expand-up</span></button>
                                    <button class="btn btn-primary ladda-button" data-style="expand-down"><span class="ladda-label">expand-down</span></button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Zoom</h5>
                                <div class="form-group">
                                    <button class="btn btn-info ladda-button" data-style="zoom-in"><span class="ladda-label">zoom-in</span></button>
                                    <button class="btn btn-info ladda-button" data-style="zoom-out"><span class="ladda-label">zoom-out</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Progress Bar</h5>
                                <div class="form-group progress-demo">
                                    <button class="btn btn-warning ladda-button" data-style="expand-left"><span class="ladda-label">expand-left</span></button>
                                    <button class="btn btn-warning ladda-button" data-style="expand-right"><span class="ladda-label">expand-right</span></button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Slide</h5>
                                <div class="form-group">
                                    <button class="btn btn-danger ladda-button" data-style="slide-left"><span class="ladda-label">slide-left</span></button>
                                    <button class="btn btn-danger ladda-button" data-style="slide-right"><span class="ladda-label">slide-right</span></button>
                                    <button class="btn btn-danger ladda-button" data-style="slide-up"><span class="ladda-label">slide-up</span></button>
                                    <button class="btn btn-danger ladda-button" data-style="slide-down"><span class="ladda-label">slide-down</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
