<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$list = DB::table('list')->get();
 
    	// mengirim data pegawai ke view index
		return view('index',['list' => $list]);

    }
    // method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('list')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/siswa');

}

}
