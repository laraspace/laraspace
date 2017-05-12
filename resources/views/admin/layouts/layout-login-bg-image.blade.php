<!DOCTYPE html>
<html>
<head>
    <title>Laraspace - Laravel Admin</title>
    <link href="{{ mix('/assets/admin/css/laraspace.css') }}" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @include('admin.layouts.partials.favicons')
</head>
<body id="app" class="login-page bg-fullscreen-image">
<div class="login-wrapper">
    <div class="login-box">
        @include('admin.layouts.partials.laraspace-notifs')
        <div class="logo-main">
            <a href="/"><img src="/assets/admin/img/logo-large.png" alt="Laraspace Logo"></a>
        </div>
        @yield('content')
        <div class="page-copyright">
            <p>Powered by <a href="http://bytefury.com" target="_blank">Bytefury</a></p>
            <p>Laraspace © {{ date('Y') }}</p>
        </div>
    </div>
</div>
<script src="{{mix('/assets/admin/js/core/plugins.js')}}"></script>
@yield('scripts')
</body>
</html>
