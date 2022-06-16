<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rasaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rasa')->insert([
            'idrasa'=>'1',
            'namarasa'=>'Manis',
            'gambarasa'=>'https://cdn.discordapp.com/attachments/906163180328325130/906204580084318208/Manis.jpg',
        ]);
DB::table('rasa')->insert([
            'idrasa'=>'2',
            'namarasa'=>'Pedas',
            'gambarasa'=>'https://cdn.discordapp.com/attachments/906163180328325130/906204482491265054/Pedas.jpg',
        ]);
DB::table('rasa')->insert([
            'idrasa'=>'3',
            'namarasa'=>'Asin',
            'gambarasa'=>'https://cdn.discordapp.com/attachments/906163180328325130/906204762825965638/Asin.jpg',
        ]);
DB::table('rasa')->insert([
            'idrasa'=>'4',
            'namarasa'=>'Asam',
            'gambarasa'=>'https://cdn.discordapp.com/attachments/906163180328325130/906204674846261339/Asam.jpg',
        ]);
DB::table('rasa')->insert([
            'idrasa'=>'5',
            'namarasa'=>'Pahit',
            'gambarasa'=>'https://cdn.discordapp.com/attachments/906163180328325130/906205196005290064/Pahit.jpeg',
        ]);
DB::table('rasa')->insert([
            'idrasa'=>'6',
            'namarasa'=>'Hambar',
            'gambarasa'=>'https://cdn.discordapp.com/attachments/906163180328325130/906204863820603392/Hambar.jpg',
        ]);
    }
}
