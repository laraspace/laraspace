@extends('admin.layouts.layout-login-2')

@section('scripts')
    <script src="/assets/admin/js/sessions/login.js"></script>
@stop

@section('content')
    <form action="{{route('login.post')}}" id="loginForm" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <input type="email" class="form-control form-control-danger" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-danger" placeholder="Enter Password" name="password">
        </div>
        <div class="other-actions row">
            <div class="col-6">
                <div class="checkbox">
                    <label class="c-input c-checkbox">
                        <input type="checkbox" name="remember">
                        <span class="c-indicator"></span>
                        Remember Me
                    </label>
                </div>
            </div>
            <div class="col-6 text-right">
                <a href="#" class="forgot-link">Forgot Password?</a>
            </div>
        </div>
        <button class="btn btn-theme btn-full">Login</button>
        <div class="form-group other-options">
            <div class="social-caption pull-left">
                <h6>
                    Or Login With
                </h6>
            </div>
            <div class="social-icons pull-right">
                <a href="/auth/facebook" class="btn btn-default text-primary btn-icon"><i class="fa fa-facebook"></i></a>
                <a href="/auth/google" class="btn btn-default text-danger btn-icon"><i class="fa fa-google"></i></a>
                <a href="/auth/github" class="btn btn-default btn-icon text-default"><i class="fa fa-github"></i></a>
            </div>
        </div>
    </form>
@stop
