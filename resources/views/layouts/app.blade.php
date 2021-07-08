<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title id="title-page">{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    <link rel="stylesheet" media="screen, print" href="/css/app.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <style>
        .page-item.active .page-link {
            background-color: #e3342f;
            border-color: #e3342f;
        }

        .page-link:hover {
            color: #992420;
        }

        .page-link {
            color: #d3312b;
        }


        .pagination>li>a:focus {
            box-shadow: none !important;
        }

        .bgf-dark {
            background: var(--bg-dark);
        }

    </style>
</head>
@auth
    @include('layouts/auth')
@else
    @include('layouts/guest')
@endauth


</html>
