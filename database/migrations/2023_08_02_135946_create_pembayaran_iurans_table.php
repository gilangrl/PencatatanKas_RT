<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranIuransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran_iurans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_warga');
            $table->decimal('jumlah', 10,2);
            $table->date('tanggal_pembayaran');
            $table->timestamps();

            $table->foreign('id_warga')->references('id')->on('wargas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran_iurans');
    }
}
