@extends('admin.layouts.layout-basic')

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">General Elements</h3>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">General Elements</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Basic Inputs</h3>
                    </div>
                    <div class="card-block">
                        <h5 class="section-semi-title">Horizontal</h5>
                        <form>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 form-control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 form-control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3"
                                           placeholder="Password">
                                </div>
                            </div>
                        </form>
                        <h5 class="section-semi-title m-t-3">Vertical</h5>
                        <form>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter email">
                                <small class="text-muted">We'll never share your email with anyone else.</small>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                       placeholder="Password">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleSelect1">Example select</label>
                                <select class="form-control" id="exampleSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleSelect2">Example multiple select</label>
                                <select multiple class="form-control" id="exampleSelect2">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleTextarea">Example textarea</label>
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" class="form-control-file" id="exampleInputFile">
                                <small class="text-muted">This is some placeholder block-level help text for the above
                                    input. It's a bit lighter and easily wraps to a new line.
                                </small>
                            </fieldset>
                        </form>
                        <h5 class="section-semi-title m-t-3">
                            Validation States
                        </h5>
                        <form>
                            <div class="form-group has-success">
                                <label class="form-control-label" for="inputSuccess1">Input with success</label>
                                <input type="text" class="form-control form-control-success" id="inputSuccess1">
                            </div>
                            <div class="form-group has-warning">
                                <label class="form-control-label" for="inputWarning1">Input with warning</label>
                                <input type="text" class="form-control form-control-warning" id="inputWarning1">
                            </div>
                            <div class="form-group has-danger">
                                <label class="form-control-label" for="inputDanger1">Input with danger</label>
                                <input type="text" class="form-control form-control-danger" id="inputDanger1">
                            </div>

                            <div class="checkbox has-success">
                                <label>
                                    <input type="checkbox" id="checkboxSuccess" value="option1">
                                    Checkbox with success
                                </label>
                            </div>
                            <div class="checkbox has-warning">
                                <label>
                                    <input type="checkbox" id="checkboxWarning" value="option1">
                                    Checkbox with warning
                                </label>
                            </div>
                            <div class="checkbox has-danger">
                                <label>
                                    <input type="checkbox" id="checkboxDanger" value="option1">
                                    Checkbox with danger
                                </label>
                            </div>
                        </form>

                        <h5 class="section-semi-title m-t-3">
                            Static Controls
                        </h5>
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Email</label>
                                <div class="col-sm-10">
                                    <p class="form-control-static">mohit@laraspace.in</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">username</label>
                                <div class="col-sm-10">
                                    <p class="form-control-static">laraspace</p>
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
                        <h3>Checkbox & Radios</h3>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">
                                    Checkbox
                                </h5>
                                <form>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            Option one is this and that&mdash;be sure to include why it's great
                                        </label>
                                    </div>
                                    <div class="checkbox disabled">
                                        <label>
                                            <input type="checkbox" value="" disabled>
                                            Option two is disabled
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="section-semi-title">Inline Checkbox</h5>
                                <form>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                                    </label>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h5 class="section-semi-title m-t-3">
                                    Radio
                                </h5>
                                <form>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            Option one is this and that&mdash;be sure to include why it's great
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            Option two can be something else and selecting it will deselect option one
                                        </label>
                                    </div>
                                    <div class="radio disabled">
                                        <label>
                                            <input type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                            Option three is disabled
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="section-semi-title m-t-3">Inline Radio</h5>
                                <form>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
