<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    public function create(){
        return view('createPeminjam');
    }
    public function store(Request $request){
        $peminjam=new Peminjam();
        $peminjam->nama=$request->get('nama');
        $peminjam->nik=$request->get('nik');
        $peminjam->alamat=$request->get('alamat');
        $peminjam->pekerjaan=$request->get('pekerjaan');
        $peminjam->save();
        return 'sukses';
    }
}
