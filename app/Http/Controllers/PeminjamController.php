<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use Exception;
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
        try {
            $peminjam->save();
        }catch (Exception $e){
            return response()->json([
                'message'=>'Pendaftaran gagal',
                'error'=> $e,
                'data'=>$peminjam
            ],500);
        }
        return response()->json([
            'message'=>'Pendaftaran berhasil',
            'data'=>$peminjam
        ],200);
    }
}
