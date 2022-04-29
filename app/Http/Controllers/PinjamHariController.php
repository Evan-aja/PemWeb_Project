<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class PinjamHariController extends Controller
{
    public function create(){
        return view('createPinjamHari');
    }
    public function store(Request $request){
        $pinjamHari=new PinjamHari();
        $pinjamHari->jumlah=$request->get('jumlah');
        $pinjamHari->durasi=date_add(date_create(NOW()),date_interval_create_from_date_string($request->get('durasi')));
        $pinjamHari->peminjam_id=$request->get('peminjam_id');
        try {
            $pinjamHari->save();
        }catch (Exception $e){
            return response()->json([
                'message'=>'Peminjaman Berjangka Harian gagal',
                'error'=> $e,
                'data'=>[
                    'jumlah'=>$request->get('jumlah'),
                    'durasi'=>$request->get('durasi'),
                    'batas_lunas'=>date_add(date_create(NOW()),date_interval_create_from_date_string($request->get('durasi'))),
                    'peminjam'=>\App\Models\Peminjam::find($request->get('peminjam_id'))->nama,
                    'nik'=>\App\Models\Peminjam::find($request->get('peminjam_id'))->nik
                ]
            ],500);
        }
        return response()->json([
            'message'=>'Peminjaman Berjangka Harian berhasil',
            'data'=>[
                'jumlah'=>$request->get('jumlah'),
                'durasi'=>$request->get('durasi'),
                'batas_lunas'=>date_add(date_create(NOW()),date_interval_create_from_date_string($request->get('durasi'))),
                'peminjam'=>\App\Models\Peminjam::find($request->get('peminjam_id'))->nama,
                'nik'=>\App\Models\Peminjam::find($request->get('peminjam_id'))->nik
            ]
        ],200);
    }
}
