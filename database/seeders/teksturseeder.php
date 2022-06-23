<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class teksturseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tekstur')->insert([
            'idtekstur'=>'1',
            'namatekstur'=>'Kenyal',
            'gambartekstur'=>'https://cdn.discordapp.com/attachments/906163180328325130/906197171295113306/Kenyal.jpg',
        ]);
DB::table('tekstur')->insert([
            'idtekstur'=>'2',
            'namatekstur'=>'Keras',
            'gambartekstur'=>'https://cdn.discordapp.com/attachments/906163180328325130/906199202810462288/Keras.jpg',
        ]);
DB::table('tekstur')->insert([
            'idtekstur'=>'3',
            'namatekstur'=>'Lembut',
            'gambartekstur'=>'https://cdn.discordapp.com/attachments/906163180328325130/906197283081703454/Lembut.jpg',
        ]);
DB::table('tekstur')->insert([
            'idtekstur'=>'4',
            'namatekstur'=>'Renyah',
            'gambartekstur'=>'https://cdn.discordapp.com/attachments/906163180328325130/906197474551672892/Renyah.jpg',
        ]);
DB::table('tekstur')->insert([
            'idtekstur'=>'5',
            'namatekstur'=>'Lengket',
            'gambartekstur'=>'https://cdn.discordapp.com/attachments/906163180328325130/906197959887179776/Lengket.jpg',
        ]);
DB::table('tekstur')->insert([
            'idtekstur'=>'6',
            'namatekstur'=>'Lembek',
            'gambartekstur'=>'https://cdn.discordapp.com/attachments/906163180328325130/906198675259281448/Lembek.jpg',
        ]);
DB::table('tekstur')->insert([
            'idtekstur'=>'7',
            'namatekstur'=>'Berminyak',
            'gambartekstur'=>'https://cdn.discordapp.com/attachments/906163180328325130/906197595666391040/Berminyak.jpg',
        ]);
DB::table('tekstur')->insert([
            'idtekstur'=>'8',
            'namatekstur'=>'Kering',
            'gambartekstur'=>'https://cdn.discordapp.com/attachments/906163180328325130/906197653568774174/Kering.jpg',
        ]);
DB::table('tekstur')->insert([
            'idtekstur'=>'9',
            'namatekstur'=>'Basah',
            'gambartekstur'=>'https://cdn.discordapp.com/attachments/906163180328325130/906197896968429618/Basah.jpg',
        ]);
DB::table('tekstur')->insert([
            'idtekstur'=>'10',
            'namatekstur'=>'Berair',
            'gambartekstur'=>'https://cdn.discordapp.com/attachments/906163180328325130/906197811014553610/Berair.png',
        ]);
DB::table('tekstur')->insert([
            'idtekstur'=>'11',
            'namatekstur'=>'Kental',
            'gambartekstur'=>'https://cdn.discordapp.com/attachments/906163180328325130/906197368213479424/Kental.jpg',
        ]);
    }
}
