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
        .cl-primary{
            color: #6BC6F0;
        }

        .btn-primary{
            background-color: #6BC6F0; 
            border-color:  #6BC6F0;
        }
        .btn-primary:hover{
            background-color: #5dacd1;
            border-color: #5dacd1;  
            transition: 100ms;
        }
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
@guest
    @include('layouts.non-login')
@endguest
@auth
    @include('layouts.login')
@endauth
</html>
