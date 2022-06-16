<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jenisolehseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenisoleh')->insert([
            'idjenis'=>'1',
            'namajenis'=>'Kacang - kacangan',
            'deskripsijenis'=>'Kacang adalah salah satu bahan makanan yang kaya nutrisi. Memiliki cita rasa yang gurih, kacang kerap diolah menjadi camilan nikmat untuk teman bersantai. ',
            'gambarjenis'=>'https://cdn.discordapp.com/attachments/906163180328325130/906354771626176602/Kacang.jpg',

        ]);
        DB::table('jenisoleh')->insert([
            'idjenis'=>'2',
            'namajenis'=>'Keripik',
            'deskripsijenis'=>'Keripik atau kripik adalah sejenis makanan ringan berupa irisan tipis dari umbi-umbian, buah-buahan, atau sayuran yang digoreng di dalam minyak nabati. Untuk menghasilkan rasa yang gurih dan renyah biasanya dicampur dengan adonan tepung yang diberi bumbu rempah tertentu.',
            'gambarjenis'=>'https://cdn.discordapp.com/attachments/906163180328325130/906197474551672892/Renyah.jpg',

        ]);
        DB::table('jenisoleh')->insert([
            'idjenis'=>'3',
            'namajenis'=>'Kue Kering',
            'deskripsijenis'=>'Kue kering adalah kue dengan kadar air yang minimal, sehingga dapat tahan disimpan lebih lama daripada kue basah. Kue kering biasanya bertekstur keras tetapi renyah karena dibuat dengan cara dipanggang memakai oven. Kue kering memiliki daya tahan yang cukup lama. Bahan yang umum digunakan untuk pembuatan kue kering di antaranya tepung beras, tepung ketan, terigu, ataupun sagu. Kue kering lebih dikategorikan sebagai kue yang dipanggang mirip seperti kukis.',
            'gambarjenis'=>'https://cdn.discordapp.com/attachments/906163180328325130/906197653568774174/Kering.jpg',

        ]);
        DB::table('jenisoleh')->insert([
            'idjenis'=>'4',
            'namajenis'=>'Kue Basah',
            'deskripsijenis'=>'Kue basah merupakan makanan kecil yang bisa dijadikan alternatif camilan. Biasa disantap di pagi atau sore hari. Kue basah umumnya empuk, lembut, dan tidak bertahan lama (hanya bertahan beberapa hari). Biasanya terbuat dari tepung terigu, sagu, gula, bahkan ada yang berbahan santan atau ketan. Kue basah umumnya empuk, bertekstur lembut, dan tidak dapat bertahan lama (hanya bertahan beberapa hari atau kurang). Hal ini karena umumnya kue tradisional terbuat dari tepung beras, gula, dan santan, sehingga lekas basi. Kue basah biasanya dimasak dengan cara dikukus, direbus, atau digoreng. Kebanyakan kue tradisional Nusantara adalah kue basah, dan umumnya dapat ditemui di pasar tradisional di Indonesia.',
            'gambarjenis'=>'https://cdn.discordapp.com/attachments/906163180328325130/906197896968429618/Basah.jpg',

        ]);
        DB::table('jenisoleh')->insert([
            'idjenis'=>'5',
            'namajenis'=>'Manisan',
            'deskripsijenis'=>'Manisan adalah buah-buahan yang direndam dalam larutan gula selama beberapa waktu. Manisan biasanya dimakan sebagai hidangan pelengkap untuk merangsang nafsu makan. Teknologi membuat manisan merupakan salah satu cara pengawetan makanan yang sudah diterapkan sejak dahulu kala. Perendamanan manisan akan membuat kadar gula dalam buah meningkat dan kadar airnya berkurang.',
            'gambarjenis'=>'https://cdn.discordapp.com/attachments/906163180328325130/906458761324036126/Manisan.jpg',

        ]);
        DB::table('jenisoleh')->insert([
            'idjenis'=>'6',
            'namajenis'=>'Sambal',
            'deskripsijenis'=>'adalah istilah besar yang dalam kuliner Indonesia merujuk pada saus maupun kondimen pedas. Secara garis besar, sambal berbahan utama cabai yang dilumatkan sehingga keluar kandungan sari cabai dan ditambah bahan-bahan lain seperti garam dan terasi.

Sambal merupakan salah satu unsur khas hidangan Indonesia. Ada bermacam-macam variasi sambal yang berasal dari berbagai daerah.',
            'gambarjenis'=>'https://cdn.discordapp.com/attachments/906163180328325130/906457965161234442/Sambal.jpg',

        ]);
        DB::table('jenisoleh')->insert([
            'idjenis'=>'7',
            'namajenis'=>'Minuman',
            'deskripsijenis'=>'Minuman merupakan cairan yang diperlukan oleh tubuh, menghilangkan dahaga ketika diminum',
            'gambarjenis'=>'https://cdn.discordapp.com/attachments/906163180328325130/906197811014553610/Berair.png',

        ]);
        DB::table('jenisoleh')->insert([
            'idjenis'=>'10',
            'namajenis'=>'Olahan Daging',
            'deskripsijenis'=>'Olahan daging merupakan tipe jenis oleh - oleh yang berasal dari hasil daging yang diolah dengan metode tertentu',
            'gambarjenis'=>'https://cdn.discordapp.com/attachments/906163180328325130/917466509515833394/Olahan_Daging.jpg',

        ]);
        DB::table('jenisoleh')->insert([
            'idjenis'=>'8',
            'namajenis'=>'Yoghurt',
            'deskripsijenis'=>'',
            'gambarjenis'=>'',

        ]);
        DB::table('jenisoleh')->insert([
            'idjenis'=>'9',
            'namajenis'=>'Abon',
            'deskripsijenis'=>'Abon merupakan makanan yang terbuat dari serat daging',
            'gambarjenis'=>'https://cdn.discordapp.com/attachments/906163180328325130/907162750772449290/abon.jpg',

        ]);



    }
}
