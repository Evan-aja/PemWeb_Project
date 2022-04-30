<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PinjamHariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pinjam_haris')->insert([
            'jumlah' => 2000000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "7 Days",
            'peminjam_id' => '3'
        ]);
        \DB::table('pinjam_haris')->insert([
            'jumlah' => 2100000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "7 Days",
            'peminjam_id' => '3'
        ]);
        \DB::table('pinjam_haris')->insert([
            'jumlah' => 4000000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "7 Days",
            'peminjam_id' => '1'
        ]);
        \DB::table('pinjam_haris')->insert([
            'jumlah' => 2054000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "7 Days",
            'peminjam_id' => '2'
        ]);
        \DB::table('pinjam_haris')->insert([
            'jumlah' => 2000000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "7 Days",
            'peminjam_id' => '1'
        ]);
    }
}
