<?php

namespace App\Http\Controllers;

use App\Models\PinjamBulan;
use App\Models\PinjamHari;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pembayaranController extends Controller
{
    public function store(Request $request){
        if($request->get('pilihan')=='bulan'){
            $pinjam=DB::table('pinjam_bulans')->find($request->get('ids'));
            if($pinjam->lunas==1){
                return response()->json([
                    'message'=>'pinjaman telah dilunasi'
                ]);
            }else{
                $pembagi=explode(' ',$pinjam->durasi);
                $pinjam->jumlah=$pinjam->jumlah-($pinjam->jumlah/$pembagi[0]);
                $angka=(int)$pembagi[0];
                $angka=$angka-1;
                $pinjam->durasi=$angka.' '.$pembagi[1];
                DB::table('pinjam_bulans')->where('id',$pinjam->id)->update(['jumlah'=>$pinjam->jumlah,'durasi'=>$pinjam->durasi]);
                return view('PembayaranBulan',['pinjam'=>$pinjam]);
            }
        }else{
            $pinjam=DB::table('pinjam_haris')->find($request->get('ids'));
            if($pinjam->lunas==1){
                return response()->json([
                    'message'=>'pinjaman telah dilunasi'
               ]);
            }else{
                $pembagi=explode(' ',$pinjam->durasi);
                $pinjam->jumlah=$pinjam->jumlah-($pinjam->jumlah/$pembagi[0]);
                $angka=(int)$pembagi[0];
                $angka=$angka-1;
                $pinjam->durasi=$angka.' '.$pembagi[1];
                DB::table('pinjam_haris')->where('id',$pinjam->id)->update(['jumlah'=>$pinjam->jumlah,'durasi'=>$pinjam->durasi]);
                return view('PembayaranHari',['pinjam'=>$pinjam]);
            }
        }
    }
}
