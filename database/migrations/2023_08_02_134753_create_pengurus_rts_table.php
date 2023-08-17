<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurusRtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus_rts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->enum('jabatan', ['Ketua', 'Wakil Ketua', 'Sekretaris', 'Bendahara', 'Anggota']);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->integer('nomer_telepon');
            $table->string('email');
            $table->string('pekerjaan');
            $table->string('foto_profil');
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
        Schema::dropIfExists('pengurus_rts');
    }
}
