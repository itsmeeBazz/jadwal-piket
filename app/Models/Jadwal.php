<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Jadwal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    
    public static function cekHari(){
        $data = [
            'hari' => [
                'senin' => [
                    'abas',
                    'derren'
                ],
                'Friday' => [
                    'asya',
                    'Abas'
                ]
            ]
        ];
        $waktu = date('l');
        if(in_array($waktu, array_keys($data['hari'])) ){
            Log::info('mantap');
            Log::info($data['hari'][$waktu]);
        }
    }
}

$data = User::all();
return view('home', compact('data'));