<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiFarmasiDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_farmasi_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaksi_id');
            $table->string('nama_obat');
            $table->integer('obat_id');
            $table->integer('jumlah');
            $table->decimal('harga',20,2);
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
        Schema::dropIfExists('transaksi_farmasi_detail');
    }
}
