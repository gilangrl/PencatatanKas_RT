<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kegiatan');
            $table->date('tanggal_kegiatan');
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->unsignedBigInteger('id_pengurus');
            $table->timestamps();

            $table->foreign('id_pengurus')->references('id')->on('pengurus_rts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kegiatans');
    }
}
