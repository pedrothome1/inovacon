<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('head')

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-light">
    <div id="root">
        @section('header')
            @include('layouts.navbar')
        @show

        @yield('content')
    </div>

    <flash type="{{ session('type') ?: 'success' }}" message="{{ session('flash') }}"></flash>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
