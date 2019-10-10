<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Pegawai;

class PegawaiController extends Controller
{

    public function index()
    {
    	$pegawai = Pegawai::all();
    	return view('pegawai', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
    	return view('pegawaitambah');
    }   

    public function store(Request $request)
    {
        $message=['required' => 'Harap isi dulu...'];


    	$this->validate($request,[
            'nama' => 'required',
            'notelepon' => 'required|numeric',
            'alamat' => 'required',
    		'email' => 'required'
        ],$message);

        Pegawai::create([
            'nama' => $request->nama,
            'notelepon' => $request->notelepon,
            'alamat' => $request->alamat,
            'email' => $request->email
        ]);

    	return redirect('/pegawai');
    }

    public function edit($id)
    {
       $pegawai = Pegawai::find($id);
       return view('pegawai_edit', ['pegawai' => $pegawai]);
    }

        public function update($id, Request $request) {
            $this->validate($request,[
               'nama' => 'required',
               'notelepon' => 'required|numeric',
               'alamat' => 'required',
               'email' => 'required',
            ]);
        
            $pegawai = Pegawai::find($id);
            $pegawai->nama = $request->nama;
            $pegawai->notelepon = $request->notelepon;
            $pegawai->alamat = $request->alamat;
            $pegawai->email = $request->email;
            $pegawai->save();
            return redirect('/pegawai');
        }   

    
    Public function cari(Request $request)
    {
        $cari = $request->cari;

        if($request->has('cari')){
            $pegawai = Pegawai::where('nama', 'like', "%{$request->cari}%")
                                ->orWhere('alamat', 'like', "%{$request->cari}%")
                                ->orWhere('email', 'like', "%{$request->cari}%")
                                ->get();
        }
        return view('pegawai', ['pegawai' => $pegawai]);
    }
}