<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTriggerHapusListToko extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER hapuslist BEFORE DELETE ON list_toko
        FOR EACH ROW
                    UPDATE `toko_oleh` SET list_count=list_count-1
            WHERE idtoko=OLD.idtoko ;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_hapus_list_toko');
    }
}
