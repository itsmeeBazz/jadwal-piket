<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Piketku') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="{{asset('assets/img/logo.png')}}">
        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="text-gray-900">
        <div class="h-auto flex flex-col sm:justify-center items-center bg-[#02A04B] overflow-hidden">
            <div class="w-[150%] h-[40svh] -mt-12 gap-3 flex-col flex items-center rounded-b-full justify-center bg-[#E7F7EE]">
                <div class="flex items-center justify-center gap-4 w-full h-10">
                    <img src="{{asset('assets/img/logo.png')}}" alt="logo" class="w-20 h-20">
                    <img src="{{asset('assets/img/nama.png')}}" alt="logo" class="w-30 h-10">
                </div>
                <div class="w-1/2">
                    <p class="text-2xl mt-5 text-center text-[#02A04B] font-semibold text-primary">ayo resiki kelasmu kanggo kenyamanan bareng</p>
                </div>
            </div>

            
            <div class="w-full sm:max-w-md rounded-t-3xl h-[56svh] mt-[110px] px-6 py-4 bg-[#E7F7EE] shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
