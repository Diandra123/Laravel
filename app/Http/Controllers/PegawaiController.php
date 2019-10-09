<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    // public function index()
    // {
    // 	$pegawai = DB::table('pegawai')->get();
 
    // 	return view('index',['pegawai' => $pegawai]);
 
    // }

    public function cari(Request $request)
	{
        $cari = $request->cari;


    public function store(Request $request)
    {

        $message=[
            'required'=> 'Harap isi bidang ini...'
        ];

    	$this->validate($request,[
            'nama' => 'required',
            'notelepon' => 'required|numeric',
            'alamat' => 'required',
            'email' => 'required'
],$message);
    
        $pegawai = DB::table('pegawai')
                    ->where('nama', 'like', "%{$request->cari}%")
                    ->orWhere('alamat', 'like', "%{$request->cari}%")
                    ->orWhere('email', 'like', "%{$request->cari}%")
                    ->get();
        
         return view('index',['pegawai' => $pegawai]);

          // $pegawai = DB::table('pegawai')
        // ->where('email','like',"%".$cari."%")
        // ->paginate();

        // return view('index',['pegawai' => $pegawai]);
            
	}
}
