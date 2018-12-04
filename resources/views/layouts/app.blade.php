<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
            {{--<div class="container">--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--{{ config('app.name', 'Laravel') }}--}}
                {{--</a>--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                    {{--<span class="navbar-toggler-icon"></span>--}}
                {{--</button>--}}

                {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav mr-auto">--}}

                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav ml-auto">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item">--}}
                                {{--@if (Route::has('register'))--}}
                                    {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                {{--@endif--}}
                            {{--</li>--}}
                        {{--@else--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}
        <div class="bg-dark text-light sticky-top">
            <div class="container-fluid">
                <div class="row justify-content-around align-items-center">

                    <div class="col d-flex justify-content-center" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav mx-auto">
                            <li class="nav-item d-flex">
                                <a href="/" class="nav-link text-light">{{ __('Главная') }}</a>
                            </li>
                            <li class="nav-item d-flex">
                                <a href="" class="nav-link text-light">{{ __('О нас')  }}</a>
                            </li>
                            <li class="nav-item d-flex">
                                <a href="" class="nav-link text-light">{{ __('Контакты')  }}</a>
                            </li>
                        </ul>


                    <!-- Right Side Of Navbar -->
                        <ul class="nav">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item d-flex">
                                    <a class="btn btn-dark align-self-center py-0 nav-link text-light" href="{{ route('login') }}">{{ __('main.signin') }}</a>
                                </li>
                                <li class="nav-item d-flex">
                                    <a class="btn btn-dark align-self-center py-0 nav-link text-light" href="{{ route('register') }}">{{ __('main.register') }}</a>
                                </li>
                            @else
                                <li class="nav-item dropdown d-flex">
                                    <a id="navbarDropdown" class="nav-link align-self-center font-weight-bold text-light dropdown-toggle text-capitalize" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="">
                                            Change password
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('main.signout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest

                        </ul>

                        <!-- Language switcher -->
                        <ul class="nav">
                            <li class="nav-item dropdown d-flex">
                            </li>
                        </ul>
                    </div>
                    <div class="col-auto text-right d-flex justify-content-end">
                        <a href="tel:+996 (700) 000 000" class="py-2 mx-2 text-light font-weight-normal">+996 (700) 000 000</a>
                        <a href="tel:+996 (555) 000 000" class="py-2 mx-2 text-light font-weight-normal">+996 (555) 000 000</a>
                    </div>
                </div>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>