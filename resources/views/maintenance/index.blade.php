<!DOCTYPE html>
<html>
<head>
    <title>Laraspace - Laravel Admin</title>
    <script src="{{asset('/assets/admin/js/core/pace.js')}}"></script>
    <link href="{{ mix('/assets/admin/css/laraspace.css') }}" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @include('admin.layouts.partials.favicons')
    <style>
        
    </style>
</head>
<body id="app" class="maintenance-page">
    <header class="site-header">
        <a href="#" class="brand-main">
            <img src="{{asset('/assets/admin/img/logo-desk.png')}}" id="logo-desk" alt="Laraspace Logo" class="d-none d-md-inline ">
            <img src="{{asset('/assets/admin/img/logo-mobile.png')}}" id="logo-mobile" alt="Laraspace Logo" class="d-md-none">
        </a>
        <a href="#" class="nav-toggle">
            <div class="hamburger hamburger--htla">
                <span>toggle menu</span>
            </div>
        </a>
    </header>
    <div class="maintenance-box">
        <div class="row">
            <div class="col-sm-12 text-sm-center">
                <i class="icon-fa icon-fa-cogs icon-fa-lg"></i>
                <h1>Under Maintenance</h1>
                <h5>PLEASE GIVE US A MOMENT TO SORT THINGS OUT</h5>
                
                <p> Powered by <a href="http://bytefury.com" target="_blank">Bytefury</a> </p>
                
                <div class="social-icons">
                    <a href="/auth/facebook" class="btn btn-default text-primary btn-icon"><i class="icon-fa icon-fa-facebook"></i></a>
                    <a href="/auth/google" class="btn btn-default text-danger btn-icon"><i class="icon-fa icon-fa-google"></i></a>
                    <a href="/auth/github" class="btn btn-default btn-icon text-default"><i class="icon-fa icon-fa-github"></i></a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{mix('/assets/admin/js/core/plugins.js')}}"></script>
    @yield('scripts')
</body>
</html>
