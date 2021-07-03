<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title id="title-page">{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    <link href="{{ asset('app.css') }}" rel="stylesheet" type="text/css" >
    <script type="text/javascript" src="{{ asset('js/custom.js') }}" defer></script>

    <!-- Scripts -->
    <link rel="stylesheet" media="screen, print" href="/css/app.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <style>
        :root {
            --bg-dark: #34495e;
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
