<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Web Development')</title>
    <link rel="stylesheet" href="{{ asset('css/navstyle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js"></script>
</head>
<body>
    <main id="home" class="hero-header">
        <section class="wrapper">
            <header>
                @include('layouts.navbar.nav')
            </header>
            @yield('content')
        </section>
    </main>
     <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
