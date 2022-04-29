<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamHari extends Model
{
    public function peminjam(){
        return $this->belongsTo('App\Models\Peminjam');
    }
    use HasFactory;
}
