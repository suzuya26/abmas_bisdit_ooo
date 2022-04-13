<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokoMitra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toko_mitra', function (Blueprint $table) {
            $table->id('idmitra');
            $table->string('nama_mitra');
            $table->string('alamat_mitra');
            $table->mediumText('gambar_utama')->nullable();
            $table->mediumText('map_mitra')->nullable();
            $table->string('jam_operasional')->nullable();
            $table->text('fasilitas_mitra')->nullable();
            $table->text('sekitar_mitra')->nullable();
            $table->text('kontak_mitra')->nullable();
            $table->text('website_mitra')->nullable();
            $table->text('sosmed_mitra')->nullable();
            $table->longText('galeri_mitra')->nullable();
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
        Schema::dropIfExists('toko_mitra');
    }
}
