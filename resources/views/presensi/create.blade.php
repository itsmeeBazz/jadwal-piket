@extends('layouts.layout')

@section('header')
    {{-- App Header --}}
    <nav class="bg-white flex shadow-md w-full h-[5rem] items-center justify-center">
        <h1 class="text-primary text-center text-2xl font-semibold">Camera</h1>
    </nav>
@endsection

@section('content')
    <div class="w-full h-full bg-primary bg-[#E6FBF0]">
        <div class="w-[90%] h-screen bg-[#E6FBF0] mx-auto flex flex-col">
            <div id="kamera" class="webcam-capture"></div>
            @if ($cek > 0)
                <div class="">Anda Sudah </div>
                <button id="takeabsen" class="hover:cursor-pointer text-white b bg-[#02C05A] rounded-lg h-14">Take Absen</button>
            @else
                <button id="takeabsen" class="hover:cursor-pointer text-white bg-[#02C05A] rounded-lg h-14">Kirim</button>
            @endif
            <h1 class="text-lg font-bold mt-5">Bukti Piket</h1>
            <span class="text-base text-text-primary" id="clock"></span>
        </div>
    </div>

    <style>
       .webcam-capture,
       .webcam-capture video {
            display: inline-block;
            width: 100%!important;
            margin: 10px 0px 10px 0px;
            height: auto!important;
            border-radius: 15px;
        }
    </style>
@endsection

@push('myscript')
    <script>
        let myLet = setInterval(function(){
            myTimer();
        },1000);

        function myTimer() {
            let d = new Date();
            document.getElementById("clock").innerHTML = d.toLocaleString();
        }

        Webcam.set({
            height: 480,
            width: 640,
            image_format: 'jpeg',
            jpeg_quality: 80,
            flip_horiz: true
        });
        Webcam.attach('.webcam-capture');

        $("#takeabsen").click(function(e){
            Webcam.snap(function(uri) {
                image = uri;
            });
            $.ajax({
                type: "POST",
                url: '/presensi/store',
                data:{
                    _token: "{{ csrf_token() }}",
                    image:image,
                },
                cache:false,
                success:function(respond){
                    if(respond == "0"){
                        Swal.fire({
                            title: 'Berhasil!',
                            text: 'Terimakasih',
                            icon: 'succes',
                            confirmButtonText: 'Oke'
                        })
                    }else{
                        Swal.fire({
                            title: 'Berhasil!',
                            text: 'Terimakasih ',
                            icon: 'succes',
                            confirmButtonText: 'Oke'
                        })
                    }
                }
            });
        });
    </script>
@endpush
