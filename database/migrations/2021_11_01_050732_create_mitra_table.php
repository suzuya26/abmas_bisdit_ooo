<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitra', function (Blueprint $table) {
            $table->id('idmitra');
            $table->string('namamitra',25);
            $table->string('kontak',25);
            $table->bigInteger('idlokasi')->unsigned();
            $table->foreign('idlokasi')->references('idlokasi')->on('lokasi');
            $table->mediumText('foto_mitra');
            $table->text('deskripsimitra');
            $table->string('cicip');
            $table->mediumText('gmap_mitra');
            $table->string('alamat_mitra');
            $table->string('jam_buka_mitra');
            $table->string('jam_tutup_mitra');
            $table->text('link');
            $table->mediumInteger('galeri_toko');
            $table->mediumText('galeri_toko_caption');
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
        Schema::dropIfExists('mitra');
    }
}
