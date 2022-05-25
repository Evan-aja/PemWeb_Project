<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    protected $fillable = [
        'nama',
        'nik',
        'alamat',
        'pekerjaan'
    ];
    public function pinjambulan(){
        return $this->hasMany('App\Models\PinjamBulan');
    }
    public function pinjamhari(){
        return $this->hasMany('App\Models\PinjamHari');
    }
    use HasFactory;
}
