@extends('layouts.layout')
@section('header')
    {{-- App Header --}}
    <nav class="bg-white flex shadow-md w-full h-[5rem] items-center justify-center">
        <h1 class="text-primary text-center text-2xl font-semibold">Kelas XI PPLG TEFA</h1>
    </nav>
@endsection
@section('content')
    <div class="w-full bg-primary h-auto">
        <div class="w-[90%] mx-auto h-auto flex-col">
            <div class="w-full flex-wrap justify-between">
                <div class="w-[48%]">
                    <x-card>
                        <div class="w-full h-full bg-slate-500">
                            {{-- <div>{{ Auth::user()->name }}</div> --}}
                            <h1 class="text-lg text-center font-bold">Yogo</h1>
                        </div>
                    </x-card>
                </div>
                <div class="w-[48%]">
                    <x-card>
                        <div class="w-full h-full bg-slate-500">
                            {{-- <div>{{ Auth::user()->name }}</div> --}}
                            <h1 class="text-lg text-center font-bold">Yogo</h1>
                        </div>
                    </x-card>
                </div>

            </div>
        </div>
    </div>
@endsection
