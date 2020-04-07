<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
    <title>Empire | B4+ admin template</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description"
          content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
    <meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
    <meta name="author" content="Codedthemes" />
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/open-iconic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/feather.css')}}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-material.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/shreerang-material.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/uikit.css')}}">

    <!-- Libs -->
    <link rel="stylesheet" href="{{asset('assets/libs/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/flot/flot.css')}}">
    @yield('css')
</head>

<body>
<!-- [ Preloader ] Start -->
<div class="page-loader">
    <div class="bg-primary"></div>
</div>
<!-- [ Preloader ] End -->

<!-- [ Layout wrapper ] Start -->
<div class="layout-wrapper layout-2">
    <div class="layout-inner">
        <!-- [ Layout sidenav ] Start -->
        <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
            
            <div class="app-brand demo">
                    <span class="app-brand-logo demo">
                        <img src="{{asset('assets/img/logo.png')}}" alt="Brand Logo" class="img-fluid">
                    </span>
                <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Empire</a>
                <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                    <i class="ion ion-md-menu align-middle"></i>
                </a>
            </div>
            <div class="sidenav-divider mt-0"></div>

            <!-- Links -->
            <ul class="sidenav-inner py-1">

                <!-- Dashboards -->
                <li class="sidenav-item open active">
                    <a href="javascript:" class="sidenav-link sidenav-toggle">
                        <i class="sidenav-icon feather icon-home"></i>
                        <div>Dashboards</div>
                        <div class="pl-1 ml-auto">
                            <div class="badge badge-danger">Hot</div>
                        </div>
                    </a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item active">
                            <a href="{{route('home')}}" class="sidenav-link">
                                <div>Default</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Layouts -->
                <li class="sidenav-divider mb-1"></li>

                <li class="sidenav-item">
                    <a href="javascript:" class="sidenav-link sidenav-toggle">
                        <i class="sidenav-icon feather icon-book"></i>
                        <div>School</div>
                    </a>
                    <ul class="sidenav-menu">
                        <li class="sidenav-item"><a href="{{route('school.dashboard')}}" class="sidenav-link">
                                <div>Dashboard</div>
                            </a></li>
                        <li class="sidenav-item"><a href="{{route('books.index')}}" class="sidenav-link">
                                <div>Book</div>
                            </a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- [ Layout sidenav ] End -->
        <!-- [ Layout container ] Start -->
        @yield('content')
        <!-- [ Layout container ] End -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-sidenav-toggle"></div>
</div>
<!-- [ Layout wrapper] End -->

<!-- Core scripts -->
<script src="{{asset('assets/js/pace.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/libs/popper/popper.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/sidenav.js')}}"></script>
<script src="{{asset('assets/js/layout-helpers.js')}}"></script>
<script src="{{asset('assets/js/material-ripple.js')}}"></script>

<!-- Libs -->
<script src="{{asset('assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/libs/eve/eve.js')}}"></script>
<script src="{{asset('assets/libs/flot/flot.js')}}"></script>
<script src="{{asset('assets/libs/flot/curvedLines.js')}}"></script>
<script src="{{asset('assets/libs/chart-am4/core.js')}}"></script>
<script src="{{asset('assets/libs/chart-am4/charts.js')}}"></script>
<script src="{{asset('assets/libs/chart-am4/animated.js')}}"></script>

<!-- Demo -->
<script src="{{asset('assets/js/demo.js')}}"></script>
<script src="{{asset('assets/js/analytics.js')}}"></script>
<script>


    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

</script>
<script src="{{asset('assets/js/pages/dashboards_index.js')}}"></script>
@yield('js')
</body>

</html>
