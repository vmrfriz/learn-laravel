<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'RAPI Center')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>body { background-color: #f4f4f4 }</style>
</head>

<body>

    <header>
        @if (Route::has('login'))
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <ul class="ml-auto navbar-nav">
                    @auth
                    <li class="nav-item dropdown">
                        <a class="btn btn-light nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Профиль</a>
                            <a class="dropdown-item" href="#">Настройки</a>
                            <div class="dropdown-divider"></div>
                            <form action=""></form>
                            <a class="dropdown-item" href="{{ route('logout') }}" 
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Выйти</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="btn btn-light nav-link" href="{{ route('login') }}" role="button">Войти</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="btn btn-light nav-link" href="{{ route('register') }}" role="button">Регистрация</a>
                    </li>
                    @endif
                    @endif
                </ul>
            </div>
        </nav>
        @endif
    </header>

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-5">
                @auth
                <ul class="nav nav-tabs {{ trim($__env->yieldContent('back-link')) ? '' : 'nav-fill' }}" id="myTab" role="tablist">
                    @hasSection('back-link')
                    <li class="nav-item">
                        <a href="@yield('back-link')" class="nav-link active" role="tab" aria-selected="true">&laquo; Назад</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="/accounts" class="nav-link {{ request()->is('accounts') ? 'active' : '' }}" role="tab" aria-selected="true">Аккаунты</a>
                    </li>
                    <li class="nav-item">
                        <a href="/workers" class="nav-link {{ request()->is('workers') ? 'active' : '' }}" role="tab" aria-selected="true">Сотрудники</a>
                    </li>
                    <li class="nav-item">
                        <a href="/items" class="nav-link {{ request()->is('items') ? 'active' : '' }} disabled" role="tab" aria-selected="true">Имущество</a>
                    </li>
                    @endif
                </ul>
                @endif

                @yield('content', '<h1>Nothing here</h1>')

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>
