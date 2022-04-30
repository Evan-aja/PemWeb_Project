<?php

namespace App\Http\Controllers;

use App\Models\PinjamHari;
use Exception;
use Illuminate\Http\Request;

class PinjamHariController extends Controller
{
    public function create(){
        return view('createPinjamHari');
    }
    public function simulate(Request $request){
        $pinjamHari=new PinjamHari();
        $pinjamHari->jumlah=$request->get('jumlah');
        $pinjamHari->durasi=$request->get('durasi');
        $pinjamHari->peminjam_id=$request->get('peminjam_id');
        if($pinjamHari->jumlah>=20000000){
            return response()->json([
                'message'=>'Peminjaman Berjangka Harian gagal karena pinjaman terlalu tinggi',
            ],400);
        }else if($pinjamHari->jumlah<=0){
            return response()->json([
                'message'=>'Peminjaman Berjangka Harian gagal karena pinjaman terlalu rendah',
            ],400);
        }
        return view('simulatePinjamHari',['pinjamhari'=>$pinjamHari]);
    }
    public function store(Request $request){
        $pinjamHari=new PinjamHari();
        $pinjamHari->jumlah=$request->get('jumlah');
        $pinjamHari->durasi=$request->get('durasi');
        $pinjamHari->peminjam_id=$request->get('peminjam_id');
        if($pinjamHari->jumlah>=20000000){
            return response()->json([
                'message'=>'Peminjaman Berjangka Harian gagal karena pinjaman terlalu tinggi',
            ],400);
        }else if($pinjamHari->jumlah<=0){
            return response()->json([
                'message'=>'Peminjaman Berjangka Harian gagal karena pinjaman terlalu rendah',
            ],400);
        }
        try {
            $pinjamHari->save();
        }catch (Exception $e){
            return response()->json([
                'message'=>'Peminjaman Berjangka Harian gagal',
                'error'=> $e,
                'data'=>[
                    'jumlah'=>$request->get('jumlah'),
                    'durasi'=>$request->get('durasi'),
                    'batas_lunas'=>date_add(date_create(NOW()),date_interval_create_from_date_string($request->get('durasi')))
                ]
            ],500);
        }
//        return response()->json([
//            'message'=>'Peminjaman Berjangka Harian berhasil',
//            'data'=>[
//                'jumlah'=>$request->get('jumlah'),
//                'durasi'=>$request->get('durasi'),
//                'batas_lunas'=>date_add(date_create(NOW()),date_interval_create_from_date_string($request->get('durasi'))),
//                'peminjam'=>\App\Models\Peminjam::find($request->get('peminjam_id'))->nama,
//                'nik'=>\App\Models\Peminjam::find($request->get('peminjam_id'))->nik
//            ]
//        ],200);
        return view('resultPinjamHari',['pinjamhari'=>$pinjamHari]);
    }
}
