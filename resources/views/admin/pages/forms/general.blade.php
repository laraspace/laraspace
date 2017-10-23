@extends('admin.layouts.layout-basic')

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">General Elements</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active">General Elements</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Basic Inputs</h6>
                    </div>
                    <div class="card-body">
                        <h5 class="section-semi-title">Horizontal</h5>

                        <form>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>

                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3"
                                           placeholder="Password">
                                </div>
                            </div>
                        </form>
                        <h5 class="section-semi-title mt-4">Vertical</h5>

                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Example multiple select</label>
                                <select multiple class="form-control" id="exampleFormControlSelect2">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Example file input</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                <small class="text-muted">This is some placeholder block-level help text for the above
                                    input. It's a bit lighter and easily wraps to a new line.
                                </small>
                            </div>
                        </form>

                        <h5 class="section-semi-title mt-4">
                            Validation States
                        </h5>
                        <form class="was-validated">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault01">First name</label>
                                    <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">Last name</label>
                                    <input type="text" class="form-control" id="validationDefault03" placeholder="Last name" required>
                                    <div class="invalid-feedback">
                                        Please provide Last name.
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form class="was-validated">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" required>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Check this custom checkbox</span>
                            </label>
                            <div class="custom-controls-stacked d-block my-3">
                                <label class="custom-control custom-radio">
                                    <input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input" required>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Toggle this custom radio</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input id="radioStacked2" name="radio-stacked" type="radio" class="custom-control-input" required>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Or toggle this other custom radio</span>
                                </label>
                            </div>

                            <select class="custom-select d-block my-3" required>
                                <option value="">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>

                            {{--<label class="custom-file">--}}
                                {{--<input type="file" id="file" class="custom-file-input" required>--}}
                                {{--<span class="custom-file-control"></span>--}}
                            {{--</label>--}}
                        </form>

                        <h5 class="section-semi-title mt-4">
                            Static Controls
                        </h5>

                        <form>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Email</label>

                                <div class="col-sm-10">
                                    <p class="form-control-plaintext">mohit@laraspace.in</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">username</label>

                                <div class="col-sm-10">
                                    <p class="form-control-plaintext">laraspace</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Checkbox & Radios</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">
                                    Checkbox
                                </h5>

                                <form>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="">
                                            Option one is this and that&mdash;be sure to include why it's great
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" disabled>
                                            Option two is disabled
                                        </label>
                                    </div>

                                </form>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Inline Checkbox</h5>

                                <form>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                   value="option1"> 1
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                   value="option2"> 2
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline disabled">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                   value="option3" disabled> 3
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h5 class="section-semi-title mt-4">
                                    Radio
                                </h5>

                                <form>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios1" value="option1" checked>
                                            Option one is this and that&mdash;be sure to include why it's great
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios2" value="option2">
                                            Option two can be something else and selecting it will deselect option one
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios3" value="option3" disabled>
                                            Option three is disabled
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="section-semi-title mt-4">Inline Radio</h5>
                                <form>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                   id="inlineRadio1" value="option1"> 1
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                   id="inlineRadio2" value="option2"> 2
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline disabled">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                   id="inlineRadio3" value="option3" disabled> 3
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
