<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreateTriggerTambahRekomendasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER tambahrekomendasi BEFORE INSERT ON rekomendasi
        FOR EACH ROW
                    UPDATE `toko_oleh` SET rekomendasi_count=rekomendasi_count+1
            WHERE idtoko=NEW.idtoko ;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_tambah_rekomendasi');
    }
}
