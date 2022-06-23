<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVarianolehTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('varianoleh', function (Blueprint $table) {
            $table->id('idoleh'); // aman
            $table->string('namaoleh',25); // aman
            $table->string('namalain',255)->nullable(); // aman
            $table->text('gambarutama'); // aman
            $table->mediumText('gambaroleh'); // aman
            $table->text('deskripsioleh'); // aman
            $table->bigInteger('idjenis')->unsigned(); // aman
            $table->foreign('idjenis')->references('idjenis')->on('jenisoleh');
            $table->bigInteger('id_varian')->nullable()->unsigned(); // aman
            $table->foreign('id_varian')->references('id_varian')->on('varianjenis');
            $table->bigInteger('idrasa')->unsigned(); // aman
            $table->foreign('idrasa')->references('idrasa')->on('rasa');
            $table->bigInteger('idtekstur')->unsigned(); // aman
            $table->foreign('idtekstur')->references('idtekstur')->on('tekstur');
            $table->bigInteger('idbahan')->unsigned(); // aman
            $table->foreign('idbahan')->references('idbahan')->on('bahandasar');
            $table->string('komposisi',255); // aman
            $table->bigInteger('idmasak')->unsigned(); // aman
            $table->foreign('idmasak')->references('idmasak')->on('masak');
            $table->bigInteger('idlokasi')->unsigned(); // aman
            $table->foreign('idlokasi')->references('idlokasi')->on('lokasi');
            $table->string('satuan');
            $table->boolean('statushalal')->nullable(); // aman
            $table->string('kadarluarsa'); // aman
            $table->string('carapenyimpanan',255); // aman
            $table->string('carapenyajian',255); // aman
            $table->text('trivia')->nullable(); // aman
            $table->string('namacocok',25); // aman
            $table->bigInteger('idmitra')->nullable()->unsigned(); // aman
            $table->foreign('idmitra')->references('idmitra')->on ('mitra');
            $table->bigInteger('favorit_count')->nullable();
            $table->integer('hargamin')->nullable();
            $table->integer('hargamax')->nullable();
            $table->boolean('vegan')->nullable();
            $table->boolean('vegetarian')->nullable();
            $table->boolean('gluten_free')->nullable();
            $table->bigInteger('list_count')->nullable();
            $table->bigInteger('rekomendasioleh_count')->nullable();
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
        Schema::dropIfExists('varianoleh');
    }
}
