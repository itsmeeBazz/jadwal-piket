<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="shortcut icon" href="{{asset('assets/icons/logo-1.png')}}"> --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>

        <title>Piketku</title>
    </head>
    <body>
        {{-- header --}}
        @yield('header')
        {{-- content --}}
        @yield('content')
        {{-- footer --}}
        @include('layouts.footer')

        @stack('myscript')
    </body>
</html>
