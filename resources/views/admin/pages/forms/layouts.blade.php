@extends('admin.layouts.layout-basic')

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Form Layouts</h3>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">Form Layouts</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Basic Form</h3>
                    </div>
                    <div class="card-block">
                        <form>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label>First Name</label>
                                    <input type="text" class="form-control"
                                           placeholder="First Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control"
                                           placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label >Email address</label>
                                <input type="email" class="form-control"
                                       placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control"
                                       placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <div>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="male" checked> Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="female"> Female
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control"
                                       placeholder="Password">
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Horizontal Form</h3>
                    </div>
                    <div class="card-block">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <button class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Inline Form</h3>
                    </div>
                    <div class="card-block">
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="nameInput" class="control-label">Name</label>
                                <input type="text" class="form-control" id="nameInput" placeholder="Jane Doe">
                            </div>
                            <div class="form-group">
                                <label for="emailInput" class="control-label">Email</label>
                                <input type="email" class="form-control" id="emailInput" placeholder="jane.doe@example.com">
                            </div>
                            <button type="submit" class="btn btn-primary">Send invitation</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
