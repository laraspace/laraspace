@extends('admin.layouts.layout-login')

@section('scripts')
    <script src="/assets/admin/js/sessions/login.js"></script>
@stop

@section('content')
    <form action="{{route('send-reset-link')}}" id="loginForm" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <input type="email" class="form-control form-control-danger" placeholder="Enter email" name="email">
        </div>
        <button class="btn btn-theme btn-full">Send Reset Link</button>
    </form>
@stop
