<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVarianjenisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('varianjenis', function (Blueprint $table) {
            $table->id('id_varian');
            $table->string('namavarian',25);
            $table->text('deskripsivarian');
            $table->mediumText('gambarvarian');
            $table->bigInteger('idjenis')->unsigned()->nullable();
            $table->foreign('idjenis')->references('idjenis')->on('jenisoleh');
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
        Schema::dropIfExists('varianjenis');
    }
}
