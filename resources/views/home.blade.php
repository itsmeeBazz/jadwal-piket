@extends('layouts.layout')
@section('header')
    {{-- App Header --}}
    <nav class="bg-white mb-[0.3rem] flex shadow-md w-full h-[5rem] items-center justify-center">
        <h1 class="text-text-primary text-center text-2xl font-semibold">Kelas XI PPLG TEFA</h1>
    </nav>
@endsection
@section('content')
    <div class="w-full bg-primary bg-[#E6FBF0] h-full">
        <div class="w-[90%] mx-auto h-screen flex-wrap">
            <div class="w-full flex flex-wrap justify-between">
                @php
                    $groupedDays = [];
                    foreach ($days as $day) {
                        $groupedDays[$day->hari][] = $day->nama;
                    }
                @endphp

                @foreach ($groupedDays as $hari => $namas)
                    <div class="flex flex-col w-1/2">
                        <div class="text-black mt-5 text-xl mb-2 font-normal font-['Poppins']">{{ $hari }}</div>
                        <div class="w-40 h-auto px-1.5 py-5 bg-white rounded-lg flex-col justify-between items-center gap-2 inline-flex">
                            @foreach ($namas as $nama)
                                <div class="w-36 px-2 bg-green-600 rounded justify-start items-center gap-6 inline-flex">
                                    <div class="grow shrink basis-0 text-white text-lg font-normal font-['Poppins']">{{ $nama }}</div>
                                    <div class="w-5 h-5 relative">
                                        <div class="w-3 h-3 left-[4px] top-[4px] absolute bg-white rounded-full"></div>
                                        <div class="w-5 h-5 left-0 top-0 absolute justify-center items-center inline-flex">
                                            <div class="w-5 h-5 relative"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
