<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class caramasakseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('masak')->insert([
            'idmasak'=>'1',
            'namamasak'=>'Dipanggang',
            'gambarmasak'=>'https://cdn.discordapp.com/attachments/906163180328325130/906200479996968960/Dipanggang.jpg',
        ]);
DB::table('masak')->insert([
            'idmasak'=>'2',
            'namamasak'=>'Direbus',
            'gambarmasak'=>'https://cdn.discordapp.com/attachments/906163180328325130/906200719277821962/Direbus.jpeg',
        ]);
DB::table('masak')->insert([
            'idmasak'=>'3',
            'namamasak'=>'Dikukus',
            'gambarmasak'=>'https://cdn.discordapp.com/attachments/906163180328325130/906200537861603358/Dikukus.jpg',
        ]);
DB::table('masak')->insert([
            'idmasak'=>'4',
            'namamasak'=>'Digoreng',
            'gambarmasak'=>'https://cdn.discordapp.com/attachments/906163180328325130/906200860084805632/Digoreng.jpg',
        ]);
DB::table('masak')->insert([
            'idmasak'=>'5',
            'namamasak'=>'Disangrai',
            'gambarmasak'=>'https://cdn.discordapp.com/attachments/906163180328325130/906456515660115968/Disangrai.jpg',
        ]);
DB::table('masak')->insert([
            'idmasak'=>'6',
            'namamasak'=>'Direduksi',
            'gambarmasak'=>'https://cdn.discordapp.com/attachments/906163180328325130/906457320794497054/Direduksi.jpg',
        ]);
DB::table('masak')->insert([
            'idmasak'=>'7',
            'namamasak'=>'Difermentasi',
            'gambarmasak'=>'https://cdn.discordapp.com/attachments/906163180328325130/906200975033917450/Difermentasi.jpg',
        ]);
DB::table('masak')->insert([
            'idmasak'=>'8',
            'namamasak'=>'Digiling',
            'gambarmasak'=>'https://cdn.discordapp.com/attachments/906163180328325130/906803300832268318/mengulek.jpg',
        ]);
DB::table('masak')->insert([
            'idmasak'=>'9',
            'namamasak'=>'Diperas',
            'gambarmasak'=>'https://cdn.discordapp.com/attachments/906163180328325130/909673509507194910/diperas.jpg',
        ]);
DB::table('masak')->insert([
            'idmasak'=>'10',
            'namamasak'=>'Dibekukan',
            'gambarmasak'=>'https://cdn.discordapp.com/attachments/906163180328325130/915619505064009749/Dibekukan.jpg',
        ]);
DB::table('masak')->insert([
            'idmasak'=>'11',
            'namamasak'=>'Dipresto',
            'gambarmasak'=>'https://cdn.discordapp.com/attachments/906163180328325130/918385443261808680/Dipresto.jpg',
        ]);
    }
}
