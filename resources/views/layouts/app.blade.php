<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<link rel="shortcut icon" type="image/x-icon" href="/images/plane.png?a8452f82a20a24134642fd6d0136d36f">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Winfor</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm h-[110px] media768123">
            <div class="container mb-[3vh] absolute">
                <div class="pl-[35%]">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Winfor
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="/search">
                        <input type="text" style="border: solid 1px darkgray;" class="w-[57vh] h-[4vh] rounded-[8px] p-[2%]" placeholder="어디로 떠날 생각이신가요?" >
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto w-[44%]">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="text-center pt-[10px] pb-[-1%]">
            <a href="/" class="pr-[5vh]">myhome</a>
            <a href="/where" class="pr-[5vh]">where</a>
            <a href="/promotion" class="pr-[5vh]">promotion</a>
        </div>
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <style>
            @media screen and (max-width: 768px) {
                    .media768123 {
                        display: none;
                    }
                }
    </style>

</body>
</html>
