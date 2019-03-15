<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Mind</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Blog Mind</a>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
