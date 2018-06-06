@extends('admin.layouts.layout-basic')

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Advanced Elements</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active">Advanced Elements</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header">
                <h6>Select 2 <a class="source-link" href="https://select2.github.io/" target="_blank">source</a></h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4 col-md-6 mb-4">
                        <h5 class="section-semi-title">
                            Single Select
                        </h5>

                        <p class="mb-4">Just apply <code>.ls-select2</code> class to a select element.</p>
                        <select class="form-control ls-select2">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                        </select>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <h5 class="section-semi-title">
                            with Groups
                        </h5>

                        <p class="mb-4">Just use <code>optgroups</code> with label attribute inside select element.</p>
                        <select class="form-control ls-select2">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <h5 class="section-semi-title">
                            Multiple Select
                        </h5>

                        <p class="mb-4">Just use <code>multiple</code> attribute inside select element.</p>
                        <select class="form-control ls-select2" multiple="multiple">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h6>Multiple Select <a class="source-link" href="http://loudev.com/" target="_blank">source</a></h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4 mb-4">
                        <h5 class="section-semi-title">
                            Default
                        </h5>

                        <p class="mb-4">Just apply <code>.ls-multi-select</code> class to a select element to make it a
                            multi-select</p>
                        <select class="form-control ls-multi-select" multiple="multiple">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                        </select>
                    </div>
                    <div class="col-xl-4 mb-4">
                        <h5 class="section-semi-title">
                            Pre-Selected Options
                        </h5>

                        <p class="mb-4">Just use <code>selected</code> attribute on the options which you want to keep
                            as
                            selected</p>
                        <select class="form-control ls-multi-select" multiple="multiple">
                            <option value="AK" selected>Alaska</option>
                            <option value="HI">Hawaii</option>
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR" selected>Oregon</option>
                            <option value="WA" selected>Washington</option>
                        </select>
                    </div>
                    <div class="col-xl-4 mb-4">
                        <h5 class="section-semi-title">
                            with Groups
                        </h5>

                        <p class="mb-4">Just use <code>optgroups</code> with label attribute inside select element</p>
                        <select class="form-control ls-multi-select" multiple="multiple">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h6>Switch Toggles <a class="source-link" href="http://abpetkov.github.io/switchery/"
                                      target="_blank">source</a></h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <h5 class="section-semi-title">
                            Basic Switch
                        </h5>

                        <p class="mb-4">Just apply <code>.ls-switch</code> class to a checkbox to make it a switch</p>
                        <input type="checkbox" class="ls-switch" checked/>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <h5 class="section-semi-title">
                            Sizes
                        </h5>

                        <p class="mb-4">use <code>data-size</code> attribute to change the size of the switch</p>
                        <input type="checkbox" class="ls-switch" data-size="small" checked/>
                        <input type="checkbox" class="ls-switch" checked/>
                        <input type="checkbox" class="ls-switch" data-size="large" checked/>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <h5 class="section-semi-title">
                            Colors
                        </h5>

                        <p class="mb-4">use <code>data-color="#007dcc"</code> to change the color of the switch</p>
                        <input type="checkbox" class="ls-switch" checked data-color="#007dcc"/>
                        <input type="checkbox" class="ls-switch" checked data-color="#4fc47f"/>
                        <input type="checkbox" class="ls-switch" checked data-color="#f35a3d"/>
                        <input type="checkbox" class="ls-switch" checked data-color="#f0ad4e"/>
                        <input type="checkbox" class="ls-switch" checked data-color="#5BBFDE"/>

                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h6>Clock Time Picker
                    <a class="source-link" href="http://weareoutman.github.io/clockpicker/" target="_blank">source</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4  col-md-6 mb-4">
                        <h5 class="section-semi-title">Default</h5>

                        <p class="mb-4">Just apply <code>.ls-clockpicker</code> class to an input to make it a
                            clockpicker
                        </p>

                        <div class="input-group ls-clockpicker" data-autoclose="false">
                            <input type="text" class="form-control" value="09:30">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="icon-fa icon-fa-clock-o"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <h5 class="section-semi-title">Autoclose and align top left</h5>

                        <p class="mb-4">use <code>data-autoclose="true"</code> attribute to auto-close clockpicker after
                            the date is selected and <code>data-placement="left"</code>,<code>data-align="top"</code>
                            for
                            placement of the clockpicker</p>

                        <div class="input-group ls-clockpicker" data-placement="left" data-align="top"
                             data-autoclose="true">
                            <input type="text" class="form-control" value="09:30">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                <i class="icon-fa icon-fa-clock-o"></i>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h6>Date Picker <a class="source-link" href="https://github.com/eternicode/bootstrap-datepicker"
                                   target="_blank">source</a></h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 mb-4">
                        <h5 class="section-semi-title">Default</h5>

                        <p class="mb-4">Just apply <code>.ls-datepicker</code> class to a input.</p>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="icon-fa icon-fa-calendar"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control ls-datepicker" value="09:30">
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 mb-4">
                        <h5 class="section-semi-title">Date Range</h5>

                        <p class="mb-4">Just apply <code>.ls-datepicker</code> classes to both inputs.</p>

                        <div class="input-group input-daterange">
                            <input type="text" class="form-control ls-datepicker">
                            <div class="input-group-prepend input-group-append">
                                <span class="input-group-text">to</span>
                            </div>
                            <input type="text" class="form-control ls-datepicker">
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 mb-4">
                        <h5 class="section-semi-title">
                            Inline
                        </h5>

                        <p class="mb-4">Just apply <code>.ls-datepicker</code> classes to a div element.</p>

                        <div data-date="12/03/2012" class="ls-datepicker"></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h6>Time Picker <a class="source-link" href="http://jonthornton.github.io/jquery-timepicker/"
                                   target="_blank">source</a></h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4 mb-4">
                        <h5 class="section-semi-title">Default</h5>

                        <p class="mb-4">Just apply <code>.ls-timepicker</code> class to an input.</p>

                        <div class="input-group">
                            <input type="text" class="form-control ls-timepicker" value="09:30">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                <i class="icon-fa icon-fa-clock-o"></i>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 mb-4">
                        <h5 class="section-semi-title">Show Duration</h5>

                        <p class="mb-4">Use <code>data-duration="true"</code> attribute to show the time duration.</p>

                        <div class="input-group">
                            <input type="text" class="form-control ls-timepicker" value="09:30" data-duration="true">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                <i class="icon-fa icon-fa-clock-o"></i>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 mb-4">
                        <h5 class="section-semi-title">Time Format</h5>

                        <p class="mb-4">Use <code>data-format="H:i:s"</code> attribute to change the time format.</p>

                        <div class="input-group">
                            <input type="text" class="form-control ls-timepicker" value="09:30" data-format="H:i:s">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                <i class="icon-fa icon-fa-clock-o"></i>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
