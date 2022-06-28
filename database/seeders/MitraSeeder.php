<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  DB::table('toko_mitra')->insert
        // ([
        //  'idmitra'=>81,
        // 'nama_mitra'=>'Sentra UKM Siola',
        // 'alamat_mitra'=>'Jl. Tunjungan No.1-3, Genteng, Kec. Genteng, Kota SBY, Jawa Timur 60275',
        // 'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/990108321312804944/867987.jpg',
        // 'map_mitra'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.43752040468!2d112.72880496977537!3d-7.256840500000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f95d67d8c6c7%3A0xae38021c3316b375!2sOleh%20Oleh%20Khas%20Surabaya%20-%20Sentra%20UKM%20Siola!5e0!3m2!1sen!2sid!4v1656129854125!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        // 'jam_buka'=>'10:00',
        // 'jam_tutup'=>'20:00',
        // 'fasilitas_mitra'=>'Parkir Mobil & Motor---Toilet---Kantin---Ruang Tunggu',
        // 'jenis_sekitar'=>'',
        // 'kontak_mitra'=>'085655927391',
        // 'sosmed_mitra'=>'' ,
        // 'website_mitra'=>'',
        // 'galeri_mitra'=>'https://cdn.discordapp.com/attachments/964470483875672094/990106905034784799/IMG20220219141654.jpg

        // https://cdn.discordapp.com/attachments/964470483875672094/990106830044803132/IMG20220219141636.jpg',
        // 'galeri_mitra_caption'=>''
        // ]);
         DB::table('toko_oleh')->insert
([
 'idtoko'=>81,
'nama_toko'=>'Sentra UKM Siola',
'idlokasi'=>66,
'nama_lokasi'=>'Surabaya',
'alamat_toko'=>'Jl. Tunjungan No.1-3, Genteng, Kec. Genteng, Kota SBY, Jawa Timur 60275',
'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/990108321312804944/867987.jpg',
'map_toko'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.43752040468!2d112.72880496977537!3d-7.256840500000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f95d67d8c6c7%3A0xae38021c3316b375!2sOleh%20Oleh%20Khas%20Surabaya%20-%20Sentra%20UKM%20Siola!5e0!3m2!1sen!2sid!4v1656129854125!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
'jam_buka'=>'10:00',
'jam_tutup'=>'20:00',
'fasilitas_toko'=>'Parkir Mobil & Motor---Toilet--Kantin---Ruang Tunggu',
'jenis_sekitar'=>'',
'kontak_toko'=>'085655927391',
'sosmed_toko'=>'' ,
'website_toko'=>'',
'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/990106905034784799/IMG20220219141654.jpg

https://cdn.discordapp.com/attachments/964470483875672094/990106830044803132/IMG20220219141636.jpg',
'galeri_toko_caption'=>''
]);
    }
}
