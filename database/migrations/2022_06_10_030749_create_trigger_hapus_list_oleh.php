<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTriggerHapusListOleh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER hapuslistoleh BEFORE DELETE ON list_oleh
        FOR EACH ROW
                    UPDATE `varianoleh` SET list_count=list_count-1
            WHERE idoleh=OLD.idoleh ;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_hapus_list_oleh');
    }
}
