<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Development</title>
    <link rel="stylesheet" href="{{ asset('css/new.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <main class="container">
        <header class="wrapper">
            <div class="logo">
                <i class="fa-solid fa-k"></i>
                <div class="logo-text">Krainne.</div>
            </div>
            <nav class="navlinks">
                <div class="humberger">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <ul class="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </header>
    </main>
    <script>
        const humberger = document.querySelector('.humberger');
        const menu = document.querySelector('.menu');
        humberger.addEventListener('click', () => {
            menu.classList.toggle('open');
        });
    </script>
</body>
</html>
