@extends('layouts.layout')
@section('header')
    {{-- App Header --}}
    <nav class="bg-white flex shadow-md w-full h-[5rem] items-center justify-center">
        <h1 class="text-primary text-center text-2xl font-semibold">Camera</h1>
    </nav>
@endsection
@section('content')
    <div class="w-full h-auto">
        <div class="container items-center mt-3">
            <div class="webcam-capture"></div>
            <button id="takeabsen" class="btn-block btn btn-primary">Take Absen</button>
        </div>
        <h1 class="text-lg font-bold mt-5">Bukti Piket</h1>
        <textarea name="keterangan" id="keterangan" placeholder="Keterangan" cols="30" rows="10" class="w-[90%] rounded-lg h-auto border-primary"></textarea>
    </div>

    <style>
        .webcam-capture,
        .webcam-capture video {
            display: inline-block;
            width: 95% !important;
            margin-left: 8px ;
            height: auto !important;
            border-radius: 15px;
        }
    </style>
@endsection

@push('myscript')
<script>
    Webcam.set({
        height: 480,
        width: 640,
        image_format: 'jpeg',
        jpeg_quality: 80,
        flip_horiz: true
    });

    Webcam.attach('.webcam-capture');

    $("#takeabsen").click(function(){
        // (Webcam.snap(function(uri){
        //     image = uri;
        // }));

        alert('tes');
    });
</script>
@endpush
