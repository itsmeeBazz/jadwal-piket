<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="w-full bg-primary h-auto">
            <div class="w-full h-[4.5rem]">
                @include('layouts.nav-bar')
            </div>
            <div class="w-[90%] mx-auto h-auto flex-col">
                <div class="w-full flex justify-between">
                    <div class="w-[48%]">
                        <x-card>
                            <h1 class="text-lg bg-primary font-bold">Abas</h1>
                            <h1 class="text-sm font-bold">Abas</h1>
                            <h1 class="text-sm font-bold">Abas</h1>
                            <h1 class="text-sm font-bold">Abas</h1>
                        </x-card>
                    </div>
                    <div class="w-[48%]">
                        <x-card>
                            <h1 class="text-lg font-bold">Abas</h1>
                            <h1 class="text-sm font-bold">Abas</h1>
                            <h1 class="text-sm font-bold">Abas</h1>
                            <h1 class="text-sm font-bold">Abas</h1>
                        </x-card>
                    </div>
                </div>
            </div>
            <x-footer></x-footer>
        </div>
    </body>
</html>
