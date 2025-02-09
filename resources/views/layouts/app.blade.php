<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Web Development')</title>
    <link rel="stylesheet" href="{{ asset('css/navstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<body>
    <header id="navbar">
        @include('layouts.navbar.nav')
    </header>
    <main id="app">
        @yield('content')
    </main>
</body>
</html>
