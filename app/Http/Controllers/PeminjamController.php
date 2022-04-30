<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;

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
            $peminjam=DB::table('peminjams')->where('nik',$peminjam->nik)->first();
        }catch (Exception $e){
            return redirect()->back() ->with('alert', 'Pendaftaran Gagal');
        }
//        return response()->json([
//            'message'=>'Pendaftaran berhasil',
//            'data'=>$peminjam
//        ],200);
        return view('pendaftaran_sukses',['peminjam'=>$peminjam]);
    }
}
