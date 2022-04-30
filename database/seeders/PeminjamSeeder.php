<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeminjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('peminjams')->insert([
            'nama'=>'Gabriel',
            'nik'=>'2051',
            'alamat'=>'Malang',
            'pekerjaan'=>'Kuliah'
        ]);
        \DB::table('peminjams')->insert([
            'nama'=>'Gabriel',
            'nik'=>'5020',
            'alamat'=>'Malang',
            'pekerjaan'=>'Kuliah'
        ]);
        \DB::table('peminjams')->insert([
            'nama'=>'Gabriel',
            'nik'=>'0111',
            'alamat'=>'Malang',
            'pekerjaan'=>'Kuliah'
        ]);
    }
}
