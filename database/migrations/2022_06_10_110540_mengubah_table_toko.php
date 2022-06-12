<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MengubahTableToko extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('toko_oleh', function (Blueprint $table) {
            $table->integer('idlokasi');
            $table->string('nama_lokasi');
            $table->string('sosmed_toko');
            $table->string('website_toko');
            $table->string('alamat_toko');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
