<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <title>Verde Salvia - @yield('title')</title>

    <link rel='stylesheet' href='{{ asset('css/signup.css') }}'>
    @yield('script')
    
</head>
<body>
    @yield('content')
</body>
</html>