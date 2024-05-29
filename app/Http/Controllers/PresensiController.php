<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PresensiController extends Controller
{
    public function create(){
        $hariini = date("Y-m-d");
        $nama = Auth::user()->name;
        $cek = DB::table('pikets')->where('tanggal', $hariini)->where('nama', $nama)->count();
        return view('presensi.create', compact('cek'));
    }


    public function store(Request $request){
        $nama = Auth::user()->name;
        $jam = date("H:i:s");
        $tanggal = date("Y-m-d");
        $image = $request->image;
        $folderPath = "public/uploads/piket/";
        $formatName = $nama . "-" . $tanggal;
        $image_parts = explode(";base64,", $image);
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = $formatName.".png";
        $file = $folderPath.$fileName;
        $cek = DB::table('pikets')->where('tanggal', $tanggal)->where('nama', $nama)->count();

        // update data
        if ($cek > 0) {
            $data_update = [
                'nama' => $nama,
                'tanggal' => $tanggal,
                'jam' => $jam,
                'foto' => $file
            ];
            $update = DB::table('pikets')->where('tanggal', $tanggal)->where('nama', $nama)->update($data_update);
            if ($update) {
                echo "0";
                Storage::put($file, $image_base64);
            } else{
                echo" 1";
            }
        }   else{
            $data = [
                'nama' => $nama,
                'tanggal' => $tanggal,
                'jam' => $jam,
                'foto' => $file
            ];
    
            $simpan = DB::table('pikets')->insert($data);
            if($simpan){
                echo "Terimakasih";
                Storage::put($file, $image_base64);
            }else{
                echo "error";
            }
        }
        // $data = [
        //     'nama' => $nama,
        //     'tanggal' => $tanggal,
        //     'jam' => $jam,
        //     'foto' => $file
        // ];

        // $simpan = DB::table('pikets')->insert($data);
        // if($simpan){
        //     echo "Terimakasih";
        //     Storage::put($file, $image_base64);
        // }else{
        //     echo "error|";
        // }
    }

    public function histori(){
        $data = User::where('role', 'siswa')->get();
        return view('presensi.histori', compact('data'));
    }

    public function logRiwayat($id){
        $histori = DB::table('pikets')->where('nama', $id)->get();
        return view('presensi.log-riwayat', compact('histori'));
    }
}
