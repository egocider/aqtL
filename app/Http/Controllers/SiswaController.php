<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;
class SiswaController extends Controller {

    public function index(){
 $siswa = Siswa::all();

        // $siswa = Siswa::where('id','>=', 2)->get();


        return view('siswa', ['siswa' => $siswa]);
    }
    
    
}