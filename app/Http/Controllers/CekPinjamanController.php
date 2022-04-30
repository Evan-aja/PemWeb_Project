<?php

namespace App\Http\Controllers;

use App\Models\PinjamBulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CekPinjamanController extends Controller
{
    public function cek(Request $request){
        $pinjambulan=DB::table('pinjam_bulans')->where('peminjam_id',$request->get('id'))->get();
        $pinjamhari=DB::table('pinjam_haris')->where('peminjam_id',$request->get('id'))->get();
        return view('cekPinjaman',['pinjambulan'=>$pinjambulan,'pinjamhari'=>$pinjamhari]);
    }
}
