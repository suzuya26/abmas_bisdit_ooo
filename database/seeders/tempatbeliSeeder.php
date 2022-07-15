<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tempatbeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tempatbeli')->insert([
            'idtempatbeli'=>1,
            'merk'=>'Meranti', 'rentang_harga'=>'80000-115000', 'satuan'=>'per roll', 'varianjual'=>'Standard Rasa Keju---Standard Rasa Moka---Standard Rasa Nenas---Standard Rasa Strawberry---Standard Rasa Blueberry---Standard Rasa Cappucino---Standard Rasa Kacang---Special Rasa Double Cokelat---Special Rasa Abon Ayam---Topping Cokelat Rasa Keju---Topping Cokelat Rasa Moka---Topping Cokelat Rasa Nenas---Topping Cokelat Rasa Strawberry---Topping Cokelat Rasa Blueberry---Topping Cokelat Rasa Cappucino---Topping Cokelat Rasa Kacang---Topping Keju Rasa Keju---Topping Keju Rasa Moka---Topping Keju Rasa Nenas---Topping Keju Rasa Strawberry---Topping Keju Rasa Blueberry---Topping Keju Rasa Cappucino---Topping Keju Rasa Kacang---Topping Kacang Rasa Keju---Topping Kacang Rasa Moka---Topping Kacang Rasa Nenas---Topping Kacang Rasa Strawberry---Topping Kacang Rasa Bluberry---Topping Kacang Rasa Cappucino---Topping Kacang Rasa Kacang

            ',
            'best_seller'=>'',
            'bundle'=>'3in1, Giftpack',
            'kemasan'=>'kotak',
            'alamat'=>'Jl. Kruing simpang Razak No.7C',
            'jambuka'=>'07.00 - 20.00',
            'google_map'=>'',
            'link'=>'https://www.bolumeranti.co.id/',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/915301911425581086/Meranti.jpg',
            'idlokasi'=>6,
            'idoleh'=>1,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>2,
            'merk'=>'Medan Napoleon', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'Durian, Great Chocolate, Extra Cheese, Tiramisu, Greentea, Red Velvet,Caramel',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/906169302720344095/MedanNapoleon_1.jpg',
            'idlokasi'=>6,
            'idoleh'=>2,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>3,
            'merk'=>'Blue Sky', 'rentang_harga'=>'145000-150000', 'satuan'=>'per 10 pcs', 'varianjual'=>'',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak',
            'alamat'=>'Jl. Letjen Suprapto No. 1',
            'jambuka'=>'',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=letjen%20s%20parman%201%20balikpapan&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-org.net"">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">google maps embed wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'https://www.blue-sky.co.id/page/blue-sky-mantau',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914556739611918336/BlueSky.jpg',
            'idlokasi'=>39,
            'idoleh'=>3,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>4,
            'merk'=>'Mantau Fya', 'rentang_harga'=>'16000 - 40000', 'satuan'=>'per 10 pcs', 'varianjual'=>'Original---Mantau Kering Kepiting Lada Hitam---Mantau Kering Bawang Dayak---Mantau Kering Kepiting Asam Manis---Mantau Kering Original Susu',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak',
            'alamat'=>'Perum Bangun Reksa Blok A No.47 Kilo 6',
            'jambuka'=>'',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=letjen%20s%20parman%201%20balikpapan&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-org.net"">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">google maps embed wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'https://www.mantaufya.com/',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914556764165378058/Fya.jpg',
            'idlokasi'=>39,
            'idoleh'=>3,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>5,
            'merk'=>'Jumpa Bogor', 'rentang_harga'=>'28000 - 50000', 'satuan'=>'per roll', 'varianjual'=>'Gandum Sei Sapi---Sei Sapi---Lilit---Banana Sweet Cheese---Keju Cranberry---Jagung Susu---Coffee Caramel---Apple Berry---Apel---Martabak---Talas Nanas---Bakso',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak---kardus',
            'alamat'=>'Jl. Padjajaran No. 3F',
            'jambuka'=>'',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=Padjajaran%20No.%203F&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'https://www.instagram.com/jumpabogor/',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/915231887381901332/JumpaBogor_1.jpg',
            'idlokasi'=>53,
            'idoleh'=>4,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>6,
            'merk'=>'Dhian', 'rentang_harga'=>'20000-25000', 'satuan'=>'per 10 pcs', 'varianjual'=>'Original---Strawberry---Cokelat---Cokelat Keju---Blueberry---Original Keju',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak---kardus',
            'alamat'=>'Jalan Nangka Denpasar Selatan, Bali',
            'jambuka'=>'',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=jalan%20nangka%20denpasar%20selatan&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'https://piesusudhian.co.id/',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/906462987043364924/PieSusu_Dhian.jpg',
            'idlokasi'=>75,
            'idoleh'=>5,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>7,
            'merk'=>'Sari', 'rentang_harga'=>'19500-20000', 'satuan'=>'per 10 pcs', 'varianjual'=>'Original',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak---kardus',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'https://www.instagram.com/piesususari/',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/915233198831697970/Sari.jpg',
            'idlokasi'=>75,
            'idoleh'=>5,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>8,
            'merk'=>'Bli Man', 'rentang_harga'=>'35000-37000', 'satuan'=>'per 10 pcs', 'varianjual'=>'Original---Chocochips---Keju---Almond',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak---kardus',
            'alamat'=>'Jalan Kerta Dalam Sari 3 Gang Cemara No.15, Sidakarya, Denpasar',
            'jambuka'=>'',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=jalan%20kerta%20dalam%20sari%203&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'https://www.piesusubliman.com/',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/915232756387168336/BliMan.jpg',
            'idlokasi'=>75,
            'idoleh'=>5,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>9,
            'merk'=>'Asli Enaaak', 'rentang_harga'=>'30000-35000', 'satuan'=>'per 10 pcs', 'varianjual'=>'Original---Coklat---Keju',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak---kardus',
            'alamat'=>'Jalan Nangka Selatan Nomor 163, Denpasar.',
            'jambuka'=>'',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=jalan%20nangka%20selatan%20163&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'https://www.instagram.com/piesusuaslienaaakreal/',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/906464933246541834/PieSusu_Asli_Enaaak.jpg',
            'idlokasi'=>75,
            'idoleh'=>5,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>10,
            'merk'=>'Sangkuriang', 'rentang_harga'=>'36000 - 38000', 'satuan'=>'per kotak', 'varianjual'=>'Sop Duren Keju---Original Keju---Full Talas Keju---Talas Susu---Coco Pandan Keju---Brownies Keju---Chocovilla Keju---Pisang Coklat Keju---Original Extra Keju---Kopi Susu---Chocovilla Oreo---Blackforest',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak---kardus',
            'alamat'=>'Jl. Padjajaran No. 20i Komplek Ruko Perkantoran, Jl. Bantar Kemang, RT.06/RW.04, Baranangsiang',
            'jambuka'=>'',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=jalan%20padjajaran%2020i%20bantar%20kemang&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'https://lapisbogor.co.id/',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/915235403844427816/Sangkuriang.jpeg',
            'idlokasi'=>53,
            'idoleh'=>6,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>11,
            'merk'=>'Arasari', 'rentang_harga'=>'29000 - 32000', 'satuan'=>'per kotak', 'varianjual'=>'Full Talas---Susu---Alpukat---Aneka Rasa---Brownies---Pandan---Strawberry---Greentea---Nangka----Durian---Original',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak---kardus',
            'alamat'=>'Jl. Raya Pajajaran No. 84 Ruko E Baranangsiang',
            'jambuka'=>'',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=jalan%20raya%20padjajaran%2084&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'https://arasari.co.id/',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/915234328475230258/Arasari.jpg',
            'idlokasi'=>53,
            'idoleh'=>6,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>12,
            'merk'=>'Sangkuriang', 'rentang_harga'=>'26000 - 27000', 'satuan'=>'per kotak', 'varianjual'=>'Cokelat---Keju---Cokelat & Rice Crispy',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak---kardus',
            'alamat'=>'Jl. Padjajaran No. 20i Komplek Ruko Perkantoran, Jl. Bantar Kemang, RT.06/RW.04, Baranangsiang',
            'jambuka'=>'',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=jalan%20padjajaran%2020i%20bantar%20kemang&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'https://lapisbogor.co.id/',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/915235403844427816/Sangkuriang.jpeg',
            'idlokasi'=>53,
            'idoleh'=>7,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>13,
            'merk'=>'Abuy', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'https://images.tokopedia.net/img/cache/100-square/VqbcmM/2020/8/5/b094bd8f-f358-40fc-a05e-30e303f74404.jpg',
            'idlokasi'=>50,
            'idoleh'=>8,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>14,
            'merk'=>'Riri', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'https://images.tokopedia.net/img/cache/100-square/VqbcmM/2020/8/9/b75dd493-62df-405f-b2ef-1334f0041012.jpg',
            'idlokasi'=>50,
            'idoleh'=>8,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>15,
            'merk'=>'Tugu', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'Keju, Coklat, Kacang Hijau, Brownies rasa Keju, Brownies rasa Cokelat',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'http://pesonanusantara.co.id/images/upload/pes-originalkejub_(1)5.jpg',
            'idlokasi'=>65,
            'idoleh'=>9,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>16,
            'merk'=>'Khairana', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'http://pesonanusantara.co.id/images/upload//k/h/khairana_peanut_chocolate_cookies_2_.jpg',
            'idlokasi'=>65,
            'idoleh'=>10,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>17,
            'merk'=>'Khairana', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'http://pesonanusantara.co.id/images/upload//k/h/khairana_coklat_cookies_1_.jpg',
            'idlokasi'=>65,
            'idoleh'=>10,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>18,
            'merk'=>'Khairana', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'http://pesonanusantara.co.id/images/upload//k/h/khairana_peanut_cookies.jpg',
            'idlokasi'=>65,
            'idoleh'=>10,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>19,
            'merk'=>'Nyah Tewel', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'Sambal Matah, Sambal Ijo, Sambal Tuna',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'http://pesonanusantara.co.id/images/upload/Foto-aneka-sambal-225.jpg',
            'idlokasi'=>66,
            'idoleh'=>11,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>20,
            'merk'=>'Dokar', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'http://pesonanusantara.co.id/images/upload//p/e/pes-kopimocacinob.jpg',
            'idlokasi'=>66,
            'idoleh'=>12,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>21,
            'merk'=>'Dokar', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'http://pesonanusantara.co.id/images/upload//p/e/pes-kopiijob.jpg',
            'idlokasi'=>66,
            'idoleh'=>12,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>22,
            'merk'=>'Dokar', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'http://pesonanusantara.co.id/images/upload//p/e/pes-whitecoffeb.jpg',
            'idlokasi'=>66,
            'idoleh'=>12,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>23,
            'merk'=>'Keraton', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'http://pesonanusantara.co.id/images/upload/pes-bumbunasigoreng1.jpg',
            'idlokasi'=>72,
            'idoleh'=>13,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>24,
            'merk'=>'Amura', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'Ayam Bakar, Jagung Bakar, Keju Manis',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'http://pesonanusantara.co.id/images/upload/pes-AmuraJagungCrispyA13.jpg',
            'idlokasi'=>55,
            'idoleh'=>14,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>25,
            'merk'=>'Mavel', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'Buah Pepaya, Buah Asam Jawa, Buah Cereme',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'http://pesonanusantara.co.id/images/upload/pes-PepayaA12.jpg',
            'idlokasi'=>55,
            'idoleh'=>15,
            'idmitra'=>null,

            ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>26,
            // 'merk'=>'Ummi Aufa Hakim', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'',
            // 'alamat'=>'',
            // 'jambuka'=>'',
            // 'google_map'=>'',
            // 'link'=>'',
            // 'gambarproduk'=>'',
            // 'idlokasi'=>19,
            // 'idoleh'=>17,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>27,
            // 'merk'=>'Ummi Aufa Hakim', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'',
            // 'alamat'=>'',
            // 'jambuka'=>'',
            // 'google_map'=>'',
            // 'link'=>'',
            // 'gambarproduk'=>'',
            // 'idlokasi'=>19,
            // 'idoleh'=>17,
            // 'idmitra'=>null,

            // ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>28,
            'merk'=>'Ummi Aufa Hakim', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'',
            'idlokasi'=>19,
            'idoleh'=>17,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>29,
            'merk'=>'Ummi Aufa Hakim', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'',
            'idlokasi'=>19,
            'idoleh'=>17,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>30,
            'merk'=>'Ummi Aufa Hakim', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'',
            'idlokasi'=>19,
            'idoleh'=>17,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>31,
            'merk'=>'Wisata Rasa', 'rentang_harga'=>'50000-70000', 'satuan'=>'per kotak', 'varianjual'=>'Original---Cokelat---Greentea---Mocca',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak',
            'alamat'=>'Jl. Basuki Rahmat 72',
            'jambuka'=>'',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=basuki%20rahmat%2072%20surabaya&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-org.net"">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">google maps embed wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'https://www.wisatarasasurabaya.com/',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/915289970716065842/Wisata_Rasa.jpg',
            'idlokasi'=>66,
            'idoleh'=>17,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>32,
            'merk'=>'Hawai Bakery', 'rentang_harga'=>'125000 - 127000', 'satuan'=>'per 10 pcs', 'varianjual'=>'Abon Sapi---Abon Sapi Keju---Abon Ayam---Abon Sapi Almond---Abon Sapi Tuna---Abon Sapi Sosis',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak',
            'alamat'=>'Jl. Jenderal Sudirman No.100',
            'jambuka'=>'',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=jenderal%20sudirman%20100%20manokwari&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org""></a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net""></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'https://www.facebook.com/ABON-gulung-HAWAI-bakery-101557268482421/',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/915290450187935784/Hawai.jpg',
            'idlokasi'=>94,
            'idoleh'=>18,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>33,
            'merk'=>'Keraton', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'http://pesonanusantara.co.id/images/upload/pes-pecelkeraton11.jpg',
            'idlokasi'=>72,
            'idoleh'=>19,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>34,
            'merk'=>'Bo Liem', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'http://pesonanusantara.co.id/images/upload//p/e/pes-kejub_5.jpg',
            'idlokasi'=>72,
            'idoleh'=>20,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>35,
            'merk'=>'Spiku Rumah Roti', 'rentang_harga'=>'33000-190000', 'satuan'=>'per kotak', 'varianjual'=>'Keju---Rainbow----Classic---Kismis---Almond Kenari',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak',
            'alamat'=>'Jl. Rungkut Mapan Utara No.15, Central Rungkut, Gunung Anyar, Surabaya',
            'jambuka'=>'08.00 - 18.00',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=rungkut%20mapan%20utara%2015&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'https://www.instagram.com/spikurumahroti/?hl=en',
            'gambarproduk'=>'https://www.instagram.com/spikurumahroti/',
            'idlokasi'=>null,
            'idoleh'=>null,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>36,
            'merk'=>'Spikoe Resep Kuno', 'rentang_harga'=>'85000 - 300000', 'satuan'=>'per kotak', 'varianjual'=>'Reguler Speculaas---Reguler Kismis---Reguler Plum---Reguler Tanpa Kismis---Spesial Plum---Spesial Kismis---Spesial Tanpa Kismis',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak',
            'alamat'=>'Jl. Rungkut Madya 41 Surabaya 60293, East Java - Indonesia',
            'jambuka'=>'07.00 - 20.30',
            'google_map'=>'div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=rungkut%20madya%2041&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'https://spikoeresepkuno.com',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914554181568856124/SpikoeResepKuno.jpg',
            'idlokasi'=>66,
            'idoleh'=>null,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>37,
            'merk'=>'Spikoe Livana', 'rentang_harga'=>'47000-68000', 'satuan'=>'per kotak', 'varianjual'=>'Original---Batik Pandan---Batik Moka---Batik Original---Bronis Pandan---Bronis Original---Ovomaltine---Nutella---Coklat Kismis---Pandan---Moka---Kismis---Kenari',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak',
            'alamat'=>'Jl. R.A Kartini No. 127, Kec. Tegalsari, Surabaya',
            'jambuka'=>'07.00 - 20.00',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=ra%20kartini%20127%20tegalsari&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'https://spikoelivana.com',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914554076530901052/Livana.jpg',
            'idlokasi'=>66,
            'idoleh'=>null,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>38,
            'merk'=>'Santis Cake', 'rentang_harga'=>'95000-170000', 'satuan'=>'per kotak', 'varianjual'=>'Kacang Kenari',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak',
            'alamat'=>'Jl. Mulyosari Timur 34, Jl. HR Muhammad 49-55, Ruko Apartement Taman Beverly No.2',
            'jambuka'=>'07.00 - 20.00',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=mulyosari%20timur%2034&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'http://santiscake.com/ind-review.html',
            'gambarproduk'=>'https://www.instagram.com/santis_cake/',
            'idlokasi'=>null,
            'idoleh'=>null,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>39,
            'merk'=>'DNeven Surabaya', 'rentang_harga'=>'95000-115000', 'satuan'=>'per kotak', 'varianjual'=>'Classic Original---Triple Chocolate---Ladies & Gentlemen---Old Style---The King---Triple Vanilla---Charcoal Cheese.',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak',
            'alamat'=>'Ciputra World Mall V-Walk Lt 3 (Samping Haagen-Dazs).',
            'jambuka'=>'10.00 - 22.00',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=ciputra%20world%20mall%20surabaya&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'https://dnevensurabaya.com/',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914553951788097576/Dneven.jpg',
            'idlokasi'=>66,
            'idoleh'=>null,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>40,
            'merk'=>'Spikoe Ayu', 'rentang_harga'=>'55000-135000', 'satuan'=>'per kotak', 'varianjual'=>'Greentea---McNougat---Choco Nougat---Mocha---Original---Rempah',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak',
            'alamat'=>'Babatan Pantai Ut IX/26, Darmo Permai III (dpn apt.Avenue88)',
            'jambuka'=>'08.00 - 21.00',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=babatan%20pantai%20ut%20ix/26&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'https://www.instagram.com/spikuayu/ ',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914553857617567744/SpikuAyu_1.jpg',
            'idlokasi'=>66,
            'idoleh'=>null,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>41,
            'merk'=>'Anita Spiku', 'rentang_harga'=>'145000-475000', 'satuan'=>'per kotak', 'varianjual'=>'Pandan---New Classic---Chocolicious---Raisin---Canary---Mocilla---Mocca Lover',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak',
            'alamat'=>'Jl. Simpang Darmo Permai Selatan III No.36, Pradahkalikendal, Kec. Dukuhpakis, Kota SBY, Jawa Timur',
            'jambuka'=>'07.00 - 17.00',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=simpang%20darmo%20permai%20selatan%20iii%2036&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'https://www.instagram.com/anita.spiku/',
            'gambarproduk'=>'https://www.instagram.com/anita.spiku/',
            'idlokasi'=>null,
            'idoleh'=>null,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>42,
            'merk'=>'Tahubaxo Ibu Pudji', 'rentang_harga'=>'33000 - 35000', 'satuan'=>'per kotak', 'varianjual'=>'',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'kotak',
            'alamat'=>'Jl. Diponegoro No 14 Ungaran',
            'jambuka'=>'',
            'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=diponegoro%2014%20ungaran&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            'link'=>'http://tahubaxo-ibupudji.com/',
            'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914553679598739466/TahubaxoIbuPudji.jpg',
            'idlokasi'=>66,
            'idoleh'=>null,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>43,
            'merk'=>'Roti Ganda', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'Isian Meises, Srikaya',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'https://petualang.travelingyuk.com/uploads/2018/07/Roti-Tawar-Isi-Meses.jpg',
            'idlokasi'=>null,
            'idoleh'=>23,
            'idmitra'=>null,

            ]);
            DB::table('tempatbeli')->insert([
            'idtempatbeli'=>44,
            'merk'=>'Teng Teng', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            'best_seller'=>'',
            'bundle'=>'',
            'kemasan'=>'',
            'alamat'=>'',
            'jambuka'=>'',
            'google_map'=>'',
            'link'=>'',
            'gambarproduk'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg8INhXpJDgX-tZ68FKpYs4dcRzZYvQTTZ5w&usqp=CAU',
            'idlokasi'=>null,
            'idoleh'=>24,
            'idmitra'=>null,

            ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>45,
            // 'merk'=>'Kampoeng Timur', 'rentang_harga'=>'15000-27000', 'satuan'=>'per kotak', 'varianjual'=>'Original---Pedas---Lada Hitam',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak, kardus',
            // 'alamat'=>'Straat 2 No. 30, Jalan Soekarno Hatta, Gunung Samarinda, Balikpapan Utara',
            // 'jambuka'=>'08.00 - 16.00',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=straat%202%20no%2030%20gunung%20samarinda&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org""></a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net""></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'https://kampoengtimoer.co.id/',
            // 'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/915290998597378058/KampoengTimur.jpg',
            // 'idlokasi'=>39,
            // 'idoleh'=>25,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>46,
            // 'merk'=>'Dyriana', 'rentang_harga'=>'52000 - 110000', 'satuan'=>'per kotak', 'varianjual'=>'Mini Kelapa---Mini Nangka---Mini Campur---Nangka---Kelapa Muda---Durian',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Jalan Pandanaran 51A, Pandanaran',
            // 'jambuka'=>'',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=pandaran%2051A%20semarang&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'http://www.dyriana.com/',
            // 'gambarproduk'=>'https://www.instagram.com/dyriana/',
            // 'idlokasi'=>'https://cdn.discordapp.com/attachments/906163180328325130/914553573981966336/Dyriana.jpg',
            // 'idoleh'=>null,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>47,
            // 'merk'=>'Bonafide', 'rentang_harga'=>'56000-61000', 'satuan'=>'per kotak', 'varianjual'=>'Duri Linak---Duri Lunak Vacuum---Duri Lunak Pepes---Crispy',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Jl. Pandanaran No. 53, Randusari, Semarang, Central Java',
            // 'jambuka'=>'09.00 - 21.00',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=pandaran%2053%20semarang&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'https://www.instagram.com/bandengbonafidesemarang/',
            // 'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914553445376200785/Bonafide.jpg',
            // 'idlokasi'=>66,
            // 'idoleh'=>null,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>48,
            // 'merk'=>'Juwana Elrina', 'rentang_harga'=>'45000-57500', 'satuan'=>'per kotak', 'varianjual'=>'Presto---Otak Otak---Asap Presto',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Jl. Pandanaran No.57, Randusari, Semarang Sel., Kota Semarang, Jawa Tengah 50244',
            // 'jambuka'=>'07.00 - 23.00',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=pandaran%2057%20randusari%20semarang&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'https://bandengprestojuwana.com/',
            // 'gambarproduk'=>'https://www.instagram.com/bandengjuwana/',
            // 'idlokasi'=>'https://cdn.discordapp.com/attachments/906163180328325130/914553413222682654/Juwana.jpg',
            // 'idoleh'=>null,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>49,
            // 'merk'=>'Djoe', 'rentang_harga'=>'62000-79000', 'satuan'=>'per kotak', 'varianjual'=>'Presto---Otak Otak---Asap Presto---Pepes',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Jl. Pandanaran No. 51, Semarang, Jawa Tengah',
            // 'jambuka'=>'',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=pandaran%2051%20randusari%20semarang&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'http://oleholehdjoe.com/',
            // 'gambarproduk'=>'https://www.instagram.com/oleh2djoe/',
            // 'idlokasi'=>'https://cdn.discordapp.com/attachments/906163180328325130/914553284289761312/Djoe.jpg',
            // 'idoleh'=>null,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>50,
            // 'merk'=>'Mubarakah', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'',
            // 'alamat'=>'',
            // 'jambuka'=>'',
            // 'google_map'=>'',
            // 'link'=>'',
            // 'gambarproduk'=>'https://images.tokopedia.net/img/cache/900/product-1/2020/2/5/6751556/6751556_1f7f48fb-29c8-45ab-8ad2-f35d6140771f_640_640.jpg',
            // 'idlokasi'=>40,
            // 'idoleh'=>28,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>51,
            // 'merk'=>'Aneka', 'rentang_harga'=>'21000-23000', 'satuan'=>'per bungkus', 'varianjual'=>'Manis---Asin---Keju---Susu---Coklat---Kopi---Moka---Balado---Barbeque---Sapi Panggang---Duren---Strawberry---Jagung Bakar',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'bungkus---kotak',
            // 'alamat'=>'Jl. Ikan Kakap No. 26 & 28, Kelurahan Pesawahan, Kecamatan Teluk, Betung Selatan, Kota Bandar Lampung, Provinsi Lampung',
            // 'jambuka'=>'',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=jalan%20ikan%20kakap%20pesawahan&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'http://www.anekasarirasa.com/',
            // 'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914556007332577321/Aneka.jpg',
            // 'idlokasi'=>32,
            // 'idoleh'=>29,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>52,
            // 'merk'=>'Mr Monkey', 'rentang_harga'=>'12000-13000', 'satuan'=>'per bungkus', 'varianjual'=>'Susu---Strawberry--Coffee',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'bungkus',
            // 'alamat'=>'',
            // 'jambuka'=>'',
            // 'google_map'=>'',
            // 'link'=>'http://mrmonkey.info/',
            // 'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914555868442394644/MrMonkey.jpg',
            // 'idlokasi'=>32,
            // 'idoleh'=>29,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>53,
            // 'merk'=>'Suseno', 'rentang_harga'=>'36500-38500', 'satuan'=>'per bungkus', 'varianjual'=>'Asin---Manis---Coklat---Keju',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Jl. Hayam Wuruk, Sukarame, Bandarlampung',
            // 'jambuka'=>'',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=jalan%20hayam%20wuruk%20bandar&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'https://keripikpisanglampung.com/keripik-pisang-suseno/',
            // 'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914555807041986580/Suseno.jpg',
            // 'idlokasi'=>32,
            // 'idoleh'=>29,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>54,
            // 'merk'=>'Kaswari Lampion', 'rentang_harga'=>'45000-55000', 'satuan'=>'per kotak', 'varianjual'=>'Wijen---Coklat---Keju Kacang---Keju---Kacang Ijo---Ovomaltine---Keju Kraft---Blueberry---Tiramisu---Durian---Kacang Original---Strawberry---Wijen Coklat Kacang--Kitkat Greentea---Milo---Cookies & Cream---Green Tea---Kit Kat coklat---Spesial',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Gang Kaswari No. 19, Selabatu, Kecamatan Cikole, Kota Sukabumi',
            // 'jambuka'=>'09.00 - 17.00',
            // 'google_map'=>'div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=gang%20kaswari%2019&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'',
            // 'gambarproduk'=>'https://www.instagram.com/mochikaswari/',
            // 'idlokasi'=>'https://cdn.discordapp.com/attachments/906163180328325130/914555715006369792/KaswariLampion.jpg',
            // 'idoleh'=>null,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>55,
            // 'merk'=>'Animo', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'',
            // 'alamat'=>'',
            // 'jambuka'=>'',
            // 'google_map'=>'',
            // 'link'=>'',
            // 'gambarproduk'=>'https://scontent.fcgk27-1.fna.fbcdn.net/v/t1.6435-9/p843x403/105076688_2987731557962677_1968595245381989737_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=9267fe&_nc_ohc=uUubuxP3AncAX_okUgm&_nc_ht=scontent.fcgk27-1.fna&oh=4d4ad11b66e917e0cb4d3871ac7cb0ff&oe=61A65765',
            // 'idlokasi'=>57,
            // 'idoleh'=>31,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>56,
            // 'merk'=>'Batih Lestari', 'rentang_harga'=>'', 'satuan'=>'', 'varianjual'=>'',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'',
            // 'alamat'=>'',
            // 'jambuka'=>'',
            // 'google_map'=>'',
            // 'link'=>'',
            // 'gambarproduk'=>'http://pesonanusantara.co.id/images/upload//p/e/pes-abonpedas_2.jpg',
            // 'idlokasi'=>64,
            // 'idoleh'=>32,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>57,
            // 'merk'=>'Spiku Rumah Roti', 'rentang_harga'=>'33000-190000', 'satuan'=>'per kotak', 'varianjual'=>'Keju---Rainbow----Classic---Kismis---Almond Kenari',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Jl. Rungkut Mapan Utara No.15, Central Rungkut, Gunung Anyar, Surabaya',
            // 'jambuka'=>'08.00 - 18.00',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=rungkut%20mapan%20utara%2015&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'https://www.instagram.com/spikurumahroti/?hl=en',
            // 'gambarproduk'=>'',
            // 'idlokasi'=>66,
            // 'idoleh'=>33,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>58,
            // 'merk'=>'Spikoe Resep Kuno', 'rentang_harga'=>'85000 - 300000', 'satuan'=>'per kotak', 'varianjual'=>'Reguler Speculaas---Reguler Kismis---Reguler Plum---Reguler Tanpa Kismis---Spesial Plum---Spesial Kismis---Spesial Tanpa Kismis',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Jl. Rungkut Madya 41 Surabaya 60293, East Java - Indonesia',
            // 'jambuka'=>'07.00 - 20.30',
            // 'google_map'=>'div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=rungkut%20madya%2041&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'https://spikoeresepkuno.com',
            // 'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914554181568856124/SpikoeResepKuno.jpg',
            // 'idlokasi'=>66,
            // 'idoleh'=>33,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>59,
            // 'merk'=>'Spikoe Livana', 'rentang_harga'=>'47000-68000', 'satuan'=>'per kotak', 'varianjual'=>'Original---Batik Pandan---Batik Moka---Batik Original---Bronis Pandan---Bronis Original---Ovomaltine---Nutella---Coklat Kismis---Pandan---Moka---Kismis---Kenari',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Jl. R.A Kartini No. 127, Kec. Tegalsari, Surabaya',
            // 'jambuka'=>'07.00 - 20.00',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=ra%20kartini%20127%20tegalsari&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'https://spikoelivana.com',
            // 'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914554076530901052/Livana.jpg',
            // 'idlokasi'=>66,
            // 'idoleh'=>33,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>60,
            // 'merk'=>'Santi Cake', 'rentang_harga'=>'95000-170000', 'satuan'=>'per kotak', 'varianjual'=>'Kacang Kenari',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Jl. Mulyosari Timur 34, Jl. HR Muhammad 49-55, Ruko Apartement Taman Beverly No.2',
            // 'jambuka'=>'07.00 - 20.00',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=mulyosari%20timur%2034&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'http://santiscake.com/ind-review.html',
            // 'gambarproduk'=>'',
            // 'idlokasi'=>66,
            // 'idoleh'=>33,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>61,
            // 'merk'=>'DNeven Surabaya', 'rentang_harga'=>'95000-115000', 'satuan'=>'per kotak', 'varianjual'=>'Classic Original---Triple Chocolate---Ladies & Gentlemen---Old Style---The King---Triple Vanilla---Charcoal Cheese.',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Ciputra World Mall V-Walk Lt 3 (Samping Haagen-Dazs).',
            // 'jambuka'=>'10.00 - 22.00',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=ciputra%20world%20mall%20surabaya&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'https://dnevensurabaya.com/',
            // 'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914553951788097576/Dneven.jpg',
            // 'idlokasi'=>66,
            // 'idoleh'=>33,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>62,
            // 'merk'=>'Spikoe Ayu', 'rentang_harga'=>'55000-135000', 'satuan'=>'per kotak', 'varianjual'=>'Greentea---McNougat---Choco Nougat---Mocha---Original---Rempah',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Babatan Pantai Ut IX/26, Darmo Permai III (dpn apt.Avenue88)',
            // 'jambuka'=>'08.00 - 21.00',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=babatan%20pantai%20ut%20ix/26&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'https://www.instagram.com/spikuayu/ ',
            // 'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914553857617567744/SpikuAyu_1.jpg',
            // 'idlokasi'=>66,
            // 'idoleh'=>33,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>63,
            // 'merk'=>'Anita Spiku', 'rentang_harga'=>'145000-475000', 'satuan'=>'per kotak', 'varianjual'=>'Pandan---New Classic---Chocolicious---Raisin---Canary---Mocilla---Mocca Lover',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Jl. Simpang Darmo Permai Selatan III No.36, Pradahkalikendal, Kec. Dukuhpakis, Kota SBY, Jawa Timur',
            // 'jambuka'=>'07.00 - 17.00',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=simpang%20darmo%20permai%20selatan%20iii%2036&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'https://www.instagram.com/anita.spiku/',
            // 'gambarproduk'=>'',
            // 'idlokasi'=>66,
            // 'idoleh'=>33,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>64,
            // 'merk'=>'Tahubaxo Ibu Pudji', 'rentang_harga'=>'33000 - 35000', 'satuan'=>'per kotak', 'varianjual'=>'',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Jl. Diponegoro No 14 Ungaran',
            // 'jambuka'=>'',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=diponegoro%2014%20ungaran&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'http://tahubaxo-ibupudji.com/',
            // 'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914553679598739466/TahubaxoIbuPudji.jpg',
            // 'idlokasi'=>59,
            // 'idoleh'=>34,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>65,
            // 'merk'=>'Dyriana', 'rentang_harga'=>'52000 - 110000', 'satuan'=>'per kotak', 'varianjual'=>'Mini Kelapa---Mini Nangka---Mini Campur---Nangka---Kelapa Muda---Durian',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Jalan Pandanaran 51A, Pandanaran',
            // 'jambuka'=>'',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=pandaran%2051A%20semarang&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'http://www.dyriana.com/',
            // 'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914553573981966336/Dyriana.jpg',
            // 'idlokasi'=>59,
            // 'idoleh'=>35,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>66,
            // 'merk'=>'Bonafide', 'rentang_harga'=>'56000-61000', 'satuan'=>'per kotak', 'varianjual'=>'Duri Linak---Duri Lunak Vacuum---Duri Lunak Pepes---Crispy',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Jl. Pandanaran No. 53, Randusari, Semarang, Central Java',
            // 'jambuka'=>'09.00 - 21.00',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=pandaran%2053%20semarang&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'https://www.instagram.com/bandengbonafidesemarang/',
            // 'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914553445376200785/Bonafide.jpg',
            // 'idlokasi'=>59,
            // 'idoleh'=>36,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>67,
            // 'merk'=>'Juwana Elrina', 'rentang_harga'=>'45000-57500', 'satuan'=>'per kotak', 'varianjual'=>'Presto---Otak Otak---Asap Presto',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Jl. Pandanaran No.57, Randusari, Semarang Sel., Kota Semarang, Jawa Tengah 50244',
            // 'jambuka'=>'07.00 - 23.00',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=pandaran%2057%20randusari%20semarang&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'https://bandengprestojuwana.com/',
            // 'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914553413222682654/Juwana.jpg',
            // 'idlokasi'=>59,
            // 'idoleh'=>36,
            // 'idmitra'=>null,

            // ]);
            // DB::table('tempatbeli')->insert([
            // 'idtempatbeli'=>68,
            // 'merk'=>'Djoe', 'rentang_harga'=>'62000-79000', 'satuan'=>'per kotak', 'varianjual'=>'Presto---Otak Otak---Asap Presto---Pepes',
            // 'best_seller'=>'',
            // 'bundle'=>'',
            // 'kemasan'=>'kotak',
            // 'alamat'=>'Jl. Pandanaran No. 51, Semarang, Jawa Tengah',
            // 'jambuka'=>'',
            // 'google_map'=>'<div class=""mapouter""><div class=""gmap_canvas""><iframe width=""640"" height=""360"" id=""gmap_canvas"" src=""https://maps.google.com/maps?q=pandaran%2051%20randusari%20semarang&t=&z=13&ie=UTF8&iwloc=&output=embed"" frameborder=""0"" scrolling=""no"" marginheight=""0"" marginwidth=""0""></iframe><a href=""https://123movies-to.org"">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=""https://www.embedgooglemap.net"">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>',
            // 'link'=>'http://oleholehdjoe.com/',
            // 'gambarproduk'=>'https://cdn.discordapp.com/attachments/906163180328325130/914553284289761312/Djoe.jpg',
            // 'idlokasi'=>59,
            // 'idoleh'=>36,
            // 'idmitra'=>null,

            // ]);
    }
}
