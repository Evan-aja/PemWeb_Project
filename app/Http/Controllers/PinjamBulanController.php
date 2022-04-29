<?php

namespace App\Http\Controllers;

use App\Models\PinjamBulan;
use Illuminate\Http\Request;

class PinjamBulanController extends Controller
{
    public function create(){
        return view('createPinjamBulan');
    }
    public function store(Request $request){
        $pinjamBulan=new PinjamBulan();
        $pinjamBulan->jumlah=$request->get('jumlah');
        $pinjamBulan->durasi=date_add(date_create(NOW()),date_interval_create_from_date_string($request->get('durasi')));
        $pinjamBulan->peminjam_id=$request->get('peminjam_id');
    }
}
