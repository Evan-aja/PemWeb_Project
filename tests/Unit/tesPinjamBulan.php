<?php

namespace Tests\Unit;

use Tests\TestCase;

class tesPinjamBulan extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_pinjam_bulan_form(): void
    {
        $response=$this->get(route('pinjambulan.create'));
        $response->assertStatus(200);
    }
    public function test_pinjam_bulan_test(): void
    {
        $response=$this->post(route('pinjambulan.store'),[
            'jumlah' => 20000000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "6 Months",
            'peminjam_id' => '1'
        ]);
        $response->assertStatus(200);
    }
    public function test_simulate_bulan_test(): void
    {
        $response=$this->post(route('pinjambulan.simulate'),[
            'jumlah' => 20000000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "6 Months",
            'peminjam_id' => '1'
        ]);
        $response->assertStatus(200);
    }
    public function test_pinjam_bulan_test_fail(): void
    {
        $response=$this->post(route('pinjambulan.store'),[
            'jumlah' => 2000000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "6 Months",
            'peminjam_id' => '1'
        ]);
        $response->assertStatus(400);
    }
    public function test_simulate_bulan_test_fail(): void
    {
        $response=$this->post(route('pinjambulan.simulate'),[
            'jumlah' => 2000000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "6 Months",
            'peminjam_id' => '1'
        ]);
        $response->assertStatus(400);
    }
}
