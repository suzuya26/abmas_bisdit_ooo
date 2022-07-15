<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempatbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempatbeli', function (Blueprint $table) {
            $table->id('idtempatbeli');
            $table->string('merk',25);
            $table->mediumText('gambarproduk');
            $table->text('varianjual');
            $table->bigInteger('idoleh')->unsigned()->nullable();
            $table->foreign('idoleh')->references('idoleh')->on('varianoleh');
            $table->bigInteger('idlokasi')->unsigned()->nullable();
            $table->foreign('idlokasi')->references('idlokasi')->on('lokasi');
            $table->bigInteger('idmitra')->nullable()->unsigned();
            $table->foreign('idmitra')->references('idmitra')->on('mitra');
            $table->text('bundle')->nullable();
            $table->string('kemasan')->nullable();
            $table->text('alamat')->nullable();
            $table->text('link')->nullable();
            $table->mediumText('google_map')->nullable();
            $table->string('jambuka')->nullable();
            $table->string('rentang_harga')->nullable();
            $table->text('best_seller')->nullable();
            $table->string('satuan')->nullable();
            $table->tinyInteger('bpom')->nullable();
            $table->string('cara_bayar')->nullable();
            $table->string('sosmed')->nullable();
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
        Schema::dropIfExists('tempatbeli');
    }
}
