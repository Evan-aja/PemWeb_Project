<?php

namespace Tests\Unit;

use Tests\TestCase;

class tesPinjamHari extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_pinjam_hari_form(): void
    {
        $response=$this->get(route('pinjamhari.create'));
        $response->assertStatus(200);
    }
    public function test_pinjam_hari_test(): void
    {
        $response=$this->post(route('pinjamhari.store'),[
            'jumlah' => 2000000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "7 Days",
            'peminjam_id' => '3'
        ]);
        $response->assertStatus(200);
    }
    public function test_simulate_hari_test(): void
    {
        $response=$this->post(route('pinjamhari.simulate'),[
            'jumlah' => 2000000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "7 Days",
            'peminjam_id' => '3'
        ]);
        $response->assertStatus(200);
    }
    public function test_pinjam_hari_test_fail(): void
    {
        $response=$this->post(route('pinjamhari.store'),[
            'jumlah' => 20000000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "7 Days",
            'peminjam_id' => '3'
        ]);
        $response->assertStatus(400);
    }
    public function test_simulate_hari_test_fail(): void
    {
        $response=$this->post(route('pinjamhari.simulate'),[
            'jumlah' => 20000000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
            'durasi' => "7 Days",
            'peminjam_id' => '3'
        ]);
        $response->assertStatus(400);
    }
}
