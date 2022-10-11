<!doctype html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm h-[110px] media768123">
            <div class="ml-auto mr-auto">
                검색
            </div>
        </nav>
        <div class="text-center pt-[10px]">
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
