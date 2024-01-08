<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
        $nama = "Evander Siregar";
        $pelajaran = ["Matematika", "Biologi", "TIK"];
        return view('biodata',['nama' => $nama], ['mapel' => $pelajaran]);
    }
}