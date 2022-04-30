<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam_bulans', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('lunas')->default(false);
            $table->double('jumlah');
            $table->string('durasi');
            $table->integer('peminjam_id')->unsigned();
            $table->foreign('peminjam_id')->references('id')->on('peminjams');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjam_bulans');
    }
};
