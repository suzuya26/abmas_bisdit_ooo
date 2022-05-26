<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTriggerRekomendasiolehCount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER tambahrekomendasioleh BEFORE INSERT ON rekomendasioleh
        FOR EACH ROW
                    UPDATE `varianoleh` SET rekomendasioleh_count=rekomendasioleh_count+1
            WHERE idoleh=NEW.idoleh ;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_rekomendasiOleh_count');
    }
}
