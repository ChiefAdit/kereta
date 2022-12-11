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
        Schema::create('tb_beli_tiket', function (Blueprint $table) {
            $table->id('id');
            $table->string('keberangkatan');
            $table->string('kelas');
            $table->string('tujuan');
            $table->date('tanggal_berangkat') ;
            //tanggal pulang boleh tidak di isi
            $table->date('tanggal_pulang');
            $table->integer('jumlah_penumpang');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_beli_tiket');
    }
};
