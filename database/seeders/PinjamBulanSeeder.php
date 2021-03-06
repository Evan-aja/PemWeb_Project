<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PinjamBulanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pinjam_bulans')->insert([
            'jumlah' => 20000000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "6 Months",
            'peminjam_id' => '3'
        ]);
        \DB::table('pinjam_bulans')->insert([
            'jumlah' => 21000000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "6 Months",
            'peminjam_id' => '3'
        ]);
        \DB::table('pinjam_bulans')->insert([
            'jumlah' => 40000000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "6 Months",
            'peminjam_id' => '1'
        ]);
        \DB::table('pinjam_bulans')->insert([
            'jumlah' => 20540000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "6 Months",
            'peminjam_id' => '2'
        ]);
        \DB::table('pinjam_bulans')->insert([
            'jumlah' => 20000000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "6 Months",
            'peminjam_id' => '1'
        ]);
    }
}
