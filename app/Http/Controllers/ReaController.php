<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReaController extends Controller
{
    public function input() {
        return view('input');
    }

    public function proses(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'jabatan' => 'required',
            'umur' => 'required|numeric',
            'alamat' => 'required'
        ]);

        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        return view('proses',['data' => $request]); 
    }
}