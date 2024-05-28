<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        return view('admin.jadwal.index', [
            'jadwals' => Jadwal::orderBy('id', 'desc')->get()
        ]);
    }

    #Halaman Create
    public function create()
    {
        $hari = [
            'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
        ];

        return view('admin.jadwal.create', compact('hari'));
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'hari' => 'required',
        ];

        $messages = [
            'nama.required' => 'nama wajib diisi!',
            'hari.required' => 'hari wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);


        Jadwal::create([
            'nama' => $request->nama,
            'hari' => $request->hari,
        ]);

        return redirect(route('jadwal'))->with('success', 'data berhasil di simpan');
    }

    public function edit($id)
    {
        $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat',];
        $jadwal = Jadwal::find($id);    
        return view('admin.jadwal.edit', [
            'jadwal' => $jadwal,
            'hari' => $hari
        ]);
    }

    #Fungsi Update
    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::find($id);


        $rules = [
            'nama' => 'required',
            'hari' => 'required',
        ];

        $messages = [
            'nama.required' => 'nama wajib diisi!',
            'hari.required' => 'Hari wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);
        $jadwal->update([
            'nama' => $request->nama,
            'hari' => $request->hari,
        ]);

        return redirect(route('jadwal'))->with('success', 'data berhasil di update');
    }

    #Fungsi Delete
    public function destroy($id)
    {
        $jadwal = Jadwal::find($id);

        if (!$jadwal) {
            return redirect(route('jadwal'))->with('error', 'Data tidak ditemukan.');
        }

        $jadwal->delete();

        return redirect(route('jadwal'))->with('success', 'data berhasil di hapus');
    }
}
