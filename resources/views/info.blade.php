@extends('layouts.layout')

@section('header')
    {{-- App Header --}}
    <nav class="bg-white mb-[0.3rem] flex shadow-md w-full h-[5rem] items-center justify-center">
        <h1 class="text-primary text-[#02A04B] text-center text-2xl font-semibold">Informasi</h1>
    </nav>
@endsection

@section('content')
    <div class="w-full h-full bg-primary bg-[#E6FBF0]">
        <div class="w-[90%] h-screen bg-[#E6FBF0] mx-auto flex flex-col">
            <div class="w-full h-auto flex items-center gap-4 relative">
                @if(auth()->user()->profile_image)
                <img class="bg-white rounded-full w-[5.5rem] h-[5.5rem] p-1 mt-3" src="{{ Storage::url('public/'. Auth::user()->profile_image)}}" alt="Profil">
                @else
                <img class="bg-white rounded-full w-[5.5rem] h-[5.5rem] p-1 mt-3" src="{{ asset('assets/img/profile-circle.png') }}" alt="">
                @endif
                <a href="{{route('profile.edit')}}">
                    <img class="absolute left-[4.7rem] top-[4.6rem]" src="{{ asset('assets/img/edit.png') }}" alt="">
                </a>
                <div class="mt-3 flex w-full">
                    <div class="flex flex-col w-1/2">
                        <h1 class="text-primary text-[#02A04B] text-2xl font-semibold">{{ Auth::user()->name }}</h1>
                        @if (auth()->user()->hasRole('admin'))
                            
                        @endif
                        <h1 class="text-primary text-[#02A04B] text-lg">{{ Auth::user()->role }}</h1>
                    </div>
                    <form class=" w-[40%] items-center flex justify-end" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div class="text-center hover:cursor-pointer flex flex-col gap-1 justify-center items-center w-auto right-[7rem] top-[4.6rem]">
                            <button type="submit" class="bg-transparent border-none text-sm cursor-pointer">
                                <img class="items-center justify-center" src="{{ asset('assets/svg/logout.svg') }}" alt="">Logout
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="w-full h-[2px] mt-4 bg-primary bg-[#83BD75] mb-6">
            <div class="w-auto h-auto flex flex-col gap-6">
                <div class="gap-4">
                    <h1 class="text-black text-xl font-medium">Tentang</h1>
                    <p class="text-[#565656] text-base">Situs web pengingat kebersihan mengirimkan peringatan tepat waktu untuk memastikan pemeliharaan rutinitas kebersihan yang konsisten dengan mudah serta menambah bukti dokumentasi atas partisipasinya untuk rutinitas kebersihan.</p>
                </div>
                <div class="gap-4">
                    <h1 class="text-black text-xl font-medium">Menu Utama</h1>
                    <p class="text-[#565656] text-base">Beranda</p>
                    <p class="text-[#565656] text-base">Kamera</p>    
                    <p class="text-[#565656] text-base">Riwayat</p>
                    <p class="text-[#565656] text-base">Pengaturan</p>
                </div>
                <div class="gap-4">
                    <h1 class="text-black text-xl font-medium">Kontak</h1>
                    <p class="text-[#565656] text-base">E-mail   : janardana@gmail.com</p>
                    <p class="text-[#565656] text-base">E-mail   : janardana@gmail.com</p>
                </div>
                <div class="gap-4">
                    <h1 class="text-black text-xl font-medium">Alamat</h1>
                    <p class="text-[#565656] text-base">Jl. KH Achmad Fauzan No. 17, Krasak, Bangsri, Kec. Bangsri, Kabupaten Jepara, Jawa Tengah 59415</p>
                </div>
            </div>
        </div>
    </div>
@endsection
