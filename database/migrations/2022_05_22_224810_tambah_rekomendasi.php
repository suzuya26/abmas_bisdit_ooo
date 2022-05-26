<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tambahrekomendasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekomendasi', function (Blueprint $table) {
            $table->id('idrekomendasi');
            $table->bigInteger('idtoko')->unsigned();
            $table->foreign('idtoko')->references('idtoko')->on('toko_oleh');
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekomendasi');
    }
}
