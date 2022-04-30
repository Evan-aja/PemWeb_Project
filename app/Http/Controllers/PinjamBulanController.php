<?php

namespace App\Http\Controllers;

use App\Models\PinjamBulan;
use Exception;
use Illuminate\Http\Request;

class PinjamBulanController extends Controller
{
    public function create(){
        return view('createPinjamBulan');
    }
    public function simulate(Request $request){
        $pinjamBulan=new PinjamBulan();
        $pinjamBulan->jumlah=$request->get('jumlah');
        $pinjamBulan->durasi=$request->get('durasi');
        $pinjamBulan->peminjam_id=$request->get('peminjam_id');
        if($pinjamBulan->jumlah<20000000){
            return response()->json([
                'message'=>'Peminjaman Berjangka Bulanan gagal karena pinjaman terlalu rendah',
            ],400);
        }
        return view('simulatePinjamBulan',['pinjambulan'=>$pinjamBulan]);
    }
    public function store(Request $request){
        $pinjamBulan=new PinjamBulan();
        $pinjamBulan->jumlah=$request->get('jumlah');
        $pinjamBulan->durasi=$request->get('durasi');
        $pinjamBulan->peminjam_id=$request->get('peminjam_id');
        if($pinjamBulan->jumlah<20000000){
            return response()->json([
                'message'=>'Peminjaman Berjangka Bulanan gagal karena pinjaman terlalu rendah',
            ],400);
        }
        try {
            $pinjamBulan->save();
        }catch (Exception $e){
            return response()->json([
                'message'=>'Peminjaman Berjangka Bulanan gagal',
                'error'=> $e,
                'data'=>[
                    'jumlah'=>$request->get('jumlah'),
                    'durasi'=>$request->get('durasi'),
                    'batas_kembali'=>date_add(date_create(NOW()),date_interval_create_from_date_string($request->get('durasi')))
                ]
            ],500);
        }
//        return response()->json([
//            'message'=>'Peminjaman Berjangka Bulanan berhasil',
//            'data'=>[
//                'id'=>$pinjamBulan->id,
//                'jumlah'=>$request->get('jumlah'),
//                'durasi'=>$request->get('durasi'),
//                'batas_kembali'=>date_add(date_create(NOW()),date_interval_create_from_date_string($request->get('durasi'))),
//                'peminjam'=>\App\Models\Peminjam::find($request->get('peminjam_id'))->nama,
//                'nik'=>\App\Models\Peminjam::find($request->get('peminjam_id'))->nik
//            ]
//        ],200);
        return view('peminjaman_5');
    }
}
