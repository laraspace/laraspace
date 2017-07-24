<!DOCTYPE html>
<html>
    <head>
        <title>Laraspace - Laravel Admin</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
        <script src="{{asset('/assets/admin/js/core/pace.js')}}"></script>
        <link href="{{ mix('/assets/admin/css/laraspace.css') }}" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('admin.layouts.partials.favicons')
        @yield('styles')
    </head>
    <body class="layout-horizontal skin-default">

        <div id="app" class="site-wrapper">
            @include('admin.layouts.partials.laraspace-notifs')
            @include('admin.layouts.partials.header')
            <div class="mobile-menu-overlay"></div>
            @include('admin.layouts.partials.header-bottom')
            @yield('content')
            @include('admin.layouts.partials.footer')
            @include('admin.layouts.partials.skintools')
        </div>

        <script src="{{mix('/assets/admin/js/core/plugins.js')}}"></script>
        <script src="{{asset('/assets/admin/js/demo/skintools.js')}}"></script>
        <script src="{{mix('/assets/admin/js/core/app.js')}}"></script>
        @yield('scripts')
    </body>
</html>
