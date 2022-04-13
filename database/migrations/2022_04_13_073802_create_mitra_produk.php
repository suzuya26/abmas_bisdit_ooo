<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitraProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitra_produk', function (Blueprint $table) {
            $table->id('id_produk_mitra');
            $table->string('nama_produk_mitra');
            $table->mediumText('gambar_produk_mitra');
            $table->integer('harga_produk_mitra');
            $table->string('kemasan_produk_mitra');
            $table->bigInteger('idmitra')->unsigned();
            $table->foreign('idmitra')->references('idmitra')->on('toko_mitra');
            $table->bigInteger('idoleh')->unsigned();
            $table->foreign('idoleh')->references('idoleh')->on('varianoleh');
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
        Schema::dropIfExists('mitra_produk');
    }
}
