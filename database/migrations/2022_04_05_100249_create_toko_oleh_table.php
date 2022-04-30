<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokoOlehTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toko_oleh', function (Blueprint $table) {
            $table->id('idtoko');
            $table->string('nama_toko');
            $table->mediumText('gambar_utama');
            $table->mediumText('map_toko');
            $table->string('jam_operasional');
            $table->text('fasilitas_toko');
            $table->text('sekitar_toko');
            $table->text('kontak_toko');
            $table->longText('galeri_toko');
            $table->string('galeri_toko_caption');
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
        Schema::dropIfExists('toko_oleh');
    }
}
