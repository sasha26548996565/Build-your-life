<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Build your life')</title>

        <meta name="description" content="Главная страница">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ Vite::asset('/resources/images/logo.png') }}">
        <link rel="icon" type="image/png" sizes="32x32"
            href="{{ Vite::asset('/resources/images/logo.png') }}">

        <link rel="mask-icon" href="{{ Vite::asset('/resources/images/logo.png') }}" color="#1E1F43">
        <meta name="msapplication-TileColor" content="#1E1F43">
        <meta name="theme-color" content="#1E1F43">

        @vite(['resources/css/app.css', 'resources/sass/main.sass', 'resources/js/app.js'])
    </head>

    <body>
        @include('shared.header')

        <main class="py-16 lg:py-20">
            <div class="container">
                @yield('content')
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </body>

</html>
