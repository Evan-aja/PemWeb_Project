<?php

namespace App\Http\Controllers;

use App\Models\PinjamBulan;
use App\Models\PinjamHari;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cekPembayaranController extends Controller
{
    public function create(){
        return view('cekPembayaran');
    }
    public function store(Request $request){
        if($request->get('pilihan')=='bulan'){
            $pinjam=new PinjamBulan();
            $pinjam=DB::table('pinjam_bulans')->find($request->get('ids'));
            if($pinjam->lunas==1){
                return response()->json([
                    'message'=>'pinjaman telah dilunasi'
                ]);
            }else{
                return view('PembayaranBulan',['pinjam'=>$pinjam]);
            }
        }else{
            $pinjam=new PinjamHari();
            $pinjam=DB::table('pinjam_haris')->find($request->get('ids'));
            if($pinjam->lunas==1){
                return response()->json([
                    'message'=>'pinjaman telah dilunasi'
                ]);
            }else{
                return view('PembayaranHari',['pinjam'=>$pinjam]);
            }
        }
    }
}
