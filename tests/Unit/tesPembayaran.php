<?php

namespace Tests\Unit;

use Tests\TestCase;

class tesPembayaran extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_bayar_form(): void
    {
        $response=$this->get(route('cekbayar.create'));
        $response->assertStatus(200);
    }
    public function test_bayar_cek_bulan(): void
    {
        $response=$this->post(route('cekbayar.store'),[
            'ids'=>1,
            'pilihan'=>'bulan'
        ]);
        $response->assertStatus(200);
    }
    public function test_bayar_cek_hari(): void
    {
        $response=$this->post(route('cekbayar.store'),[
            'ids'=>1,
            'pilihan'=>'hari'
        ]);
        $response->assertStatus(200);
    }
    public function test_bayar_pay_bulan(): void
    {
        $response=$this->post(route('bayar.store'),[
            'ids'=>1,
            'pilihan'=>'bulan'
        ]);
        $response->assertStatus(200);
    }
    public function test_bayar_pay_hari(): void
    {
        $response=$this->post(route('bayar.store'),[
            'ids'=>1,
            'pilihan'=>'hari'
        ]);
        $response->assertStatus(200);
    }
}
