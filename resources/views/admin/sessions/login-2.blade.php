@extends('admin.layouts.layout-login-2')

@section('scripts')
    <script src="/assets/admin/js/sessions/login.js"></script>
@stop

@section('content')
    @include('admin.sessions.partials.login-form')
@stop
