<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListToko extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_toko', function (Blueprint $table) {
            $table->id('idlisttoko');
            $table->bigInteger('idtoko')->unsigned();
            $table->foreign('idtoko')->references('idtoko')->on('toko_oleh')->onDelete('cascade');
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_toko');
    }
}
