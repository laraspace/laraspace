@extends('admin.layouts.layout-login')

@section('scripts')
    <script src="/assets/admin/js/sessions/register.js"></script>
@stop

@section('content')
    <form action="" id="registerForm" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <input type="email" class="form-control form-control-danger" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-danger" placeholder="Enter Password" name="password" id="password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-danger" placeholder="Retype Password" name="password_confirmation">
        </div>
        <button class="btn btn-login btn-full">Register</button>
    </form>
@stop
