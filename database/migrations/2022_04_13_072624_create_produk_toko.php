<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukToko extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_toko', function (Blueprint $table) {
            $table->id('id_produk');
            $table->string('nama_produk');
            $table->mediumText('gambar_produk');
            $table->integer('harga_produk');
            $table->string('kemasan_produk');
            $table->bigInteger('idtoko')->unsigned();
            $table->foreign('idtoko')->references('idtoko')->on('toko_oleh');
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
        Schema::dropIfExists('produk_toko');
    }
}
