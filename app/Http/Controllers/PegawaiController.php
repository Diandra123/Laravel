<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pegawai;

class PegawaiController extends Controller
{

    public function index(Request $request, $sort = 'desc')
    {   
    	// $pegawai = Pegawai::all();
        $pegawai = Pegawai::orderBy('created_at', $sort)->get();

    	return view('pegawai', ['pegawai' => $pegawai, 'sort' => $sort]);
    }

    //      public function index()
    // {
    //     // mengambil data dari table pegawai
    //     $list = DB::table('list')->get();
 
    //     // mengirim data pegawai ke view index
    //     return view('index',['list' => $list]);

    // }

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

    	return redirect('/pegawai')->with('simpan', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data berhasil di tambah!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
    }

    public function hapus($id)
    {
        DB::table('pegawai')->where('id',$id)->delete();
        
        // return redirect('/pegawai');

        return redirect('/pegawai')->with('hapus', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data berhasil di hapus!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');


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

           return redirect('/pegawai')->with('ubah', '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Data berhasil di uabah!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
        }   

    
    Public function cari(Request $request, $sort = 'desc')
    {
        $cari = $request->cari;

        if($request->has('cari')){
            $pegawai = Pegawai::where('nama', 'like', "%{$request->cari}%")
                                ->orWhere('alamat', 'like', "%{$request->cari}%")
                                ->orWhere('email', 'like', "%{$request->cari}%")
                                ->get();
        }
        return view('pegawai', ['pegawai' => $pegawai, 'sort' => $sort]);
    }
}