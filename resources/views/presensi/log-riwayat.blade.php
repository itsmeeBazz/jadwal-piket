@extends('layouts.layout')
@section('header')
    {{-- App Header --}}
    <nav class="bg-white flex shadow-md w-full h-[5rem] items-center justify-center">
        <h1 class="text-primary text-center text-2xl font-semibold">Log Riwayat</h1>
    </nav>
@endsection
@section('content')
<div class="w-full h-full bg-primary bg-[#E6FBF0]">
    @foreach($histori as $history)
    <div class="w-[90%] mx-auto h-auto flex items-center">
        <div class="relative flex flex-col mt-4 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-64">
            <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white shadow-lg bg-clip-border rounded-xl h-36">
              <img class="" src="{{ Storage::url($history->foto)}}" alt="piket" />
            </div>
            <div class="p-6">
              <h4 class="block text-lg antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                Nama : {{ $history->nama }}
              </h4>
              <p class="block text-sm antialiased font-medium leading-relaxed text-transparent bg-clip-text bg-gradient-to-tr from-blue-gray-600 to-blue-gray-400">
                Tanggal : {{ $history->tanggal }}
              </p>
              <p class="block text-sm antialiased font-medium leading-relaxed text-transparent bg-clip-text bg-gradient-to-tr from-blue-gray-600 to-blue-gray-400">
                Waktu : {{ $history->jam }}
              </p>
            </div>
        </div>
    </div>
    @endforeach
</div>  
@endsection
