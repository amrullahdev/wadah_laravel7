<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title id="title-page">{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
    <!-- Scripts -->
    {{-- <script src="/js/app.js " defer></script> --}}
    <link rel="stylesheet" media="screen, print" href="/css/app.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer>
    </script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <style>
        .bs-1{
           box-shadow: 0px 2px 9px 1px #eac4f1;
        },
        .als{
            align-self: center;
        }
        .cp{
            cursor: pointer;
            user-select:none;
        }
        .nav-link.router-link-exact-active.router-link-active>.menu-title{
            color:#3490dc !important;
        }
        .router-link-exact-active.router-link-active{
            color:#3490dc !important;
        }

        .animate__faster{
              --animate-duration:300ms;
        }
    </style>
</head>
 <body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper" id="app">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
            </ul>
        </nav>
        @include('inc.sidebar-df')
        <div class="content-wrapper">
            <div class="container py-4">
                <router-view></router-view>
                <vue-progress-bar></vue-progress-bar>
            </div>
        </div>
    </div>
    <script>
        @auth
            window.user = @json(auth()->user())
        @endauth
    </script>
    <script src="/js/app.js"></script>
</body>

</html>
