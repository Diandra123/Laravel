<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pegawai;

class SiswaController extends Controller
{
	public function index(Request $request , $sort = 'desc')
	{
		$list = Pegawai::orderBy('tanggaldaftar', $sort)->get();
		return view('index', ['list' => $list, 'sort'=> $sort]);
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
