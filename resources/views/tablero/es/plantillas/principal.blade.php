<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Title -->
        <title>@yield('title', 'Tablero') | {{ config('app.name', 'Blad POS') }}</title>

        <!-- Meta Tags -->
        @hasSection('descripcion')<meta name="description" content="@yield('descripcion')" />@endif
        @hasSection('sujeto')<meta name="subject" content="@yield('sujeto')" />@endif
        @hasSection('autor')<meta name="author" content="@yield('autor')" />@endif

        <link rel="shortcut icon" href="{{ asset('imagenes/favicon.ico') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

        <link rel="stylesheet" href="{{ asset(mix('css/vendor.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">

        <!-- AdSense -->
        @stack('adsense')
    </head>

    <body>

        @include('tablero.es.parciales.barra-de-navegacion')
        {{--@include('tablero.es.parciales.alertas-basicas')--}}
        @yield('contenido')

        <script src="{{ asset('js/manifest.js') }}"></script>
        <script src="{{ asset('js/vendor.js') }}"></script>
        <script src="{{ asset(mix('js/app.js')) }}"></script>

    </body>

</html>