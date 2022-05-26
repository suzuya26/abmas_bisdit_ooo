<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTriggerHapusrekomendasiOleh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER hapusrekomendasioleh BEFORE DELETE ON rekomendasioleh
        FOR EACH ROW
                    UPDATE `varianoleh` SET rekomendasioleh_count=rekomendasioleh_count-1
            WHERE idoleh=OLD.idoleh ;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_hapusrekomendasiOleh');
    }
}
