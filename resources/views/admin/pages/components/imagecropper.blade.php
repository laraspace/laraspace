@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="{{asset('assets/admin/js/pages/imagecropper.js')}}"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Image Cropper</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.components.imagecropper')}}">Components</a></li>
                <li class="breadcrumb-item active">Image Croppers</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="image-cropper">
                            <div class="row">
                                <div class="col-8 img-cropper-col">
                                    <!-- Demo -->
                                    <div class="img-container">
                                        <img id="image" src="{{asset('assets/admin/img/avatars/avatar-lg.png')}}"
                                             alt="Picture">
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Preview -->
                                    <div class="docs-preview clearfix">
                                        <div class="img-preview preview-lg"></div>
                                        <div class="img-preview preview-md"></div>
                                        <div class="img-preview preview-sm"></div>
                                        <div class="img-preview preview-xs"></div>
                                    </div>

                                    <!-- Data -->
                                    <div class="docs-data">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" for="dataX">X</span>
                                            </div>
                                            <input type="text" class="form-control" id="dataX" placeholder="x">
                                            <div class="input-group-append">
                                                <span class="input-group-text">px</span>
                                            </div>
                                        </div>
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" for="dataY">Y</span>
                                            </div>
                                            <input type="text" class="form-control" id="dataY" placeholder="y">
                                            <div class="input-group-append">
                                                <span class="input-group-text">px</span>
                                            </div>
                                        </div>
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" for="dataWidth">Width</span>
                                            </div>
                                            <input type="text" class="form-control" id="dataWidth" placeholder="width">
                                            <div class="input-group-append">
                                                <span class="input-group-text">px</span>
                                            </div>
                                        </div>
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" for="dataHeight">Height</span>
                                            </div>
                                            <input type="text" class="form-control" id="dataHeight"
                                                   placeholder="height">
                                            <div class="input-group-append">
                                                <span class="input-group-text">px</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-set">
                                <div class="row">
                                    <div class="col docs-buttons">
                                        <h5 class="section-semi-title">Modes:</h5>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="setDragMode"
                                                    data-option="move" title="Move">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)"> <span
                                                        class="icon-fa icon-fa-arrows"></span>
                                            </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="setDragMode"
                                                    data-option="crop" title="Crop">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)"> <span
                                                        class="icon-fa icon-fa-crop"></span>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="zoom"
                                                    data-option="0.1" title="Zoom In">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;zoom&quot;, 0.1)"> <span
                                                        class="icon-fa icon-fa-search-plus"></span>
                                            </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="zoom"
                                                    data-option="-0.1" title="Zoom Out">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;zoom&quot;, -0.1)"> <span
                                                        class="icon-fa icon-fa-search-minus"></span>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <label class="btn btn-primary btn-upload" for="inputImage"
                                                   title="Upload image file">
                                                <input type="file" class="sr-only" id="inputImage" name="file"
                                                       accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                                <span class="docs-tooltip" data-toggle="tooltip"
                                                      title="Import image with Blob URLs">
                                                    <span class="icon-fa icon-fa-upload"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col docs-buttons">
                                        <h5 class="section-semi-title">Transform:</h5>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="move"
                                                    data-option="-10" data-second-option="0" title="Move Left">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;move&quot;, -10, 0)"> <span
                                                        class="icon-fa icon-fa-arrow-left"></span>
                                            </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="move"
                                                    data-option="10" data-second-option="0" title="Move Right">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;move&quot;, 10, 0)"> <span
                                                        class="icon-fa icon-fa-arrow-right"></span>
                                            </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="move"
                                                    data-option="0" data-second-option="-10" title="Move Up">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;move&quot;, 0, -10)"> <span
                                                        class="icon-fa icon-fa-arrow-up"></span>
                                            </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="move"
                                                    data-option="0" data-second-option="10" title="Move Down">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;move&quot;, 0, 10)"> <span
                                                        class="icon-fa icon-fa-arrow-down"></span>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="rotate"
                                                    data-option="-45" title="Rotate Left">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;rotate&quot;, -45)">
                                                <span class="icon-fa icon-fa-rotate-left"></span>
                                            </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="rotate"
                                                    data-option="45" title="Rotate Right">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;rotate&quot;, 45)">
                                                <span class="icon-fa icon-fa-rotate-right"></span>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="scaleX"
                                                    data-option="-1" title="Flip Horizontal">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;scaleX&quot;, -1)">
                                                <span class="icon-fa icon-fa-arrows-h"></span>
                                            </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="scaleY"
                                                    data-option="-1" title="Flip Vertical">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;scaleY&quot;, -1)">
                                              <span class="icon-fa icon-fa-arrows-v"></span>
                                            </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col docs-buttons">
                                        <h5 class="section-semi-title">Reset Plugins:</h5>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="crop"
                                                    title="Crop">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;crop&quot;)">
                                              <span class="icon-fa icon-fa-check"></span>
                                            </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="clear"
                                                    title="Clear">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;clear&quot;)">
                                              <span class="icon-fa icon-fa-remove"></span>
                                            </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="disable"
                                                    title="Disable">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;disable&quot;)">
                                              <span class="icon-fa icon-fa-lock"></span>
                                            </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="enable"
                                                    title="Enable">
                                        <span class="docs-tooltip" data-toggle="tooltip"
                                              title="$().cropper(&quot;enable&quot;)">
                                            <span class="icon-fa icon-fa-unlock"></span>
                                        </span>
                                            </button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary" data-method="reset"
                                                    title="Reset">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;reset&quot;)">
                                                <span class="icon-fa icon-fa-refresh"></span>
                                            </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="destroy"
                                                    title="Destroy">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;destroy&quot;)">
                                                <span class="icon-fa icon-fa-power-off"></span>
                                            </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col docs-buttons">
                                        <h5 class="section-semi-title">Get Canvas:</h5>
                                        <div class="btn-group btn-group-crop">
                                            <button type="button" class="btn btn-primary"
                                                    data-method="getCroppedCanvas">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;getCroppedCanvas&quot;)">
                                                  Get Cropped Canvas
                                            </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="getCroppedCanvas"
                                                    data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;getCroppedCanvas&quot;,
                                                   { width: 160, height: 90 })">
                                                160&times;90
                                            </span>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-method="getCroppedCanvas"
                                                    data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;getCroppedCanvas&quot;,
                                                   { width: 320, height: 180 })">
                                                320&times;180
                                            </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col docs-toggles">
                                        <h5 class="section-semi-title">Aspect Ratio:</h5>
                                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio"
                                                       value="1.7777777777777777">
                                                <span class="docs-tooltip" data-toggle="tooltip"
                                                      title="aspectRatio: 16 / 9">
                                                16:9
                                            </span>
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio"
                                                       value="1.3333333333333333">
                                                <span class="docs-tooltip" data-toggle="tooltip"
                                                      title="aspectRatio: 4 / 3">
                                                4:3
                                            </span>
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio"
                                                       value="1">
                                                <span class="docs-tooltip" data-toggle="tooltip"
                                                      title="aspectRatio: 1 / 1">
                                                1:1
                                            </span>
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio"
                                                       value="0.6666666666666666">
                                                <span class="docs-tooltip" data-toggle="tooltip"
                                                      title="aspectRatio: 2 / 3">
                                                2:3
                                            </span>
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio"
                                                       value="NaN">
                                                <span class="docs-tooltip" data-toggle="tooltip"
                                                      title="aspectRatio: NaN">
                                                Free
                                            </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col docs-toggles">
                                        <h5 class="section-semi-title">View Modes:</h5>
                                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <input type="radio" class="sr-only" id="viewMode0" name="viewMode"
                                                       value="0"
                                                       checked>
                                                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
                                                VM0
                                            </span>
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" class="sr-only" id="viewMode1" name="viewMode"
                                                       value="1">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
                                                VM1
                                            </span>
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" class="sr-only" id="viewMode2" name="viewMode"
                                                       value="2">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2">
                                                VM2
                                            </span>
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" class="sr-only" id="viewMode3" name="viewMode"
                                                       value="3">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3">
                                              VM3
                                            </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Show the cropped image in modal -->
                                <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true"
                                     aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">
                                                    &times;
                                                </button>
                                            </div>
                                            <div class="modal-body"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                                </button>
                                                <a class="btn btn-primary" id="download" href="javascript:void(0);"
                                                   download="cropped.jpg">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.modal -->
                                <h5 class="section-semi-title">Get Data:</h5>
                                <div class="row">
                                    <div class="col-xl-4 docs-buttons">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-primary"
                                                        data-method="setData" data-target="#putData1">
                                              <span class="docs-tooltip" data-toggle="tooltip"
                                                    title="$().cropper(&quot;setData&quot;, data)">
                                                Set Data
                                              </span>
                                                </button>
                                            </div>
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-primary "
                                                        data-method="getData" data-option data-target="#putData1">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;getData&quot;)">
                                                Get Data
                                            </span>
                                                </button>
                                            </div>
                                            <input type="text" class="form-control" id="putData1"
                                                   placeholder="Get data ">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 docs-buttons">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-primary input-group-addon"
                                                        data-method="getImageData" data-option data-target="#putData2">
                                             <span class="docs-tooltip" data-toggle="tooltip"
                                                   title="$().cropper(&quot;getImageData&quot;)">
                                                Get Image Data
                                            </span>
                                                </button>
                                            </div>
                                            <input type="text" class="form-control" id="putData2"
                                                   placeholder="Get data ">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 docs-buttons">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-primary input-group-addon"
                                                        data-method="getContainerData" data-option
                                                        data-target="#putData3">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;getContainerData&quot;)">
                                                Get Container Data
                                            </span>
                                                </button>
                                            </div>
                                            <input type="text" class="form-control" id="putData3"
                                                   placeholder="Get data ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 docs-buttons">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-primary  input-group-addon"
                                                        data-method="getCanvasData" data-option data-target="#putData4">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;getCanvasData&quot;)">
                                                Get Canvas Data
                                            </span>
                                                </button>
                                            </div>
                                            <input type="text" class="form-control" id="putData4"
                                                   placeholder="Get data ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 docs-buttons">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-primary input-group-addon"
                                                        data-method="getCropBoxData" data-option
                                                        data-target="#putData5">
                                            <span class="docs-tooltip" data-toggle="tooltip"
                                                  title="$().cropper(&quot;getCropBoxData&quot;)">
                                                Get Crop Box Data
                                            </span>
                                                </button>
                                            </div>
                                            <input type="text" class="form-control" id="putData5"
                                                   placeholder="Get data ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
