@extends('admin.layouts.layout-login-3')

@section('scripts')
    <script src="/assets/admin/js/sessions/register.js"></script>
@stop

@section('content')
    @include('admin.sessions.partials.register-form')
@stop
