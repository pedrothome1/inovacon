<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body class="bg-light">
    <div id="root">
        @section('header')
            @include('layouts.navbar')
        @show

        @yield('content')
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
