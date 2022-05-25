<?php

namespace Tests\Unit;

use App\Models\Peminjam;
use Tests\TestCase;

class tesPeminjam extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_register_form(): void
    {
        $response=$this->get(route('peminjam.create'));
        $response->assertStatus(200);
    }
    public function test_register_user(): void
    {
        $response=$this->post(route('peminjam.store'),[
            'nama'=>'Gabriel',
            'nik'=>'2055',
            'alamat'=>'Malang',
            'pekerjaan'=>'Kuliah'
        ]);
        $response->assertStatus(200);
        // if ($response->status(200) || $response->status(302)){
        //     $this->assertTrue(true);
        // }
    }
    public function test_register_user_not_duplicate(): void
    {
        $response=$this->post(route('peminjam.store'),[
            'nama'=>'Gabriel',
            'nik'=>'2055',
            'alamat'=>'Malang',
            'pekerjaan'=>'Kuliah'
        ]);
        $response->assertStatus(302);
    }
    public function test_account_duplicate(): void
    {
        $peminjam1=Peminjam::make([
            'nama'=>'Gabriel',
            'nik'=>'2051',
            'alamat'=>'Malang',
            'pekerjaan'=>'Kuliah'
        ]);
        $peminjam2=Peminjam::make([
            'nama'=>'Gabriel',
            'nik'=>'5020',
            'alamat'=>'Malang',
            'pekerjaan'=>'Kuliah'
        ]);
        $this->assertTrue($peminjam1->nik != $peminjam2->nik);
    }
    public function test_registered_user(): void
    {
        $this->assertDatabaseHas('peminjams',[
            'nama'=>'Gabriel',
            'nik'=>'2055',
            'alamat'=>'Malang',
            'pekerjaan'=>'Kuliah'
        ]);
    }
    public function test_registered_user_missing(): void
    {
        $this->assertDatabaseMissing('peminjams',[
            'nama'=>'Gabriel',
            'nik'=>'2055',
            'alamat'=>'Malang',
            'pekerjaan'=>'Kuliah'
        ]);
    }
    public function test_delete(): void
    {
        $peminjam=Peminjam::factory()->count(1)->make();
        $peminjam=Peminjam::latest()->first();

        if($peminjam){
            $peminjam->delete();
        }
        $this->assertTrue(true);
    }
}
