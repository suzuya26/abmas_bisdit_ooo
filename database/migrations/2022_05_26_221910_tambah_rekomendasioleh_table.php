<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahRekomendasiolehTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekomendasioleh', function (Blueprint $table) {
            $table->id('idrekomendasioleh');
            $table->bigInteger('idoleh')->unsigned();
            $table->foreign('idoleh')->references('idoleh')->on('varianoleh');
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
        });
        Schema::table('varianoleh', function (Blueprint $table) {
           $table->bigInteger('rekomendasioleh_count')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekomendasiOleh');
    }
}
