<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale() )  }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hexlet Blog - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="navbar-nav">
            <a href="/" class="nav-link">@lang('layouts.app.home')</a>
            <a href="{{ route('articles.index') }}" class="nav-link">@lang('layouts.app.articles')</a>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>@yield('header')</h1>
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>