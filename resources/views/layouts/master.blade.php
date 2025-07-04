<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('index') }}">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('index') }}">Все товары</a></li>
                <li><a href="{{ route('categories') }}">Категории</a>
                </li>
                <li><a href="{{ route('basket') }}">В корзину</a></li>
                <li><a href="{{ route('index') }}">Сбросить проект в начальное состояние</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('login') }}">Панель администратора</a></li>

                @auth
{{--                    <li><a href="{{ route('home') }}">Панель администратора</a></li>--}}
                        <li>
                            <form action="{{ route('logout') }}" method="POST" style="display:inline">
                                @csrf
                                <button type="submit" class="btn btn-link navbar-btn">Выйти</button>
                            </form>
                        </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template"
    @yield('content')
</div>
</body>
</html>
