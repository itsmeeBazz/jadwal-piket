@extends('layouts.layout')
@section('header')
    {{-- App Header --}}
    <nav class="bg-white flex shadow-md w-full h-[5rem] items-center justify-center">
        <h1 class="text-primary text-center text-2xl font-semibold">Riwayat</h1>
    </nav>
@endsection
@section('content')
<div class="w-full h-full bg-primary bg-[#E6FBF0]">
    <div class="w-[90%] mt-1 h-auto bg-[#E6FBF0] mx-auto flex flex-col">
        <div class="w-full h-auto flex-col justify-start items-start mb-36 gap-1 inline-flex">
            <h1>No</h1>
            @foreach($data as $user)
            <a class="w-full" href="{{route('log-riwayat')}}">
                <div class="w-full px-4 py-2 bg-white rounded-lg border border-green-600 justify-start items-center gap-[95px] inline-flex">
                    <div class="grow shrink basis-0 h-6 justify-start items-center gap-10 flex">
                        <div class="text-center text-green-600 text-base font-normal font-['Poppins']">{{ $user->id }}.</div>
                        <div class="grow shrink basis-0 text-green-600 text-base font-normal font-['Poppins']">{{ $user->name }}</div>
                    </div>
                    <div class="w-5 h-5 justify-center items-center flex">
                        <div class="w-5 h-5 relative">
                            <img src="{{asset('assets/svg/arrow-right.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
