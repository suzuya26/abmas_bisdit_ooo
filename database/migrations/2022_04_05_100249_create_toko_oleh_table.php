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
            $table->text('fasilitas_toko');
            $table->text('jenis_sekitar');
            $table->text('kontak_toko');
            $table->longText('galeri_toko');
            $table->mediumText('galeri_toko_caption');
            $table->string('jam_buka')->nullable();
            $table->string('jam_tutup')->nullable();
            $table->bigInteger('rekomendasi_count')->nullable();
            $table->bigInteger('list_count')->nullable();
            $table->integer('idlokasi');
            $table->foreign('idlokasi')->references('idlokasi')->on('lokasi');
            $table->string('nama_lokasi');
            $table->string('sosmed_toko');
            $table->string('website_toko');
            $table->string('alamat_toko');
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
