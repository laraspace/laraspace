@extends('admin.layouts.layout-basic')
@section('styles')
    <style>
        img {
            max-width: 100%; /* This rule is very important, please do not ignore this! */
        }
    </style>
@stop
@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Image Cropper</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.components.graphs')}}">Components</a></li>
                <li class="breadcrumb-item active">Image Croppers</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="img-container">
                                    <img id="image" src="{{asset('assets/admin/img/avatars/avatar-lg.png')}}"
                                         alt="Picture">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="docs-preview clearfix">
                                    <div class="img-preview preview-lg"></div>
                                    <div class="img-preview preview-md"></div>
                                    <div class="img-preview preview-sm"></div>
                                    <div class="img-preview preview-xs"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 docs-buttons">
                                <!-- <h3>Toolbar:</h3> -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" data-method="setDragMode"
                                            data-option="move" title="Move">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
                                          <span class="fa fa-arrows"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="setDragMode"
                                            data-option="crop" title="Crop">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                                          <span class="fa fa-crop"></span>
                                        </span>
                                    </button>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1"
                                            title="Zoom In">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;zoom&quot;, 0.1)">
                                          <span class="fa fa-search-plus"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1"
                                            title="Zoom Out">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;zoom&quot;, -0.1)">
                                          <span class="fa fa-search-minus"></span>
                                        </span>
                                    </button>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" data-method="move" data-option="-10"
                                            data-second-option="0" title="Move Left">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;move&quot;, -10, 0)">
                                          <span class="fa fa-arrow-left"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="move" data-option="10"
                                            data-second-option="0" title="Move Right">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;move&quot;, 10, 0)">
                                          <span class="fa fa-arrow-right"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="move" data-option="0"
                                            data-second-option="-10" title="Move Up">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;move&quot;, 0, -10)">
                                          <span class="fa fa-arrow-up"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="move" data-option="0"
                                            data-second-option="10" title="Move Down">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;move&quot;, 0, 10)">
                                          <span class="fa fa-arrow-down"></span>
                                        </span>
                                    </button>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45"
                                            title="Rotate Left">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;rotate&quot;, -45)">
                                          <span class="fa fa-rotate-left"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="rotate" data-option="45"
                                            title="Rotate Right">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;rotate&quot;, 45)">
                                          <span class="fa fa-rotate-right"></span>
                                        </span>
                                    </button>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1"
                                            title="Flip Horizontal">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;scaleX&quot;, -1)">
                                          <span class="fa fa-arrows-h"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1"
                                            title="Flip Vertical">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;scaleY&quot;, -1)">
                                            <span class="fa fa-arrows-v"></span>
                                        </span>
                                    </button>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" data-method="crop" title="Crop">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;crop&quot;)">
                                          <span class="fa fa-check"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="clear" title="Clear">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;clear&quot;)">
                                          <span class="fa fa-remove"></span>
                                        </span>
                                    </button>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" data-method="disable" title="Disable">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;disable&quot;)">
                                          <span class="fa fa-lock"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="enable" title="Enable">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;enable&quot;)">
                                          <span class="fa fa-unlock"></span>
                                        </span>
                                    </button>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;reset&quot;)">
                                          <span class="fa fa-refresh"></span>
                                        </span>
                                    </button>
                                    <label class="btn btn-primary btn-upload" for="inputImage"
                                           title="Upload image file">
                                        <input type="file" class="sr-only" id="inputImage" name="file"
                                               accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                        <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob
                                        URLs">
                                          <span class="fa fa-upload"></span>
                                        </span>
                                    </label>
                                    <button type="button" class="btn btn-primary" data-method="destroy" title="Destroy">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;destroy&quot;)">
                                          <span class="fa fa-power-off"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="btn-group btn-group-crop">
                                    <button type="button" class="btn btn-primary" data-method="getCroppedCanvas">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;getCroppedCanvas&quot;)">
                                          Get Cropped Canvas
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="getCroppedCanvas"
                                            data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
                                          160&times;90
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary" data-method="getCroppedCanvas"
                                            data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
                                          320&times;180
                                        </span>
                                    </button>
                                </div>

                                <!-- Show the cropped image in modal -->
                                <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true"
                                     aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;
                                                </button>
                                                <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
                                            </div>
                                            <div class="modal-body"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <a class="btn btn-primary" id="download" href="javascript:void(0);"
                                                   download="cropped.jpg">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.modal -->

                                <button type="button" class="btn btn-primary" data-method="getData" data-option
                                        data-target="#putData">
                                  <span class="docs-tooltip" data-toggle="tooltip"
                                        title="$().cropper(&quot;getData&quot;)">
                                    Get Data
                                  </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="setData"
                                        data-target="#putData">
                                  <span class="docs-tooltip" data-toggle="tooltip"
                                        title="$().cropper(&quot;setData&quot;, data)">
                                    Set Data
                                  </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="getContainerData" data-option
                                        data-target="#putData">
                                  <span class="docs-tooltip" data-toggle="tooltip"
                                        title="$().cropper(&quot;getContainerData&quot;)">
                                    Get Container Data
                                  </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="getImageData" data-option
                                        data-target="#putData">
                                  <span class="docs-tooltip" data-toggle="tooltip"
                                        title="$().cropper(&quot;getImageData&quot;)">
                                    Get Image Data
                                  </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="getCanvasData" data-option
                                        data-target="#putData">
                                  <span class="docs-tooltip" data-toggle="tooltip"
                                        title="$().cropper(&quot;getCanvasData&quot;)">
                                    Get Canvas Data
                                  </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="setCanvasData"
                                        data-target="#putData">
                                  <span class="docs-tooltip" data-toggle="tooltip"
                                        title="$().cropper(&quot;setCanvasData&quot;, data)">
                                    Set Canvas Data
                                  </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="getCropBoxData" data-option
                                        data-target="#putData">
                                  <span class="docs-tooltip" data-toggle="tooltip"
                                        title="$().cropper(&quot;getCropBoxData&quot;)">
                                    Get Crop Box Data
                                  </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="setCropBoxData"
                                        data-target="#putData">
                                  <span class="docs-tooltip" data-toggle="tooltip"
                                        title="$().cropper(&quot;setCropBoxData&quot;, data)">
                                    Set Crop Box Data
                                  </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="moveTo" data-option="0">
                                  <span class="docs-tooltip" data-toggle="tooltip" title="cropper.moveTo(0)">
                                    0,0
                                  </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="zoomTo" data-option="1">
                                  <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoomTo(1)">
                                    100%
                                  </span>
                                </button>
                                <button type="button" class="btn btn-primary" data-method="rotateTo" data-option="180">
                                  <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotateTo(180)">
                                    180°
                                  </span>
                                </button>
                                <input type="text" class="form-control" id="putData"
                                       placeholder="Get data to here or set data with this value">
                            </div><!-- /.docs-buttons -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
@section('scripts')

    <script type="text/javascript" src="{{asset('assets/admin/js/pages/imagecropper.js')}}"></script>
@stop