<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResepDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resep_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resep_id');
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
        Schema::dropIfExists('resep_detail');
    }
}
