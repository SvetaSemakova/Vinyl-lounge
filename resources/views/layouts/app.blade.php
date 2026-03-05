<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinyl Lounge</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="headhat">
            <a href="{{ route('home') }}"><div class="logo"><img class="rpanel" src="{{ asset('img/logo.png') }}"></div></a>
            <div class="list">
                <ul>
                    <li><a href="{{ route('catalog') }}">Каталог</a></li>
                    <li><a href="{{ route('about') }}">Наш магазин</a></li>
                    <li><a href="{{ route('reviews') }}">Отзывы</a></li>
                    <li><a href="{{ route('contact') }}">Контакты</a></li>
                </ul>   
            </div>
            <div class="right">
                <button><a href="{{ route('cart') }}"><img class="rpanel" src="{{ asset('img/icons/bag.png')}}"></a></button>
                <button><a href="{{ route('authorization') }}"><img class="rpanel" src="{{ asset('img/icons/account.png')}}"></a></button>
            </div>
        </div>
    </header>

@yield('content')


    <footer>
    <div class="foot">
        <div class="foot_logo">
            <img src="{{ asset('img/logo.png') }}">
        </div>

        <div class="links">
            <li><a href="catalog.html">Каталог</a></li>
            <li><a href="about.html">Наш магазин</a></li>
            <li><a href="reviews.html">Отзывы</a></li>
            <li><a href="contact.html">Контакты</a></li>
        </div>
    </div>
</footer>
</body>
</html>