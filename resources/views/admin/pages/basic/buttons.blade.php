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
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                <li class="breadcrumb-item active">Buttons</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>General Buttons</h6>
                    </div>
                    <div class="card-body">
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
                                <button type="button" class="btn btn-outline-theme">Theme</button>
                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                <button type="button" class="btn btn-outline-success">Success</button>
                                <button type="button" class="btn btn-outline-info">Info</button>
                                <button type="button" class="btn btn-outline-warning">Warning</button>
                                <button type="button" class="btn btn-outline-danger">Danger</button>
                            </div>
                        </div>
                        <div class="row mt-4">
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
                        <div class="row mt-4">
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Icon Buttons</h5>

                                <div class="form-group">
                                    <button class="btn btn-theme">
                                        <i class="icon-fa icon-fa-plane"></i> Theme
                                    </button>
                                    <button class="btn btn-primary">
                                        <i class="icon-fa icon-fa-star"></i> Primary
                                    </button>
                                    <button class="btn btn-secondary">
                                        <i class="icon-fa icon-fa-map-marker"></i> Mark
                                    </button>
                                    <button class="btn btn-info">
                                        <i class="icon-fa icon-fa-envelope"></i> Notify
                                    </button>
                                    <button class="btn btn-danger">
                                        <i class="icon-fa icon-fa-trash"></i> Delete
                                    </button>
                                    <button class="btn btn-success">
                                        <i class="icon-fa icon-fa-user"></i> Login
                                    </button>
                                    <button class="btn btn-warning">
                                        <i class="icon-fa icon-fa-warning"></i> Warn
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Pressable Buttons</h5>

                                <div class="form-group">
                                    <button class="btn btn-theme btn-pressable">
                                         Theme
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
                <div class="card">
                    <div class="card-header">
                        <h6>Button Groups</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Variations</h5>

                                <div class="form-group">
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-outline-default">Left</button>
                                        <button type="button" class="btn btn-outline-default">Middle</button>
                                        <button type="button" class="btn btn-outline-default">Right</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-outline-primary">Left</button>
                                        <button type="button" class="btn btn-outline-primary">Middle</button>
                                        <button type="button" class="btn btn-outline-primary">Right</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-outline-danger">Left</button>
                                        <button type="button" class="btn btn-outline-danger">Middle</button>
                                        <button type="button" class="btn btn-outline-danger">Right</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Toolbar</h5>

                                <div class="form-group">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group mr-2" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-outline-default">1</button>
                                            <button type="button" class="btn btn-outline-default">2</button>
                                            <button type="button" class="btn btn-outline-default">3</button>
                                            <button type="button" class="btn btn-outline-default">4</button>
                                        </div>
                                        <div class="btn-group mr-2" role="group" aria-label="Second group">
                                            <button type="button" class="btn btn-outline-default">5</button>
                                            <button type="button" class="btn btn-outline-default">6</button>
                                            <button type="button" class="btn btn-outline-default">7</button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Third group">
                                            <button type="button" class="btn btn-outline-default">8</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-outline-default">1</button>
                                        <button type="button" class="btn btn-outline-default">2</button>

                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-outline-default dropdown-toggle"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
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
                                        <div class="btn-group mr-2" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-icon btn-info"><i
                                                        class="icon-fa icon-fa-align-left"></i></button>
                                            <button type="button" class="btn btn-icon btn-info"><i
                                                        class="icon-fa icon-fa-align-center"></i></button>
                                            <button type="button" class="btn btn-icon btn-info"><i
                                                        class="icon-fa icon-fa-align-right"></i></button>
                                        </div>
                                        <div class="btn-group mr-2" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-icon btn-info"><i
                                                        class="icon-fa icon-fa-bold"></i>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-info"><i
                                                        class="icon-fa icon-fa-italic"></i>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-info"><i
                                                        class="icon-fa icon-fa-underline"></i></button>
                                        </div>
                                        <div class="btn-group mr-2" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-icon btn-outline-info"><i
                                                        class="icon-fa icon-fa-file-image-o"></i></button>
                                            <button type="button" class="btn btn-icon btn-outline-info"><i
                                                        class="icon-fa icon-fa-folder"></i></button>
                                            <button type="button" class="btn btn-icon btn-outline-info"><i
                                                        class="icon-fa icon-fa-pencil"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Vertical Group</h5>

                                <div class="btn-group-vertical" role="group"
                                     aria-label="Button group with nested dropdown">
                                    <button type="button" class="btn btn-outline-primary">1</button>
                                    <button type="button" class="btn btn-outline-primary">2</button>

                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button"
                                                class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            Dropdown
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group-vertical" role="group"
                                     aria-label="Button group with nested dropdown">
                                    <button type="button" class="btn btn-icon btn-outline-primary"><i
                                                class="icon-fa icon-fa-file"></i></button>
                                    <button type="button" class="btn btn-icon btn-outline-primary"><i
                                                class="icon-fa icon-fa-pencil"></i></button>
                                    <button type="button" class="btn btn-icon btn-outline-primary"><i
                                                class="icon-fa icon-fa-image"></i></button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Justified Button Group</h5>

                                <div class="btn-group btn-group-justified">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-primary">
                                            <i class="icon-fa icon-fa-list" aria-hidden="true"></i>
                                            <br>
                                            <span class="text-uppercase hidden-xs">Listing</span>
                                        </button>
                                    </div>

                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-info">
                                            <i class="icon-fa icon-fa-star" aria-hidden="true"></i>
                                            <br>
                                            <span class="text-uppercase hidden-xs">Review</span>
                                        </button>
                                    </div>

                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-success">
                                            <i class="icon-fa icon-fa-rocket" aria-hidden="true"></i>
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
                <div class="card">
                    <div class="card-header">
                        <h6>Ladda Buttons</h6>
                    </div>
                    <div class="card-body ladda-buttons-demo">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Expand</h5>

                                <div class="form-group">
                                    <button class="btn btn-primary ladda-button" data-style="expand-left"><span
                                                class="ladda-label">expand-left</span></button>
                                    <button class="btn btn-primary ladda-button" data-style="expand-right"><span
                                                class="ladda-label">expand-right</span></button>
                                    <button class="btn btn-primary ladda-button" data-style="expand-up"><span
                                                class="ladda-label">expand-up</span></button>
                                    <button class="btn btn-primary ladda-button" data-style="expand-down"><span
                                                class="ladda-label">expand-down</span></button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Zoom</h5>

                                <div class="form-group">
                                    <button class="btn btn-info ladda-button" data-style="zoom-in"><span
                                                class="ladda-label">zoom-in</span></button>
                                    <button class="btn btn-info ladda-button" data-style="zoom-out"><span
                                                class="ladda-label">zoom-out</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Progress Bar</h5>

                                <div class="form-group progress-demo">
                                    <button class="btn btn-warning ladda-button" data-style="expand-left"><span
                                                class="ladda-label">expand-left</span></button>
                                    <button class="btn btn-warning ladda-button" data-style="expand-right"><span
                                                class="ladda-label">expand-right</span></button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Slide</h5>

                                <div class="form-group">
                                    <button class="btn btn-danger ladda-button" data-style="slide-left"><span
                                                class="ladda-label">slide-left</span></button>
                                    <button class="btn btn-danger ladda-button" data-style="slide-right"><span
                                                class="ladda-label">slide-right</span></button>
                                    <button class="btn btn-danger ladda-button" data-style="slide-up"><span
                                                class="ladda-label">slide-up</span></button>
                                    <button class="btn btn-danger ladda-button" data-style="slide-down"><span
                                                class="ladda-label">slide-down</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
