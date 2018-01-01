@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="{{asset('/assets/admin/js/pages/wizard.js')}}"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Form Wizard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active">Form Wizard</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header">
                <h6>Basic Form Wizard</h6>
            </div>
            <div class="card-body">
                <div class="content">
                    <form id="basic-wizard" class="form-wizard-1">
                        <h3>Step 1</h3>
                        <section>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>DOB</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control ls-datepicker" value="06/10/2017">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                        <i class="icon-fa icon-fa-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Hobbies</label>
                                        <select class="form-control ls-select2">
                                            <option value="developing">Developing</option>
                                            <option value="singing">Singing</option>
                                            <option value="reading">Reading</option>
                                            <option value="internet-surfing">Internet Surfing</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Occupation</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <h3>Step 2</h3>
                        <section>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone No.</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password Confirmation</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <h3>Step 3</h3>
                        <section>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Address Line1</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Address Line2</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Pincode</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <h3>Step 4</h3>
                        <section>
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Google +</label>
                                <input type="text" class="form-control">
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h6>Form Wizard with Icon</h6>
            </div>
            <div class="card-body">
                <div class="content">
                    <form id="basic-wizard-2" class="form-wizard-1 icon-wizard">
                        <h3><i class="icon-fa icon-fa-home"></i>Step 1</h3>
                        <section>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>DOB</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control ls-datepicker" value="06/10/2017">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                        <i class="icon-fa icon-fa-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Hobbies</label>
                                        <select class="form-control ls-select2">
                                            <option value="developing">Developing</option>
                                            <option value="singing">Singing</option>
                                            <option value="reading">Reading</option>
                                            <option value="internet-surfing">Internet Surfing</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Occupation</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <h3><i class="icon-fa icon-fa-key"></i>Step 2</h3>
                        <section>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone No.</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password Confirmation</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <h3><i class="icon-fa icon-fa-map-marker"></i>Step 3</h3>
                        <section>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Address Line1</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Address Line2</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Pincode</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <h3><i class="icon-fa icon-fa-twitter"></i>Step 4</h3>
                        <section>
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Google +</label>
                                <input type="text" class="form-control">
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h6>Form Wizard with Validation</h6>
            </div>
            <div class="card-body">
                <div class="content">
                    <form id="basic-wizard-3" class="form-wizard-1 icon-wizard">
                        <h3><i class="icon-fa icon-fa-home"></i>Step 1</h3>
                        <section>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>First Name *</label>
                                        <input type="text" id="firstname" name="firstname"
                                               class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name *</label>
                                        <input type="text" id="lastname" name="lastname" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label>DOB *</label>
                                        <div class="input-group">
                                            <input type="text" id="dob" name="dob"
                                                   class="form-control required ls-datepicker" value="06/10/2017">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="icon-fa icon-fa-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Hobbies *</label>
                                        <select id="hobby" name="hobby" class="form-control ls-select2">
                                            <option value="developing">Developing</option>
                                            <option value="singing">Singing</option>
                                            <option value="reading">Reading</option>
                                            <option value="internet-surfing">Internet Surfing</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Occupation *</label>
                                        <input type="text" id="occupation" name="occupation"
                                               class="form-control required">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <h3><i class="icon-fa icon-fa-key"></i>Step 2</h3>
                        <section>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Email *</label>
                                        <input type="email" id="email" name="email" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone No. *</label>
                                        <input type="text" id="phone" name="phone" class="form-control required">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input type="password" id="password" name="password"
                                               class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label>Password Confirmation *</label>
                                        <input type="password" id="confirm" name="confirm"
                                               class="form-control required">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <h3><i class="icon-fa icon-fa-map-marker"></i>Step 3</h3>
                        <section>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Address Line1 *</label>
                                        <input type="text" id="address_line1" name="address_line1"
                                               class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label>Address Line2 *</label>
                                        <input type="text" id="address_line2" name="address_line2" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>City *</label>
                                        <input type="text" id="city" name="city" class="form-control required">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>State *</label>
                                        <input type="text" id="state" name="state" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label>Pincode *</label>
                                        <input type="text" id="pincode" name="pincode" class="form-control required">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <h3><i class="icon-fa icon-fa-twitter"></i>Step 4</h3>
                        <section>
                            <div class="form-group">
                                <label>Facebook *</label>
                                <input type="text" id="facebook" name="facebook" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label>Twitter *</label>
                                <input type="text" id="twitter" name="twitter" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label>Google+ *</label>
                                <input type="text" id="google+" name="google+" class="form-control required">
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
