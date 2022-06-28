<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('toko_oleh')->insert
        ([
         'idtoko'=>99,
        'nama_toko'=>'Meranti',
        'idlokasi'=>6,
        'nama_lokasi'=>'Medan',
        'alamat_toko'=>'Jl. Kruing simpang Razak No.7C',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/906163180328325130/906167937151430656/BoluMeranti_1.jpg',
        'map_toko'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=Jl.%20Kruing%20simpang%20Razak%20No.7C%20Medan%20Sumatra%20Utara,%20Indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'20:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Wifi Gratis---Pesan Antar---Pembayaran Non-Tunai---Makan di Tempat',
        'jenis_sekitar'=>'ATM BCA---50M---Bandara Juanda---10.3KM',
        'kontak_toko'=>'www.spikoekuno.co.id',
        'sosmed_toko'=>'81234567890' ,
        'website_toko'=>'@spikoekunosby',
        'galeri_toko'=>'linkgambar---linkgambar---linkgambar',
        'galeri_toko_caption'=>'tampak depan(sesuai gambar)---tampak belakang(sesuai gambar)---tampak samping(sesuai gambar)'
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>2,
        'nama_toko'=>'Mama bolu',
        'idlokasi'=>46,
        'nama_lokasi'=>'Tangerang',
        'alamat_toko'=>'Jl. Merdeka No. 119',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984482762188787813/unknown.png',
        'map_toko'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6434326427293!2d106.6237048150805!3d-6.178461295526985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fec6d333a9bf%3A0x6ffdfe87d00846ab!2sMama%20Bolu%20Oleh-oleh%20Khas%20Tangerang!5e0!3m2!1sid!2sid!4v1655265392879!5m2!1sid!2sid" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08.00',
        'jam_tutup'=>'20:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Bank BRI---550 m---Rumah Sakit Pratiwi---850 m',
        'kontak_toko'=>'081212498904',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://oleholehtangerang.blogspot.com/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984482933823897650/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>3,
        'nama_toko'=>'Toko oleh-oleh khas Banten Citra Gading',
        'idlokasi'=>46,
        'nama_lokasi'=>'Tangerang',
        'alamat_toko'=>'Jalan Citra Gading Residences Cipocok Jaya, Kec. Cipocok Jaya, Serang, Banten',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984480936806731776/unknown.png',
        'map_toko'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.865419544544!2d106.16743261481207!3d-6.148770495548148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41f550869113db%3A0xbd56d1ec13455f04!2sToko%20Oleh-oleh%20Khas%20Banten%2C%20%40Citra%20Gading!5e0!3m2!1sen!2sus!4v1655266728444!5m2!1sen!2sus" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'07.00',
        'jam_tutup'=>'17.30',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'ATM BCA---1 km---Kantor Pos---1,4 km',
        'kontak_toko'=>'081807817966',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://toko-oleh-oleh-khas-banten-citra-gading.business.site/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984481471832154162/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>4,
        'nama_toko'=>'Oleh-oleh Jakarta Romlah',
        'idlokasi'=>49,
        'nama_lokasi'=>'DKI Jakarta',
        'alamat_toko'=>'Jl. Swadaya II No. 20B, Tanjung Barat',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984484249484816464/unknown.png',
        'map_toko'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7130369108145!2d106.84451401508105!3d-6.301386095439423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed8bd1b06813%3A0xead7a8a172d027a0!2sRomlah%20Oleh-Oleh%20Jakarta!5e0!3m2!1sid!2sid!4v1655265529347!5m2!1sid!2sid" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'09:00',
        'jam_tutup'=>'17:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Alfamart---1,7 km---Mc Donalds---400 m',
        'kontak_toko'=>'08111814342',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://romlah.com/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984484667363295323/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>5,
        'nama_toko'=>'Dodol Nyak Mai',
        'idlokasi'=>49,
        'nama_lokasi'=>'DKI Jakarta',
        'alamat_toko'=>'Jl. Moch Kahfi II, Srengseng sawah',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984485138467532911/unknown.png',
        'map_toko'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.410186934548!2d106.81894911508124!3d-6.340886895411334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec2adb02d0bd%3A0x125da7dfc58035a2!2sDodol%20Nyak%20Mai!5e0!3m2!1sid!2sid!4v1655265558131!5m2!1sid!2sid" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'20:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Masjid---290 m',
        'kontak_toko'=>'085778561919',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984485455749849228/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>6,
        'nama_toko'=>'Kue Betawi Pok Yati',
        'idlokasi'=>49,
        'nama_lokasi'=>'DKI Jakarta',
        'alamat_toko'=>'Jl. Joe Kelapa Tiga No. 131, Jagakarsa',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984856548683689994/unknown.png',
        'map_toko'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5403446973173!2d106.8259763150812!3d-6.323940495423354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69edc33f28650f%3A0x70674a5b59668d23!2sKue%20betawi%20pok%20yati!5e0!3m2!1sid!2sid!4v1655265576289!5m2!1sid!2sid" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Indomaret---210 m---Alfamart---230 m',
        'kontak_toko'=>'087867002104',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://kue-betawi-pok-yati.business.site/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984856195414241330/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>7,
        'nama_toko'=>'Kartika Sari',
        'idlokasi'=>50,
        'nama_lokasi'=>'Bandung',
        'alamat_toko'=>'Jl. H. Akbar No. 4, Pasir Kaliki',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984486734270177300/unknown.png',
        'map_toko'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.821397551946!2d107.59766991508393!3d-6.911947095005754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63e6639dda3%3A0x2c8e03c7d4428ecb!2sKartika%20Sari!5e0!3m2!1sid!2sid!4v1655265605785!5m2!1sid!2sid" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'17:30',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet--Restaurant',
        'jenis_sekitar'=>'Indomaret---70 m---ATM BCA---450 m',
        'kontak_toko'=>'08112045777',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://www.kartikasari.com/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984486764582428682/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>8,
        'nama_toko'=>'Brownies Amanda',
        'idlokasi'=>50,
        'nama_lokasi'=>'Bandung',
        'alamat_toko'=>'Jl.  Rancabolang No. 29, Manjahlega',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984487450267238430/unknown.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5680144649077!2d107.66170091508405!3d-6.942117494984367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e81ecf8353ed%3A0xfaf5730c00f95e7a!2sAmanda!5e0!3m2!1sid!2sid!4v1655265640555!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'ATM BCA---210 m---ATM BNI---210 m',
        'kontak_toko'=>'08112114000',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://amandabrownies.co.id/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984487584191369306/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>9,
        'nama_toko'=>'Abadi Bagelen',
        'idlokasi'=>50,
        'nama_lokasi'=>'Bandung',
        'alamat_toko'=>'Jl. Purnawarman 49 Bandung, Jawa Barat',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984488178759139368/unknown.png',
        'map_toko'=>'https://www.google.com/maps/place/ABADI+BAGELEN/@-6.9042103,107.6091203,15z/data=!4m5!3m4!1s0x0:0xfab28f732f9a008f!8m2!3d-6.9042103!4d107.6091203',
        'jam_buka'=>'07.30',
        'jam_tutup'=>'17.00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Masjid---10 m---ATM BRI---500 m',
        'kontak_toko'=>'08157075812',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://www.abadibagelen.com/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984488363102978059/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>10,
        'nama_toko'=>'Bolu Susu Lembang',
        'idlokasi'=>50,
        'nama_lokasi'=>'Bandung',
        'alamat_toko'=>'Jl. Raya Lembang No. 275, Jayagiri',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984489109944950794/unknown.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6536255851493!2d107.61540181508347!3d-6.8119178950766495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e103a6c5e825%3A0x765dac2390dd3292!2sBolu%20Susu%20Lembang%20-%20Oleh%20oleh%20khas%20Bandung!5e0!3m2!1sid!2sid!4v1655265682004!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'06:00',
        'jam_tutup'=>'22:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Alun - alun lembang---140 m---Masjid---80 m',
        'kontak_toko'=>'08111500146',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://bolulembang.co.id/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984489309849665579/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>11,
        'nama_toko'=>'Bakpia Kurnia Sari',
        'idlokasi'=>65,
        'nama_lokasi'=>'Yogyakarta',
        'alamat_toko'=>'Jl. Glagahsari No. 91, Warungboto',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984842060957896744/unknown.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.823433483034!2d110.38561671508886!3d-7.808508194373103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57705a7ab28f%3A0x138287e6b0fe41ef!2sBakpia%20Kurnia%20Sari!5e0!3m2!1sid!2sid!4v1655265698515!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'15:45',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Indomaret---40 m',
        'kontak_toko'=>'081280546608',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://kurniasari.co.id/shop/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984841851578241055/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>12,
        'nama_toko'=>'Toko Wisata Rasa',
        'idlokasi'=>66,
        'nama_lokasi'=>'Surabaya',
        'alamat_toko'=>'Jl. Genteng Besar 83A, Surabaya',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984842327489130597/unknown.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8426432495717!2d112.73715231508575!3d-7.258742994760419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9678b9b3c47%3A0xf74b8d44869ba4fa!2sToko%20Wisata%20Rasa!5e0!3m2!1sid!2sid!4v1655265716215!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'07.00',
        'jam_tutup'=>'21.00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Bank CIMB Niaga---30 m---ATM BCA---210 m',
        'kontak_toko'=>'082210057583',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://www.wisatarasasurabaya.com/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984842327489130597/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>13,
        'nama_toko'=>'Pusat Oleh Oleh UMKM Centre Kota Tarakan',
        'idlokasi'=>44,
        'nama_lokasi'=>'Tarakan',
        'alamat_toko'=>'Jl. Pattimura Rt. 17, Pamusian, Tarakan Tengah',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984842578857951332/unknown.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.1801474358635!2d117.60117031507059!3d3.3055640975935763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32138a6410c263c3%3A0xd1b93d6ec41c5c40!2sPusat%20Oleh%20Oleh%20UMKM%20Centre%20Kota%20Tarakan!5e0!3m2!1sid!2sid!4v1655265739170!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'19:30',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Masjid---180 m---Bank Mandiri---650 m',
        'kontak_toko'=>'081254782298',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984842902624677968/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>14,
        'nama_toko'=>'Zilfi oleh-oleh Banten',
        'idlokasi'=>45,
        'nama_lokasi'=>'Serang',
        'alamat_toko'=>'Jl. Maulana Hasanudin, Kotabaru',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984843061693657208/unknown.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1494514412066!2d106.15266241508019!3d-6.110571595575365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418b2b97436ec9%3A0x55fbec25eeecc25e!2sZILFI%20oleh-oleh%20banten!5e0!3m2!1sid!2sid!4v1655265757025!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'20:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Bank BCA---30 m---Bank Danamon---170 m',
        'kontak_toko'=>'081319328393',
        'sosmed_toko'=>'zilfistore' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984843152886226974/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>15,
        'nama_toko'=>'Toko Oleh-oleh Panen Raya',
        'idlokasi'=>66,
        'nama_lokasi'=>'Surabaya',
        'alamat_toko'=>'Jl. Genteng Besar No. 77 A, Genteng, Surabaya',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984843485435822090/unknown.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.843120124601!2d112.73743511508572!3d-7.258688794760462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f967918494b3%3A0x8545a635fb648d6b!2sToko%20Oleh%20Oleh%20Panen%20Raya!5e0!3m2!1sid!2sid!4v1655265782223!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'ATM CIMB Niaga---1,9 km---ATM BCA---200 m',
        'kontak_toko'=>'081234650650',
        'sosmed_toko'=>'panenraya_77' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984843485435822090/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>16,
        'nama_toko'=>'Bakpia kukus tuju Jogja',
        'idlokasi'=>65,
        'nama_lokasi'=>'Yogyakarta',
        'alamat_toko'=>'Jl. Kaliurang KM 5,5 No 10 A, Manggung, Caturtunggal',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984843801317236766/unknown.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2930658607206!2d110.37942041508833!3d-7.758710894408069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59ab8264b66d%3A0xfe1fb415583238a1!2sBakpia%20Kukus%20Tugu%20Jogja%20-%20Kaliurang!5e0!3m2!1sid!2sid!4v1655265807550!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'06.00',
        'jam_tutup'=>'21.00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Alfamart---200 m---ATM Mandiri---550 m',
        'kontak_toko'=>'08111500625',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://bakpiakukustugu.co.id/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984843905935745034/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>17,
        'nama_toko'=>'Gemah Ripah',
        'idlokasi'=>65,
        'nama_lokasi'=>'Yogyakarta',
        'alamat_toko'=>'Jl. Margomulno No. 94',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984844246865559582/unknown.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.933420607737!2d110.36325351508867!3d-7.796874094381281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57881720aa59%3A0x5198d2225ea2e7f4!2sGemah%20Ripah!5e0!3m2!1sid!2sid!4v1655265835940!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'17:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'ATM BNI---170 m---ATM BRI---170 m',
        'kontak_toko'=>'087848876400',
        'sosmed_toko'=>'gemahripah_jogja' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984844172978704434/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>18,
        'nama_toko'=>'Toko oleh-oleh khas Jepara ""Sinar Barokah""',
        'idlokasi'=>59,
        'nama_lokasi'=>'Semarang',
        'alamat_toko'=>'Jl. Raya Jepara, Kudus Km 9',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984845557862367412/unknown.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.3286830639568!2d110.719874515083!3d-6.729692895134979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70ddf0177f25e1%3A0x45315e9ed9b54541!2sToko%20Oleh-oleh%20Khas%20Jepara%20%E2%80%9CSinar%20Barokah%E2%80%9D!5e0!3m2!1sid!2sid!4v1655265898921!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'20:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Bank Mandiri---20 m---ATM BNI---90 m',
        'kontak_toko'=>'081325252530',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://toko-oleh-oleh-khas-jepara-sinar-barokah.business.site/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984845396100661258/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>19,
        'nama_toko'=>'Pusat oleh oleh Djoe',
        'idlokasi'=>59,
        'nama_lokasi'=>'Semarang',
        'alamat_toko'=>'Jl. Pandanaran No. 51 Semarang',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984845907717685298/unknown.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1944640090437!2d110.41061481508433!3d-6.98635979495301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b455e35a20b%3A0x3f030e0ef348a316!2sPusat%20Oleh-Oleh%20Djoe!5e0!3m2!1sid!2sid!4v1655265919712!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'06:00',
        'jam_tutup'=>'22:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Bank BRI---180 m---Indomaret---170 m',
        'kontak_toko'=>'08112707799',
        'sosmed_toko'=>'' ,
        'website_toko'=>'http://www.oleholehdjoe.com/tentang-kami',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984845986675429417/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>20,
        'nama_toko'=>'Toko oleh oleh Madua Semarang',
        'idlokasi'=>59,
        'nama_lokasi'=>'Semarang',
        'alamat_toko'=>'Jl. Madukuro Raya Semarang',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984847776435302411/unknown.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.276165926364!2d110.39833441508429!3d-6.976707094959893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b887bcaaced%3A0xfaa2e73c6eac3d00!2sOLEH%20OLEH%2052%20MADUKORO%20SEMARANG!5e0!3m2!1sid!2sid!4v1655265950636!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Masjid---190 m---Bank BCA---650 m',
        'kontak_toko'=>'087882399553',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://www.oleholehsemarang.id/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984848022619951185/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>21,
        'nama_toko'=>'Atap Rasa',
        'idlokasi'=>66,
        'nama_lokasi'=>'Surabaya',
        'alamat_toko'=>'Jl. Ahmad Yani No 243, Siwalankerto, Wonocolo',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984848463235788830/unknown.png',
        'map_toko'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1577464193874!2d112.72766661508622!3d-7.336174994705761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f967897411bd%3A0x7cc81183a1de08ce!2sAtap%20Rasa%20Pusat%20Oleh-Oleh%20Khas%20Surabaya!5e0!3m2!1sid!2sid!4v1655265966513!5m2!1sid!2sid" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Bank BRI---600 m---Indomaret---70 m',
        'kontak_toko'=>'081931158000',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://pusat-oleh-oleh-khas-surabaya-jawa-timur.business.site/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984848544571748393/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>22,
        'nama_toko'=>'Gerai Keneke Cilegon',
        'idlokasi'=>45,
        'nama_lokasi'=>'Serang',
        'alamat_toko'=>'Jl. Lingkar Selatan Blok A No. 2 Km. 06 Cilegon',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984855750344052737/unknown.png',
        'map_toko'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.6856067499207!2d106.07864851507972!3d-6.037808995627267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418c335b50fa19%3A0x9eef2267f105bee7!2sPusat%20Oleh-Oleh%20KENEKE%20Cilegon!5e0!3m2!1sid!2sid!4v1655265985700!5m2!1sid!2sid" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'09:00',
        'jam_tutup'=>'17:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'085966317453',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984855618512883773/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>23,
        'nama_toko'=>'Sowan',
        'idlokasi'=>49,
        'nama_lokasi'=>'Jakarta',
        'alamat_toko'=>'Jl. Raya Kelapa Nias Blok HF-3, Kelapa Gading',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984848664637870111/unknown.png',
        'map_toko'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8602078671115!2d106.90104611508042!3d-6.149469195547677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f56a800585f7%3A0x19d9eaacf01bcb69!2sOleh%20Oleh%20Sowan%20%7C%20Wisata%20Belanja%20Oleh%20Oleh!5e0!3m2!1sid!2sid!4v1655266055183!5m2!1sid!2sid" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'09:00',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Masjid---1,4 km---ATM CIMB Niaga---1,1 km',
        'kontak_toko'=>'0811968123',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://toko-oleh-oleh-sowan.business.site/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984848792278958120/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>24,
        'nama_toko'=>'Kampoeng Semarang',
        'idlokasi'=>59,
        'nama_lokasi'=>'Semarang',
        'alamat_toko'=>'Jl. Raya Kaligawe Km. 1 No. 96 Semarang',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984849414902382612/unknown.png',
        'map_toko'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4321593450386!2d110.44373551508416!3d-6.958240194972959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f3413af6483b%3A0x2b42657f59b8a044!2sKampoeng%20Semarang!5e0!3m2!1sid!2sid!4v1655266071071!5m2!1sid!2sid" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'20:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Indomaret---550 m---Masjid---450 m',
        'kontak_toko'=>'087823198601',
        'sosmed_toko'=>'' ,
        'website_toko'=>'http://www.kampoengsemarang.co.id/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984849071690878986/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>25,
        'nama_toko'=>'Warung oleh-oleh Bu Tini',
        'idlokasi'=>65,
        'nama_lokasi'=>'Yogyakarta',
        'alamat_toko'=>'Jl. Mataram No. 194, Suryatmajan, Danurejan',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984849544082767892/unknown.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.9611778200383!2d110.36558921508872!3d-7.793935294383368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a582840a0f525%3A0x9109beec43928361!2sToko%20Oleh-oleh%20Khas%20Jogja%20BU%20TINI!5e0!3m2!1sid!2sid!4v1655266089896!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'22:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Bank BRI---170 m---Masjid 190 m',
        'kontak_toko'=>'0274566184',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984849811650007040/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>26,
        'nama_toko'=>'Toko Bogajaya Indragiri',
        'idlokasi'=>66,
        'nama_lokasi'=>'Surabaya',
        'alamat_toko'=>'Jl. Indragiri Ruko Landmark a6 16 Surabaya',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984850008950071316/unknown.png',
        'map_toko'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5744732362077!2d112.72911291508585!3d-7.289158794738955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb9313630b87%3A0x621372924cd8fb89!2sOleh-Oleh%20Khas%20Surabaya%20%26%20Jawa%20Timur%20-%20TOKO%20BOGAJAYA%20INDRAGIRI!5e0!3m2!1sid!2sid!4v1655266106459!5m2!1sid!2sid" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Bank Mandiri---150 m---Bank BNI---210 m',
        'kontak_toko'=>'085816894196',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://www.tokobogajaya.com/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984850237397020712/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>27,
        'nama_toko'=>'Sartika Barka',
        'idlokasi'=>48,
        'nama_lokasi'=>'Cilegon',
        'alamat_toko'=>'Ketileng Barat No. 145, RT.07/RW.02, Kec. Cilegon, Banten',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984850811517534238/unknown.png',
        'map_toko'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.7791747400806!2d106.0553603150798!3d-6.0250209956364245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418e70cf22e7d1%3A0x8f75f052bb2e97b4!2sSartika%20Barka%20(Pusat%20Oleh-Oleh%20Khas%20Cilegon)!5e0!3m2!1sid!2sid!4v1655266457400!5m2!1sid!2sid" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'07.00',
        'jam_tutup'=>'20.30',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'ATM BCA---450 m---Alfamidi---450 m',
        'kontak_toko'=>'081808801001',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://sartika-barka-pusat-oleh-oleh-khas-cilegon.business.site/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984850507015278602/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>28,
        'nama_toko'=>'Mpok Nini',
        'idlokasi'=>49,
        'nama_lokasi'=>'Jakarta',
        'alamat_toko'=>'Jln Belanak 2 Ujung RT.02/01 No.57 Perumnas 2 Kel, RT.001/RW.001, Kayuringin Jaya',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984852593501147136/unknown.png',
        'map_toko' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1552634964582!2d106.9807597150808!3d-6.243259295480825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c37fd541f9d%3A0x68a3999cd586873c!2sMpok%20Nini%20%7C%20Pusat%20Oleh-oleh%20Khas%20Betawi%20(%20Oleh-oleh%20Khas%20Bekasi%20%2F%20Oleh%20oleh%20Khas%20Jakarta%20)!5e0!3m2!1sid!2sid!4v1655266566333!5m2!1sid!2sid" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'06.00',
        'jam_tutup'=>'22.00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Indomaret---220 m---Masjid---270 m',
        'kontak_toko'=>'082126632730',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://mpoknini.co.id/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984852395580358727/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>29,
        'nama_toko'=>'Rahmia Production Oleh Oleh Khas Kota Bandung',
        'idlokasi'=>50,
        'nama_lokasi'=>'Bandung',
        'alamat_toko'=>'Gang Cemara IV No. 23 RT.01/RW.01, Kecamatan Sukajadi, Bandung',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984853074331971584/unknown.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0555618218705!2d107.59680431508373!3d-6.883948095025569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f4c6ab000f%3A0x2255727e93cea38!2sRahmia%20Production%20Oleh%20Oleh%20Khas%20Bandung!5e0!3m2!1sid!2sid!4v1655266609061!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'06.30',
        'jam_tutup'=>'16.00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Masjid---60 m---Alfamart---80 m',
        'kontak_toko'=>'082126632730',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://oleh-oleh-khas-kota-bandung.business.site/',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>30,
        'nama_toko'=>'Bandeng Juwana Elrina',
        'idlokasi'=>59,
        'nama_lokasi'=>'Semarang',
        'alamat_toko'=>'Jl. Pandanaran No. 57, Randusari',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984854328638595162/unknown.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1939414093513!2d110.41108321508426!3d-6.9864214949529835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b455ba611bd%3A0x15cde10e2bb3a1!2sBandeng%20Juwana%20Elrina%20-%20Pandanaran!5e0!3m2!1sid!2sid!4v1655266625582!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'07.00',
        'jam_tutup'=>'21.00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'Bank BRI---120 m---Mc Donalds---140 m',
        'kontak_toko'=>'0248311488',
        'sosmed_toko'=>'bandengjuwana' ,
        'website_toko'=>'https://www.bandengjuwana.id/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984854531236048996/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>31,
        'nama_toko'=>'Toko oleh - oleh Khas Malinau',
        'idlokasi'=>44,
        'nama_lokasi'=>'Tarakan',
        'alamat_toko'=>'Jl.Kuala Lapang, Malinau',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984855424618614824/unknown.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15929.856974734137!2d116.60137!3d3.4793!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x62c276b0378e8205!2zM8KwMjgnNDUuNSJOIDExNsKwMzYnMDQuOSJF!5e0!3m2!1sen!2sus!4v1655266672106!5m2!1sen!2sus"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'',
        'jam_tutup'=>'',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar---Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'081361564042',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984854973529604187/unknown.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>32,
        'nama_toko'=>'Gracia',
        'idlokasi'=>92,
        'nama_lokasi'=>'Ambon',
        'alamat_toko'=>'Jalan, Jl. DR. Setiabudi No.21, Kel Ahusen, Kec. Sirimau, Kota Ambon, Maluku 97127',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984512796043665520/Gracia_Oleh_Ambon.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15926.001159219635!2d128.1750682!3d-3.7003841!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce8496ef0e483%3A0x406141cea7700fb6!2sGracia%20Oleh%20Oleh%20Khas%20Ambon!5e0!3m2!1sid!2sid!4v1655261793955!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'8:00',
        'jam_tutup'=>'19:00',
        'fasilitas_toko'=>'Parkir Motor & Mobil---Pesan Antar',
        'jenis_sekitar'=>'ATM BRI--150M---Bandara Pattimura---20,1KM',
        'kontak_toko'=>'082330904348',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984518448656842812/Gracia_Oleh_Ambon_2.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>33,
        'nama_toko'=>'Athifah',
        'idlokasi'=>85,
        'nama_lokasi'=>'Kendari',
        'alamat_toko'=>'Jl. H. Supu Yusuf No.22, Bende, Kec. Kadia, Kota Kendari, Sulawesi Tenggara 93111',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984512342404517918/Athifah_Oleh_Kendari.jpg',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15920.77894777358!2d122.5189358!3d-3.9803092!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf0b57518a4a65aad!2sATHIFAH%20OLEH-OLEH%20KHAS%20KENDARI!5e0!3m2!1sid!2sid!4v1655261865534!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'22:00',
        'fasilitas_toko'=>'Parkir Motor & Mobil---Pesan Antar',
        'jenis_sekitar'=>'ATM Mandiri & BNI ---1KM---Bandara Haluoleo---21KM',
        'kontak_toko'=>'085256107272',
        'sosmed_toko'=>'' ,
        'website_toko'=>'http://www.athifah-metekendari.com/home',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984518446568075284/Athifah_Oleh_Kendari_2.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>34,
        'nama_toko'=>'Petak 10',
        'idlokasi'=>92,
        'nama_lokasi'=>'Ambon',
        'alamat_toko'=>'Jl. DR. Siwabessy, Kel Mangga Dua, Kec. Nusaniwe, Kota Ambon, Maluku',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984512829514199070/Petak_10.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15925.95376627988!2d128.1769937!3d-3.7030195!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4b95d8afd4c12a1f!2sPETAK%2010%20Ole%20Ole%20Khas%20Ambon!5e0!3m2!1sid!2sid!4v1655261890565!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'09:00',
        'jam_tutup'=>'18:00',
        'fasilitas_toko'=>'Parkir Motor & Mobil',
        'jenis_sekitar'=>'ATM BNI---450M---ATM BCA---1KM---Bandara Pattimura---20,8KM',
        'kontak_toko'=>'081344826357',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984518448946225152/Petak_10_2.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>35,
        'nama_toko'=>'Prima Garden',
        'idlokasi'=>96,
        'nama_lokasi'=>'Jayapura',
        'alamat_toko'=>'Jl. Ahmad Yani No.28, Gurabesi, Kec. Jayapura Utara, Kota Jayapura, Papua 99222',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984512885474607124/Prima_Garden_Jayapura.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15943.553202455905!2d140.7017882!3d-2.5432795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x238624e5ad30f3eb!2sPrima%20Garden%20Jayapura!5e0!3m2!1sid!2sid!4v1655261949488!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'09:00',
        'jam_tutup'=>'22:00',
        'fasilitas_toko'=>'Parkir Motor & Mobil---Makan Di Tempat',
        'jenis_sekitar'=>'ATM---300M---Bandara Dortheys Hiyo Eluay---34KM',
        'kontak_toko'=>'08967532038',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984518445448175616/Prima_Garden_Jayapura_2.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>36,
        'nama_toko'=>'Brownte',
        'idlokasi'=>85,
        'nama_lokasi'=>'Kendari',
        'alamat_toko'=>'Jl. Syech Yusuf, Korumba, Kec. Mandonga, Kota Kendari, Sulawesi Tenggara 93231',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984512633606639637/Brownte.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15920.970649212974!2d122.5253007!3d-3.9703819!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x388160bda4152ff7!2sBrownte%20Kendari%20by%20Ari%20Untung%26Fenita%20Ari!5e0!3m2!1sid!2sid!4v1655261904132!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'22:00',
        'fasilitas_toko'=>'Parkir Motor & Mobil---Pesan Antar',
        'jenis_sekitar'=>'ATM BNI, ATM BCA, BRI, Mandiri---400M---Bandara Haluoleo---22,2KM',
        'kontak_toko'=>'082393124817',
        'sosmed_toko'=>'browntekendari' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984518447503384656/Brownte_2.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>37,
        'nama_toko'=>'The Ambon Manise',
        'idlokasi'=>92,
        'nama_lokasi'=>'Ambon',
        'alamat_toko'=>'Jl. Cendrawasih Jl. Belakang Soya, Kelurahan Rijali, Sirimau, Kota Ambon, Maluku',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984512968484061204/The_Ambon_Manise.jpg',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.5357561637616!2d128.1879275!3d-3.6924840999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce92830650b65%3A0xa6746697a096aab1!2sToko%20Oleh-Oleh%20The%20Ambon%20Manise%20Shop%20Pusat%20-%20Khas%20Maluku%20Terlengkap!5e0!3m2!1sid!2sid!4v1655261921013!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08.00 (Minggu buka jam 12.00)',
        'jam_tutup'=>'21.00',
        'fasilitas_toko'=>'Parkir Motor & Mobil---Pesan Antar',
        'jenis_sekitar'=>'ATM BNI---240M---ATM Mandiri---600M---Bandara Pattimura---19,1KM',
        'kontak_toko'=>'082248210607',
        'sosmed_toko'=>'' ,
        'website_toko'=>'http://www.theambonmaniseshop.com/',
        'galeri_toko'=>'https://media.discordapp.net/attachments/964470483875672094/984512967951392829/The_Ambon_Manise_2.jpg?width=710&height=473',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>38,
        'nama_toko'=>'BRAVO Oleh-oleh Khas Kendari Mandonga',
        'idlokasi'=>85,
        'nama_lokasi'=>'Kendari',
        'alamat_toko'=>'Jl. Syech Yusuf No.12A, Korumba, Kec. Mandonga, Kota Kendari, Sulawesi Tenggara 93111',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984512525737533491/Brovo_Oleh_Mandonga.jpg',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.254566065619!2d122.51865099999999!3d-3.9679122999999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98f2941efe5bd3%3A0x108b724415196b9d!2sBRAVO%20OLEH-OLEH%20KHAS%20KENDARI!5e0!3m2!1sid!2sid!4v1655261964289!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'20:00',
        'fasilitas_toko'=>'Parkir Motor & Mobil---Pesan Antar',
        'jenis_sekitar'=>'ATM Mandiri---150M---ATM BCA---450M---Bandara Haluoleo---23KM',
        'kontak_toko'=>'082354923800',
        'sosmed_toko'=>'bravosouveni' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984518447159476264/Bravo_Produk.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>39,
        'nama_toko'=>'BRAVO Oleh-oleh Khas Kendari Wua-wua',
        'idlokasi'=>85,
        'nama_lokasi'=>'Kendari',
        'alamat_toko'=>'Jl. Jend. Ahmad Yani No.62, Kadia, Kec. Kadia, Kota Kendari, Sulawesi Tenggara 93117',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984512597246214164/Bravo_Oleh_Wua-Wua_2.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.1604228102983!2d122.50703449999997!3d-3.9874018999999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98f30878334b1b%3A0xb6e00363a81c5c00!2sBRAVO%20OLEH-OLEH%20KHAS%20KENDARI%20WUA-WUA!5e0!3m2!1sid!2sid!4v1655261991465!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'20:00',
        'fasilitas_toko'=>'Parkir Motor & Mobil---Pesan Antar',
        'jenis_sekitar'=>'ATM BNI---80M---Bandara Haluoleo---20,2KM',
        'kontak_toko'=>'085333168585',
        'sosmed_toko'=>'bravosouvenir' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984518447159476264/Bravo_Produk.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>40,
        'nama_toko'=>'Toko Oleh-Oleh Kota Daeng',
        'idlokasi'=>87,
        'nama_lokasi'=>'Makassar',
        'alamat_toko'=>'Jl. Perintis Kemerdekaan, Sudiang, Kec. Biringkanaya, Kota Makassar, Sulawesi Selatan 90552',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984513027053338664/Toko_Oleh_Kota_Daeng.png',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15896.85987652106!2d119.5250893!3d-5.0688758!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2ccd50a749201ae4!2sTOKO%20OLEH-OLEH%20KOTA%20DAENG!5e0!3m2!1sid!2sid!4v1655262015194!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'23:00',
        'fasilitas_toko'=>'Parkir Motor & Mobil---Pesan Antar',
        'jenis_sekitar'=>'ATM Mandri---850M---Bandara Sultan Hasanuddin---3,8KM',
        'kontak_toko'=>'082189590055',
        'sosmed_toko'=>'oleholeh.kotadaeng' ,
        'website_toko'=>'https://toko-oleh-oleh-kota-daeng.business.site/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984518446089920552/Toko_Oleh_Kota_Daeng_4.jpg.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>41,
        'nama_toko'=>'Cahaya Oleh-Oleh (Pusat)',
        'idlokasi'=>87,
        'nama_lokasi'=>'Makassar',
        'alamat_toko'=>'Jl. Sulawesi No.181, Melayu Baru, Kec. Wajo, Kota Makassar, Sulawesi Selatan 90173',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984512700979753030/Cahaya_Oleh_Pusat_3.jpg',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15895.418993586653!2d119.408721!3d-5.1270909!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x408caff0a0495159!2sCahaya%20Oleh-Oleh%20(Pusat)!5e0!3m2!1sid!2sid!4v1655262051514!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Motor & Mobil---Pesan Antar',
        'jenis_sekitar'=>'ATM BRI---110M---Bandara Sultan Hasanuddin---17,8KM',
        'kontak_toko'=>'(0411)3634470',
        'sosmed_toko'=>'cahayaoleholeh' ,
        'website_toko'=>'http://cahayaoleholeh.com/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984512700723892224/Cahaya_Oleh_Pusat_2.jpg',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>42,
        'nama_toko'=>'Cahaya Oleh-Oleh (Cabang : Toddopuli)',
        'idlokasi'=>87,
        'nama_lokasi'=>'Makassar',
        'alamat_toko'=>'Jalan Toddopuli Raya Timur Blok C2 No.15, Panakkukang, Paropo, Borong, Manggala, Makassar City, South Sulawesi 90222',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984512762006888478/Cahaya_Oleh_Toddopuli_2.jpg',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15894.525372684628!2d119.4537126!3d-5.1628664!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb32bfb93f527c40e!2sCahaya%20Oleh-Oleh%20(Cabang%20%3A%20Toddopuli)!5e0!3m2!1sid!2sid!4v1655262029918!5m2!1sid!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'20:00',
        'fasilitas_toko'=>'Parkir Motor & Mobil---Pesan Antar',
        'jenis_sekitar'=>'ATM Mandiri---150M---ATM BRI---280M---ATM Mandiri, BRI, BCA, MEGA---500M---Bandara Sultan Hasanuddin---21,6KM',
        'kontak_toko'=>'(0411)4091471',
        'sosmed_toko'=>'cahayaoleholeh' ,
        'website_toko'=>'http://cahayaoleholeh.com/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984518448270962698/Cahaya_Oleh_Toddopuli_4.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>43,
        'nama_toko'=>'Krisna Oleh-oleh Bali',
        'idlokasi'=>74,
        'nama_lokasi'=>'Bali',
        'alamat_toko'=>', Jl. Sunset Road, Seminyak, Kec. Kuta, Kabupaten Badung, Bali 80361',
        'gambar_utama'=>'',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.8712217126704!2d115.180769!3d-8.703777499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246ce3a9fc6f9%3A0xd28e8c1354283c90!2sKrisna%20pusat%20oleh%20oleh%20khas%20bali!5e0!3m2!1sen!2ssg!4v1655188160976!5m2!1sen!2ssg"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'22:00',
        'fasilitas_toko'=>'Parkir Motor & Mobil---Pesan Antar',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'(0361) 750031',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://shop.krisnabali.co.id/about/',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>44,
        'nama_toko'=>'Agung Bali Pusat Oleh-oleh Khas Bali',
        'idlokasi'=>74,
        'nama_lokasi'=>'Bali',
        'alamat_toko'=>'Jl. Sunset Road No.18, Kuta, Kec. Kuta, Kabupaten Badung, Bali 80361',
        'gambar_utama'=>'',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.8422660226283!2d115.18260260000001!3d-8.706524899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246ca638f8daf%3A0x630f9e402dbf642c!2sAgung%20Bali%20Oleh-Oleh!5e0!3m2!1sen!2ssg!4v1655188203293!5m2!1sen!2ssg"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'20:00',
        'fasilitas_toko'=>'Parkir Motor & Mobil---Pesan Antar',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'(0361) 7992517',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://oleholehagungbali.com/',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>45,
        'nama_toko'=>'Oleh-oleh Khas Manado',
        'idlokasi'=>81,
        'nama_lokasi'=>'Manado',
        'alamat_toko'=>'Ranotana Weru, Wanea, Manado City, North Sulawesi',
        'gambar_utama'=>'',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.539075844877!2d124.84518109999999!3d1.4509400000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3287759ce0fe6847%3A0xca30815eda02d15a!2sOleh%20Oleh%20khas%20Manado!5e0!3m2!1sen!2ssg!4v1655188244833!5m2!1sen!2ssg"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'09:00',
        'jam_tutup'=>'17.00',
        'fasilitas_toko'=>'Parkir Motor & Mobil---Pesan Antar',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'0858-2284-1215',
        'sosmed_toko'=>'' ,
        'website_toko'=>'http://www.meldebkitchen.com/',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>46,
        'nama_toko'=>'Toko Manado Souvenir',
        'idlokasi'=>81,
        'nama_lokasi'=>'Manado',
        'alamat_toko'=>'Jalan B.W.Lapian No.25 Lawangirung, Tikala Kumaraka, Kec. Wenang, Kota Manado, Sulawesi Utara 95124',
        'gambar_utama'=>'',
        'map_toko'=>'<iframe src=""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.474768252684!2d124.84795220000001!3d1.4869641999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32877538901bddf9%3A0xbc08972c5c053120!2sToko%20Manado%20Souvenir!5e0!3m2!1sen!2ssg!4v1655188272191!5m2!1sen!2ssg"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Motor & Mobil---Pesan Antar',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'0813-4027-1299',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://www.klappertaartkawanua.com/',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>47,
        'nama_toko'=>'Shella',
        'idlokasi'=>34,
        'nama_lokasi'=>'Pangkal Pinang',
        'alamat_toko'=>'Jl. Garut Gg Kedondong Rt 05 Kel.Pasir Padi P. Pinang',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/rKzUzPz8xUxTo2mR9',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'17:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'0822 7914 0020',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>48,
        'nama_toko'=>'Sentra GETAS KAWAN HAKULE’ (35 UKM - Nur Jaya, Zahawa, Gurih DD, Abadi DR, dll)',
        'idlokasi'=>34,
        'nama_lokasi'=>'Pangkal Pinang (Kab. Bangka Tengah)',
        'alamat_toko'=>'Desa Kurau Barat Kecamatan Koba Kabupaten Bangka Tengah',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/AekScwnaSygzd58L7',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'17:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>49,
        'nama_toko'=>'Rini Amplang',
        'idlokasi'=>41,
        'nama_lokasi'=>'Banjarbaru',
        'alamat_toko'=>'Jl. Budi Waluyo, Komet, Kec. Banjarbaru Utara, Kota Banjar Baru, Kalimantan Selatan 70714',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/RQjMUAd4nqUaUgPB6',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'22:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'085248578252',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>50,
        'nama_toko'=>'UD. Harmas (Amplang Cap Ikan Pipih)',
        'idlokasi'=>37,
        'nama_lokasi'=>'Samarinda',
        'alamat_toko'=>'Jl. Imam Bonjol No.4, Pelabuhan, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75113',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/G7vLz3tCzAH8xFxb6',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'17:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'0541732139',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>51,
        'nama_toko'=>'UD. Harmas 2 (Amplang Cap Ikan Pipih)',
        'idlokasi'=>39,
        'nama_lokasi'=>'Balikapapan',
        'alamat_toko'=>'Jl. Jenderal Sudirman No.21a Stal Kuda (dpn asrama brimob) Damage Bahagia, Gn. Bahagia, Kecamatan Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur 76114',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/5MWQAA3L5Q6UhRfj8',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'19:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'0811585960',
        'sosmed_toko'=>'harmas.balikpapan' ,
        'website_toko'=>'',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>52,
        'nama_toko'=>'AKWET',
        'idlokasi'=>34,
        'nama_lokasi'=>'Pangkal Pinang (Kabupaten Bangka)',
        'alamat_toko'=>'Jl. Mayor Syafrie Rachman No.139, Kuto Panji, Belinyu, Kabupaten Bangka, Kepulauan Bangka Belitung 33253',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/7njK6ALYEwZ2akUM9',
        'jam_buka'=>'06:30',
        'jam_tutup'=>'21:30',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'081316129777',
        'sosmed_toko'=>'tokokerupuk_akwet' ,
        'website_toko'=>'',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>53,
        'nama_toko'=>'Kemplang Panggang MM',
        'idlokasi'=>34,
        'nama_lokasi'=>'Pangkal Pinang',
        'alamat_toko'=>'Air Itam, Kec. Bukitintan, Kota Pangkal Pinang, Kepulauan Bangka Belitung 33149',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/zDND5AWPjBgUQdJ2A',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'17:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'0817-0819-389',
        'sosmed_toko'=>'kempelang_mm' ,
        'website_toko'=>'',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>54,
        'nama_toko'=>'Kampoeng Timoer',
        'idlokasi'=>39,
        'nama_lokasi'=>'Balikpapan',
        'alamat_toko'=>'Straat 2 No. 30, Jl. Soekarno Hatta, Gn. Samarinda, Kec. Balikpapan Utara, Kota Balikpapan, Kalimantan Timur 76125',
        'gambar_utama'=>'',
        'map_toko'=>'https://g.page/KampoengTimoer?share',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'16:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'082152290906',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://kampoengtimoer.co.id/',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>55,
        'nama_toko'=>'Bontings',
        'idlokasi'=>39,
        'nama_lokasi'=>'Balikpapan',
        'alamat_toko'=>'Jl. Marsma R. Iswahyudi No.23B, Gn. Bahagia, Kecamatan Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur 76114',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/kMDsgrZZaPhUwZkd6',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'22:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'0813-4947-4696',
        'sosmed_toko'=>'' ,
        'website_toko'=>'http://www.bontings.com/',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>56,
        'nama_toko'=>'Aneka',
        'idlokasi'=>39,
        'nama_lokasi'=>'Balikpapan',
        'alamat_toko'=>'Jl. Marsma R. Iswahyudi No.25, Sepinggan, Kecamatan Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur 76115',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/u3XVYgCEdDRSonu78',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'22:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'082135876065',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>57,
        'nama_toko'=>'Bontings',
        'idlokasi'=>37,
        'nama_lokasi'=>'Samarinda',
        'alamat_toko'=>'Sungai Siring, Kec. Samarinda Utara, Kota Samarinda, Kalimantan Timur 75119',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/vSnA8M9rXGQcBiPC7',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'22:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'0813-4947-4696',
        'sosmed_toko'=>'' ,
        'website_toko'=>'http://www.bontings.com/',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>58,
        'nama_toko'=>'Happy',
        'idlokasi'=>35,
        'nama_lokasi'=>'Pontianak',
        'alamat_toko'=>'Jl. Sisingamangaraja No.11-16, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78117',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/5S5HRUq4U27DPCvi7',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'20:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'(0561) 740810',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>59,
        'nama_toko'=>'Asia',
        'idlokasi'=>35,
        'nama_lokasi'=>'Pontianak',
        'alamat_toko'=>'Komp. PSP, Jl. Patimura No.58, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/PP3jNd2B7VZtxKAg7',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'082251332358',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>60,
        'nama_toko'=>'Al-Fajar',
        'idlokasi'=>35,
        'nama_lokasi'=>'Pontianak',
        'alamat_toko'=>'Jl. Adi Sucipto No.8, Sungai Bangkong, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78244',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/61iqXwyqmqYRBpbt5',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'0813-5206-9494',
        'sosmed_toko'=>'bingke_alfajar' ,
        'website_toko'=>'',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>61,
        'nama_toko'=>'Blue Sky',
        'idlokasi'=>39,
        'nama_lokasi'=>'Balikpapan',
        'alamat_toko'=>'Bandara Udara Sultan Aji Muhammad Sulaiman, Terminal Keberangkatan, Jalan Marsma Iswahyudi No. 3, Sepinggan, Balikpapan Selatan, Sepinggan, Kecamatan Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur 76115',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/oKVAAyZb2DwjTkrB6',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'05427577011',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://www.blue-sky.co.id/page/blue-sky-mantau',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>62,
        'nama_toko'=>'Aneka',
        'idlokasi'=>32,
        'nama_lokasi'=>'Bandar Lampung',
        'alamat_toko'=>'Jl. Ikan Kakap No.26 - 28, Pesawahan, Kec. Telukbetung Selatan, Kota Bandar Lampung, Lampung 35221',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/WpM2kTtXQRXm5Ywr7',
        'jam_buka'=>'07:30',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'0822-8868-8868',
        'sosmed_toko'=>'' ,
        'website_toko'=>'http://www.anekasarirasa.com/',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>63,
        'nama_toko'=>'Aneka',
        'idlokasi'=>32,
        'nama_lokasi'=>'Bandar Lampung',
        'alamat_toko'=>'Jl. Ikan Kakap No.21, Pesawahan, Kec. Telukbetung Selatan, Kota Bandar Lampung, Lampung 35223',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/c9PrZoVFvz8gkWXL7',
        'jam_buka'=>'07:30',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'',
        'sosmed_toko'=>'' ,
        'website_toko'=>'http://www.anekasarirasa.com/',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>64,
        'nama_toko'=>'Yussy Akmal',
        'idlokasi'=>32,
        'nama_lokasi'=>'Bandar Lampung',
        'alamat_toko'=>'Jl. ZA. Pagar Alam, Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35132',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/pnwUz6Wni9u35pVF7',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'0721-5610029',
        'sosmed_toko'=>'' ,
        'website_toko'=>'http://www.yussyakmal.com/',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>65,
        'nama_toko'=>'Babe',
        'idlokasi'=>34,
        'nama_lokasi'=>'Pangkal Pinang (Kab. Bangka Tengah)',
        'alamat_toko'=>'Jl. GG Pisang Ds Batu Belubang, Kab. Bangka Tengah Prov. Bangka Belitung',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/F1CnesYSZyTX9V4S9',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'17:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'0852 7371 9048',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>66,
        'nama_toko'=>'Subiarti',
        'idlokasi'=>34,
        'nama_lokasi'=>'Pangkal Pinang (Kab. Bangka Tengah)',
        'alamat_toko'=>'Gang Pisang, RT 07, Desa Batu Belubang, Kec.Pangkalan Baru, Bangka Tengah',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/F1CnesYSZyTX9V4S99',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'17:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'085273719048',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>67,
        'nama_toko'=>'Galuh',
        'idlokasi'=>40,
        'nama_lokasi'=>'Banjarmasin',
        'alamat_toko'=>'Jalan Mayjen S. Parman No.5
        Belitung Selatan
        Banjarmasin Barat
        Kota Banjarmasin
        Kalimantan Selatan 70123
        Indonesia',
        'gambar_utama'=>'',
        'map_toko'=>'https://g.page/oleholehbanjar?share',
        'jam_buka'=>'07.30-22.00',
        'jam_tutup'=>'22:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'0857-5402-8042',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://oleholehbanjarmasin.business.site/',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>68,
        'nama_toko'=>'Andalas',
        'idlokasi'=>40,
        'nama_lokasi'=>'Banjarmasin',
        'alamat_toko'=>'Jl. Perintis Kemerdekaan No.12, RT.22, Ps. Lama, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 70123',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/zWEhrnYHEZQEQD7e7',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'0511-3353223',
        'sosmed_toko'=>'' ,
        'website_toko'=>'http://www.pabrikkerupukindonesia.com/',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>69,
        'nama_toko'=>'Wadai Banjar',
        'idlokasi'=>40,
        'nama_lokasi'=>'Banjarmasin',
        'alamat_toko'=>'Jl. A. Yani KM.2 No 83A Kecamatan Banjarmasin Timur, Sungai Baru, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 70122',
        'gambar_utama'=>'',
        'map_toko'=>'https://goo.gl/maps/R8nxGN1gaJUpBJyn9',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'22:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'0851-0020-8887',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://wadaibanjar.com/',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>70,
        'nama_toko'=>'Deknong Bakery',
        'idlokasi'=>1,
        'nama_lokasi'=>'Banda Aceh',
        'alamat_toko'=>'Jl. T. Hasan Dek No.234, Beurawe, Kec. Kuta Alam, Kota Banda Aceh, Aceh 24415',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984628335797747722/deknong_bakery.png',
        'map_toko'=>'https://g.page/DEKNONG?share',
        'jam_buka'=>'07:15',
        'jam_tutup'=>'22:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'085260375377',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://deknong-bakery.business.site/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984630041952550942/galeri_deknong.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>71,
        'nama_toko'=>'Phin Phin',
        'idlokasi'=>6,
        'nama_lokasi'=>'Medan',
        'alamat_toko'=>'Jl. Dewa Ruci No.32 - 34, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20112',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984630870507929620/phin_phin.png',
        'map_toko'=>'https://goo.gl/maps/NByov3fw42WE1yJr5',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'17:30',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'0614525121',
        'sosmed_toko'=>'' ,
        'website_toko'=>'http://www.tokokuephinphin.com/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984631915686543360/galeri_phin.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>72,
        'nama_toko'=>'Racha',
        'idlokasi'=>29,
        'nama_lokasi'=>'Pekanbaru',
        'alamat_toko'=>'GCPV+XFR, Kp. Dalam, Kec. Senapelan, Kota Pekanbaru, Riau 28155',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984634052248223774/racha.png',
        'map_toko'=>'https://goo.gl/maps/XapfEUL2Ua8PsUNbA',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'17:00',
        'fasilitas_toko'=>'Pesan Antar',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'082174822297',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>73,
        'nama_toko'=>'Rumah Sanjai',
        'idlokasi'=>19,
        'nama_lokasi'=>'Bukittinggi',
        'alamat_toko'=>'M9WC+H9X, Benteng Ps. Atas, Kec. Guguk Panjang, Kota Bukittinggi, Sumatera Barat 26136',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984635451010854972/rumah_sanjai.png',
        'map_toko'=>'https://goo.gl/maps/DWeACdAwSvV4Q1ju5',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'18:00',
        'fasilitas_toko'=>'Pesan Antar',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'081363890676',
        'sosmed_toko'=>'' ,
        'website_toko'=>'http://www.rumahsanjai.com/',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>74,
        'nama_toko'=>'Aqilla',
        'idlokasi'=>46,
        'nama_lokasi'=>'Tangerang',
        'alamat_toko'=>'TUTUP SEMENTARA KARENA MAU PINDAH, Jl. Merpati Raya No.85, Sawah Baru, Kec. Ciputat, Kota Tangerang Selatan, Banten 15413',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984637149389422602/aqilla.png',
        'map_toko'=>'https://g.page/Keripik_Aqilla?share',
        'jam_buka'=>'09:00',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'08551134577',
        'sosmed_toko'=>'' ,
        'website_toko'=>'http://keripiksingkongsanjai.blogspot.com/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984637207451172874/galeri_aqilla.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>75,
        'nama_toko'=>'Ananda',
        'idlokasi'=>19,
        'nama_lokasi'=>'Bukittinggi',
        'alamat_toko'=>'Jl. H. Agus Salim No.25, Kayu Kubu, Kec. Guguk Panjang, Kota Bukittinggi, Sumatera Barat 26113',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984640049108897812/ananda.png',
        'map_toko'=>'https://goo.gl/maps/StFBrBwHD2CDRoyz5',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'23:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'07528805330',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984640106059169842/galeri_ananda.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>76,
        'nama_toko'=>'Anna',
        'idlokasi'=>21,
        'nama_lokasi'=>'Payakumbuh',
        'alamat_toko'=>'Jl. Imam Bonjol, Bulakan Balai Kandih, Kec. Payakumbuh Bar., Kota Payakumbuh, Sumatera Barat 26223',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984641767561396274/anna.png',
        'map_toko'=>'https://g.page/Sanjaiannapyk?share',
        'jam_buka'=>'06:30',
        'jam_tutup'=>'22:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'085278443873',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984641810787881000/galeri_anna.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>77,
        'nama_toko'=>'Nan Salero',
        'idlokasi'=>18,
        'nama_lokasi'=>'Padang',
        'alamat_toko'=>'Jl. Niaga No.229, Kp. Pd., Kec. Padang Bar., Kota Padang, Sumatera Barat 25119',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984645330383564840/nan_salero.png',
        'map_toko'=>'https://g.page/Nan-salero?share',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'075132863',
        'sosmed_toko'=>'' ,
        'website_toko'=>'http://www.nansalero.com/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984645383198232616/galeri_nan_salero.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>78,
        'nama_toko'=>'Rina',
        'idlokasi'=>21,
        'nama_lokasi'=>'Payakumbuh',
        'alamat_toko'=>'Jl. Imam Bonjol No.39 Kel, Bulakan Balai Kandih, Kec. Payakumbuh Bar., Kota Payakumbuh, Sumatera Barat 26225',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984646927343837194/rina.png',
        'map_toko'=>'https://goo.gl/maps/fPzFi5LT8yG58gxW9',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'22:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'081363429779',
        'sosmed_toko'=>'' ,
        'website_toko'=>'https://pusat-oleh-oleh-sanjai-rina-payakumbuh.business.site/',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984646968875835442/galeri_rina.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>79,
        'nama_toko'=>'Galamai Pandan',
        'idlokasi'=>18,
        'nama_lokasi'=>'Padang',
        'alamat_toko'=>'Jl. Khatib Sulaiman No.11 A, Gn. Pangilun, Kec. Padang Utara, Kota Padang, Sumatera Barat 25137',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984650765421383690/pandan.png',
        'map_toko'=>'https://goo.gl/maps/DUT9EFXaE5wGRZtZ6',
        'jam_buka'=>'07:00',
        'jam_tutup'=>'21:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'085261094100',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>80,
        'nama_toko'=>'Erina',
        'idlokasi'=>21,
        'nama_lokasi'=>'Payakumbuh',
        'alamat_toko'=>'Jl. Palembang No.Kelurahan, Parik Rantang, Kec. Payakumbuh Bar., Kota Payakumbuh, Sumatera Barat 26218',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/984659261630070804/erina.png',
        'map_toko'=>'https://goo.gl/maps/tgDrvySNpKMq7NbN8',
        'jam_buka'=>'08:00',
        'jam_tutup'=>'22:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Pesan Antar--Toilet',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'085211364641',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/984659352222842900/galeri_erina.png',
        'galeri_toko_caption'=>''
        ]);
         DB::table('toko_oleh')->insert
        ([
         'idtoko'=>81,
        'nama_toko'=>'Sentra UKM Siola',
        'idlokasi'=>66,
        'nama_lokasi'=>'Surabaya',
        'alamat_toko'=>'Jl. Tunjungan No.1-3, Genteng, Kec. Genteng, Kota SBY, Jawa Timur 60275',
        'gambar_utama'=>'https://cdn.discordapp.com/attachments/964470483875672094/990108321312804944/867987.jpg',
        'map_toko'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.43752040468!2d112.72880496977537!3d-7.256840500000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f95d67d8c6c7%3A0xae38021c3316b375!2sOleh%20Oleh%20Khas%20Surabaya%20-%20Sentra%20UKM%20Siola!5e0!3m2!1sen!2sid!4v1656129854125!5m2!1sen!2sid"" width=""600"" height=""450"" style=""border:0;"" allowfullscreen="""" loading=""lazy"" referrerpolicy=""no-referrer-when-downgrade""></iframe>',
        'jam_buka'=>'10:00',
        'jam_tutup'=>'20:00',
        'fasilitas_toko'=>'Parkir Mobil & Motor---Toilet--Kantin---Ruang Tunggu',
        'jenis_sekitar'=>'',
        'kontak_toko'=>'085655927391',
        'sosmed_toko'=>'' ,
        'website_toko'=>'',
        'galeri_toko'=>'https://cdn.discordapp.com/attachments/964470483875672094/990106905034784799/IMG20220219141654.jpg---https://cdn.discordapp.com/attachments/964470483875672094/990106830044803132/IMG20220219141636.jpg',
        'galeri_toko_caption'=>''
        ]);
    }
}
