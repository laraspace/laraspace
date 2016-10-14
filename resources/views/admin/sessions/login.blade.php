@extends('admin.layouts.layout-login')

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
      <div class="col-sm-6">
        <div class="checkbox">
          <label class="c-input c-checkbox">
            <input type="checkbox" name="remember">
            <span class="c-indicator"></span>
            Remember Me
          </label>
        </div>
      </div>
      <div class="col-sm-6 text-sm-right">
        <a href="#" class="forgot-link">Forgot Password?</a>
      </div>
    </div>
    <button class="btn btn-theme btn-full">Login</button>
    <a href="/auth/facebook" class="btn btn-theme btn-full"><i class="fa fa-facebook"></i> Login with Facebook</a>
    <a href="/auth/twitter" class="btn btn-theme btn-full"><i class="fa fa-twitter"></i> Login with Twitter</a>
  </form>
@stop
