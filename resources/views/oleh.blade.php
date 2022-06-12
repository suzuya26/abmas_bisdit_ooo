@extends('layouts.master')
@section('content')
    <style>
        body {
            background: white;
        }

        #header {
            background: #F5EDE1;
        }

        .Rectangle-bg {
            background: #F5EDE1;
            border-radius: 0px;
            padding: 30px 0px 30px 30px;

        }

        .carousel-item {
            color: white;
            position: relative;
            background-position: center;
            background-size: cover;
        }

        .container .carousel {
            position: relative;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 40px;
        }

        .carousel-caption {
            text-align: left;
            background: rgba(0, 0, 0, 0.5);
            left: 0%;
            right: 0%;
            bottom: 0%;
            text-indent: 10%;
        }

        #myCarousel {
            margin-left: 50px;
            margin-right: 50px;
        }

        .carousel-control.left {
            margin-left: -25px;
        }

        .carousel-control.right {
            margin-right: -25px;
        }

        .carousel-control {
            width: 0%;
        }

        h1 {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 60px;
            line-height: 50px;
        }
        p,h2 {
            font-family: 'Poppins';
            font-style: normal;
        }


        h4 {
            font-family: 'Quicksand';
            font-style: normal;
            color: #555555;
        }

        .stat {
            margin-top: 10px;
        }

        #stat {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 28px;
        }

        .deskripsi-utama {
            padding: 2px 50px 0px 0px;
        }

        .deskripsi {
            margin-top: 10px;
            padding: 2px 200px 0px 0px;
            font-weight: 700;
            font-size: 28px;
            line-height: 28px;
        }
        .desc {
            text-align: left;
        }

        #rank {
            font-weight: 700;
            font-size: 30px;
            line-height: 28px;
        }

        .rekom {
            font-family: 'Quicksand';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 28px;
            text-align: center;
            vertical-align: bottom;
            display: flex;
            justify-content: start;
        }

        .button-rekom {}

        .info {
            padding: 21px 18px 21px 18px;
            background-color: #DEECF3;
            border-radius: 20px;
            height: 475px;
            width: 645px;
        }

        .infocard {
            width: 309px;
            height: 450px;
            background: #F5EDE1;
            border-radius: 100px;
            text-align: center;
            filter: drop-shadow(27.46px 5.75px 5.75px rgba(0, 0, 0, 0.25));
        }

        .bi-chevron-compact-down {
            font-size: 36px;
            color: #555555;
        }

        .modal-content {
            width: 1364px;
            height: 700px;
            background: linear-gradient(108.91deg, #FCB581 16.49%, rgba(248, 195, 159, 0.830833) 67%, rgba(250, 248, 248, 0.72) 100.1%);
            border-radius: 100px;

        }

        .gambar-modal {
            width: 301px;
            height: 139px;
            border-radius: 10px;
        }

        .modal-isi {
            margin: 50px 0px 0px 50px;
        }

        .modal-isi h2 {
            margin-top: 24px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 50px;
            line-height: 50px;
        }

        .modal-isi i {
            font-family: 'Quicksand';
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 28px;
            margin-top: 28px;
        }

        .poin {
            width: 550px;
            margin-top: 20px;
            font-size: 24px;

        }

        .poin-detail {
            width: 550px;
            margin-top: 20px;
            font-size: 24px;
            line-height: 75px;
        }

        .card-icon {
            width: 530px;
            text-align: center;
            padding: 50px 50px 50px 50px;

        }

        .icon-info {
            width: 415px;
            height: 605px;
            background: #F3F2F2;
            border-radius: 120px;
            text-align: center;
        }

        .icon-isi {
            margin-top: 10px;
            justify-content: space-between;
            text-align: center;
            font-size: 10px;

        }
        .komposisi {
            justify-content: start;
        }
        .manfaat{
            width: 277px;
            height: 429px;
            background: linear-gradient(0deg, #FFFFFF, #FFFFFF), #FFFFFF;
            border-radius: 20px;
        }
        .manfaat .isi{
            padding: 10px;
        }

        .icon-komposisi {
            text-align: center;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 50px;
            line-height: 50px;
            margin-top: 65px;
        }

        .icon-atas {
            text-align: center;
            padding: 0px 0px 20px 32px;
        }

        .icon {
            vertical-align: center;
            text-align: center;
            justify-content: center;
        }
        .kotak {
            padding-top: 8px;
            width: 56px;
            height: 50px;
            background: #E3E3E3;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 15px;
            margin-bottom: 5px;
        }

        .kotak-icon img {
            padding: 10px 0px 0px 0px;
        }

        .kotak-icon-plusmin {
            vertical-align: center;
            padding: 100px 0px 100px 50px;
        }

        .kotak-icon-plusmin-bawah {
            vertical-align: center;
            padding: 0px 0px 100px 50px;
        }

        .kotak-icon-plusmin img {
            margin: 15px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }

        .kotak-icon-plusmin-bawah {
            vertical-align: center;
            padding: -100px 0px 0px 50px;
        }

        .kotak-icon-plusmin-bawah img {
            margin: 15px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }

        .icon-komposisi-atas {
            margin-top: 24px;
        }

        .icon-komposisi-bawah {
            margin: auto;
            padding: 0px 50px 50px 80px;
            text-align: center;
            vertical-align: center;
        }

        .kelebihan ul {
            list-style-type: "➕";
            text-align: left;
            padding: 50px 10px 0px 20px;
            line-height: 25px;
        }

        .kekurangan ul {
            list-style-type: "➖";
            text-align: left;
            padding: 0px 10px 0px 20px;
            line-height: 25px;
        }

        .foto-beli {
            margin: -550px -50px 50px 15px;
            width: 280px;
            height: 285.65px;
            left: 16px;
            top: 32px;
            background: #9B9B9B;
            border-radius: 40px 40px 0px 0px;
        }

        .foto-beli img {
            border-radius: 40px 40px 0px 0px;
        }

        .nama-beli {
            margin: 50px 50px 50px 15px;
            width: 280px;
            height: 450px;
            left: 16px;
            top: 32px;
            background: #DEECF3;
            /* Shadow01 */
            box-shadow: 0px 24px 48px rgba(0, 24, 52, 0.080899);
            border-radius: 40px;

        }

        .teks-nama {
            vertical-align: bottom;
            text-align: left;
            padding: 250px 25px 0px 30px;
        }

        .teks-nama h2 {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 25px;
            line-height: 32px;
        }

        #carousel {
            margin-top: 100px;
        }

        #buka {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 25px;
            line-height: 32px;
            color: #0CBB3D;
        }

        #jam-buka {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 15px;
            line-height: 32px;
            color: #333333;
        }

        .icon-buka {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 15px;
            line-height: 15px;
        }

        .tempatbeli {
            margin: 100px 0px 0px 0px;
            vertical-align: center;
        }

        .info-beli i {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 15px;
            line-height: 10px;
        }

        .icon-buka {
            color: red;
        }

        .text-beli {
            margin-left: 5px;
            color: #333333;
        }

        #funfact {
            margin-top: 300px;
        }

        .foto-oleh {
            position: relative;
        }

        .foto-oleh img {
            border-radius: 100px 0px 0px 0px;
        }

        .livewire {
            position: absolute;
            top: 600px;
            padding: 5px;
        }

        .button-oleh {
            cursor: pointer;
        }

        #selengkapnya {
            margin-top: 12px;
            vertical-align: bottom;
            box-shadow: 5px 5px 20px lightgray;
            justify-content: center;
        }

        .button-selengkapnya {
            justify-content: center;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 25px;
            text-align: center;
            vertical-align: bottom;
        }

        .carousel-control-next-icon {
            content: '>';
            font-size: 15px;
            height: 25px;
            width: 25px;
            background-color: black;
            outline: black;
            background-size: 100%, 100%;
            border-radius: 50%;
            border: 1px solid black;
        }

        .carousel-control-prev-icon {
            content: '<';
            font-size: 15px;
            height: 25px;
            width: 25px;
            background-color: black;
            outline: black;
            background-size: 100%, 100%;
            border-radius: 50%;
            border: 1px solid black;
        }

        .buttonCari {
            width: 216.64px;
            height: 57.91px;
            background: #2F2F2F;
            box-shadow: 0px 16.5453px 26.4725px -6.61813px rgba(0, 0, 0, 0.2);
            border-radius: 69.4904px;
            font-style: normal;
            font-weight: 600;
            font-size: 16.5453px;
            line-height: 94.8%;
            /* identical to box height, or 16px */
            color: #F4ECE1;
            transition: .3s
        }

    </style>
    @foreach ($varianoleh as $v)
        <section id="header">
            <div class="container">
                <div class="row Rectangle-bg">
                    <div class="deskripsi-utama col-6 mt-3">
                        <div class="row ">
                            <div class="col-8 mt-3">
                                <h1>{{ $v->namaoleh }}</h1>
                            </div>
                            <br>
                            @if ($v->statushalal === 1)
                                <div class="col-2 mt-3">
                                    <img src="{{ asset('img/logo-halal.png') }}" width="75px" height="75px">
                                </div>
                                <div class="col-2 mt-3">
                                    <img src="{{ asset('img/logo-mui.png') }}" width="75px" height="75px">
                                </div>
                            @endif
                        </div>
                        <div class="row deskripsi">
                            @php
                                $desc = preg_split('/---/', $v->deskripsioleh);
                            @endphp
                            @foreach ($desc as $desk)
                                <p style="text-align: justify">{{ $desk }}</p>
                            @endforeach
                        </div>
                        <div class="row stat">
                            <button class="buttonCari">Cari Sekarang!</button>
                        </div>
                        <br>
                        <div class="row rekom mt-3">
                            <div class="button-rekom col-6">
                                <p>Pernah beli produk ini?</p>
                                <livewire:rekomendasioleh-index :idoleh="$idoleh"></livewire:rekomendasioleh-index>
                            </div>
                            <div class="button-rekom col-6">
                                <p>Ingin beli produk ini?</p>
                                <livewire:listoleh-index :idoleh="$idoleh"></livewire:listoleh-index>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="foto-oleh">
                            <img src="{{ $v->gambarutama }}" width="645px" height="679px">
                            <div class="livewire col-2 d-flex justify-content-end">
                                <livewire:favorite-index :idoleh="$idoleh"></livewire:favorite-index>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section id="tempatbeli">
            <div class="container">
                <h1 class="tempatbeli">Tempat Beli</h1>
                <div class="row">
                    <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <div class="carousel">
                                <div class="carousel-item active">
                                    <div class="row">
                                        @foreach ($tempatbeli as $t)
                                            <div class="col-3">
                                                <div class="nama-beli">
                                                    <div class="teks-nama">
                                                        <h2 style="color: black">{{ $t->merk }}</h2>
                                                        <h5 id="buka" class=""><span
                                                                class="text-success fw-bold">BUKA</span> <span
                                                                id="jam-buka">({{ $t->jambuka }})</span></h5>
                                                        <div class="info-beli">
                                                            <i class="icon-buka bi bi-geo-alt-fill"><span
                                                                    class="text-beli">{{ $t->alamat }}</span></i>
                                                            <br>
                                                            <i class="icon-buka bi bi-telephone-fill"><span
                                                                    class="text-beli">(031) 12345678</span></i>
                                                        </div>
                                                        <div class="button-selengkapnya">
                                                            <label id="selengkapnya" class="button-oleh text-beli"><a href="">Selengkapnya</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="foto-beli">
                                                    <img src="{{ $t->gambarproduk }}" width="280px" height="285.65px">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <a href="#" class="link-dark text-end col-12">Lebih Banyak >>></a> --}}
                </div>
            </div>
        </section>
        <section id="funfact">
            <div class="container">
                <div class="Informasi mt-3">
                    <h1>Informasi Produk</h1>
                </div>
                <div class="row mt-4">
                    <div class="col-6">

                    <div class="info row mt-4">
                        <div class="desc col-6 ">
                            <h1>Detail</h1>
                            <img class="mx-auto d-block mt-3" src="{{ asset('img/detail.png') }}" alt="" width="168px"
                                height="168px">
                            <p class="text-desc">Informasi penting terkait Varian, Rasa, Bahan Dasar untuk menyesuaikan seleramu</p>
                            <div class="poin mt-3">
                            <i class="icon-buka bi bi-people-fill" style="color: #616067"><span class="text-beli"> {{ $v->satuan }}</span></i><br>
                            <i class="icon-buka bi bi-geo-alt-fill"><span class="text-beli"> {{ $v->kota }},
                                {{ $v->provinsi }}</span></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <img class="gambar-modal" src={{ $v->gambarutama }}>
                            <div class="icon-isi row">
                                <div class="col-4 sub-menu">
                                    <img src="{{ asset('img/rasa.png') }}" width="19px" height="19px">
                                    <span class="menu-title">{{ $v->namarasa }}</span>
                                </div>
                                <div class="col-4 sub-menu">
                                    <img src="{{ asset('img/caramasak.png') }}" width="19px" height="19px">
                                    <span class="menu-title">{{ $v->namamasak }}</span>
                                </div>
                                <div class="col-4 sub-menu">
                                    <img src="{{ asset('img/tekstur.png') }}" width="19px" height="19px">
                                    <span class="menu-title">{{ $v->namatekstur }}</span>
                                </div>
                            </div>
                            @php
                                $komposisi = preg_split('/, /', $v->komposisi);
                                $c=count($komposisi);
                            @endphp
                            <div class="mt-3">
                                <h2>Ingredients ({{$c}})</h2>
                                <div class="icon-isi komposisi row">
                                    @foreach ($komposisi as $t)
                                    @php
                                        $k=ucwords(strtolower($t));
                                        $k=str_replace("Dan ", "",$k);
                                        $k=str_replace(".", "",$k);
                                    @endphp
                                    <div class="icon col-3">
                                        @if ($k==="Tepung")
                                        <div class="kotak">
                                            <img src="{{ asset('img/tepung.png') }}" width="37px" height="37px">
                                        </div>
                                        @elseif ($k==="Gula"||$k==="Gula Halus"||$k==="Gula Aren"||$k==="Gula Pasir")
                                        <div class="kotak">
                                            <img src="{{ asset('img/gula.png') }}" width="37px" height="37px">
                                        </div>
                                        @elseif ($k==="Telur")
                                        <div class="kotak">
                                            <img src="{{ asset('img/telur.png') }}" width="37px" height="37px">
                                        </div>
                                        @elseif ($k==="Mentega"||$k==="Mentega Putih")
                                        <div class="kotak">
                                            <img src="{{ asset('img/butter.png') }}" width="37px" height="37px">
                                        </div>
                                        @elseif ($k==="Topping Pilihan"||$k==="Topping")
                                        <div class="kotak">
                                            <img src="{{ asset('img/coklat.png') }}" width="37px" height="37px">
                                        </div>
                                        @elseif ($k==="Beras"||$k==="Nasi"||$k==="Garam"||$k==="Beras Ketan")
                                        <div class="kotak">
                                            <img src="https://media.discordapp.net/attachments/964470483875672094/965147746132697128/Beras.png" width="37px" height="37px">
                                        </div>
                                        @elseif ($k==="Kopi")
                                        <div class="kotak">
                                            <img src="https://media.discordapp.net/attachments/964470483875672094/965147894573334538/coffee-bean.png" width="37px" height="37px">
                                        </div>
                                        @elseif ($k==="Daging")
                                        <div class="kotak">
                                            <img src="https://media.discordapp.net/attachments/964470483875672094/965148001452568646/Daging.png" width="37px" height="37px">
                                        </div>
                                        @elseif ($k==="Jamur")
                                        <div class="kotak">
                                            <img src="https://media.discordapp.net/attachments/964470483875672094/965148203366383646/Jamur.png?width=703&height=703" width="37px" height="37px">
                                        </div>
                                        @elseif ($k==="Susu"||$k==="Air"||$k==="Santan")
                                        <div class="kotak">
                                            <img src="https://media.discordapp.net/attachments/964470483875672094/965148369188175902/Susu.png" width="37px" height="37px">
                                        </div>
                                        @elseif ($k==="Tahu")
                                        <div class="kotak">
                                            <img src="https://media.discordapp.net/attachments/964470483875672094/965148408803364905/tahu.png" width="37px" height="37px">
                                        </div>
                                        @elseif ($k==="Cokelat")
                                        <div class="kotak">
                                            <img src="{{ asset('img/coklat.png') }}" width="37px" height="37px">
                                        </div>
                                        @elseif ($k==="Tempe")
                                        <div class="kotak">
                                            <img src="https://img.icons8.com/plasticine/100/undefined/tempeh.png" width="37px" height="37px">
                                        </div>
                                        @else
                                        <div class="kotak">
                                            <img src="{{ asset('img/tepung.png') }}" width="37px" height="37px">
                                        </div>
                                        @endif

                                            <p>{{$k}}</p>

                                    </div>
                                    @endforeach
                                </div>

                            </div>

                        </div>
                    </div>
                    </div>
                    <div class="col-6">

                        <div class="info row mt-4">
                            <div class="desc col-6 me-3">
                                <h1>Standar</h1>
                                <img class="mx-auto d-block mt-3" src="https://cdn.discordapp.com/attachments/964470483875672094/984627415206740028/image_22.png" alt="" width="168px"
                                    height="168px">
                                <p class="text-desc">Spesifikasi ketahanan lama produk untuk menjaga kualitas oleh-oleh yang khas</p>
                                @php
                                    $kadarluarsa = str_replace('---', ', ', $v->kadarluarsa);
                                @endphp
                                @php
                                 $carapenyimpanan = str_replace('Bisa disimpan di ', '', $v->carapenyimpanan);
                                @endphp
                                @php
                                $carapenyajian = str_replace(' menjadi beberapa bagian,', ' dan ', $v->carapenyajian);
                                @endphp
                                <div class="poin mt-3">
                                <i class="bi bi-clock" style="color: #616067"><span class="text-beli" style="font-size: 18px"> {{ Str::limit($kadarluarsa, 19, ' ...') }}</span></i><br>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="28" height="28" fill="url(#pattern0)"/>
                                    <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_1877_790" transform="scale(0.00195312)"/>
                                    </pattern>
                                    <image id="image0_1877_790" width="512" height="512" xlink:href="data:image/png;base64,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"/>
                                    </defs>
                                    </svg>
                                    <span class="text-beli" style="font-size: 18px"> {{ $carapenyimpanan }}
                                </span> <br>
                                <img src="https://cdn.discordapp.com/attachments/852555811178676224/984634070447296572/eat_1.png" alt="">
                                <span style="font-size: 16px">{{ $carapenyajian }}</span>
                                </div>
                            </div>

                            <div class="col-5">
                                @php
                                    $pantangan = preg_split('/---/', $v->pantangan);
                                    $manfaat = preg_split('/---/', $v->manfaat);
                                @endphp
                                <div class="manfaat">
                                    <div class="isi">
                                        <h3 class="ms-3 mt-2">Manfaat :</h3>
                                        <ul>
                                            @foreach ($manfaat as $mf)
                                                <li style="font-size: 13px">{{ $mf }}</li>
                                            @endforeach
                                        </ul>
                                        <h3 class="ms-3 mt-2">Pantangan :</h3>
                                        <ul>
                                            @foreach ($pantangan as $mf)
                                                <li style="font-size: 13px">{{ $mf }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        </div>
                    {{-- <div class="info col-4">
                        <div class="card infocard">
                            <img class="mx-auto d-block mt-5" src="{{ asset('img/detail.png') }}" alt="" width="168px"
                                height="168px">
                            <h6 class="mt-3">Detail</h6>
                            <p class="px-5">Informasi penting terkait Varian, Rasa, Bahan Dasar untuk menyesuaikan
                                seleramu</p>
                            <div class="button-selengkapnya">
                                <a class="" data-bs-toggle="modal" data-bs-target="#detailModal">
                                    <label id="selengkapnya" class="button-oleh text-beli">Selengkapnya</label>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="info col-4">
                        <div class="card infocard" style="margin-top:-48px">
                            <img class="mx-auto d-block mt-5" src="{{ asset('img/standar.png') }}" alt="" width="168px"
                                height="168px">
                            <h6 class="mt-3">Standar</h6>
                            <p class="px-5">Spesifikasi ketahanan lama produk untuk menjaga kualitas oleh-oleh
                                yang khas</p>
                            <div class="button-selengkapnya">
                                <a class="" data-bs-toggle="modal" data-bs-target="#standarModal">
                                    <label id="selengkapnya" class="button-oleh text-beli">Selengkapnya</label>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="info col-4">
                        <div class="card infocard">
                            <img class="mx-auto d-block mt-5" src="{{ asset('img/trivia.png') }}" alt="" width="168px"
                                height="168px">
                            <h6 class="mt-3">Trivia</h6>
                            <p class="px-5">Temukan informasi dan fakta menarik dari oleh-oleh</p>
                            <div class="button-selengkapnya">
                                <a class="" data-bs-toggle="modal" data-bs-target="#triviaModal">
                                    <label id="selengkapnya" class="button-oleh text-beli">Selengkapnya</label>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <div class="modal fade" data-bs-backdrop="true" data-bs-focus="true" data-bs-keyboard="true" id="detailModal"
            tabindex="-1" aria-labelledby="triviaModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" style="width:90%">
                <div class="modal-content">
                    <div class="row">
                        <div class="modal-isi col-6">
                            <img class="gambar-modal" src={{ $v->gambarutama }}>
                            <h2>{{ $v->namaoleh }}</h2>
                            <div class="poin mt-3">
                                <i class="bi bi-people-fill"><span> {{ $v->namacocok }}</span></i><br>
                                <i class="bi bi-geo-alt-fill"><span> {{ $v->kota }},
                                        {{ $v->provinsi }}</span></i>
                            </div>
                            @php
                                $komposisi = preg_split('/, /', $v->komposisi);
                            @endphp
                            <div class="komposisi mt-3">
                                <h3>Komposisi :</h3>
                                <ol>
                                    @foreach ($komposisi as $k)
                                        <li>{{ $k }}</li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                        <div class="card-icon col-6">
                            <div class="icon-info">
                                <div class="icon-isi row">
                                    <div class="col-4 sub-menu">
                                        <img src="{{ asset('img/manis.png') }}" width="75px" height="75px">
                                        <p class="menu-title"><b>{{ $v->namarasa }}</b></p>
                                    </div>
                                    <div class="col-4 sub-menu">
                                        <img src="{{ asset('img/panggang.png') }}" width="75px" height="75px">
                                        <p class="menu-title"><b>{{ $v->namamasak }}</b></p>
                                    </div>
                                    <div class="col-4 sub-menu">
                                        <img src="{{ asset('img/lembut.png') }}" width="75px" height="75px">
                                        <p class="menu-title"><b>{{ $v->namatekstur }}</b></p>
                                    </div>
                                </div>
                                <div class="icon-komposisi row ">
                                    <h1>Ingredients</h1>
                                    <div class="icon-komposisi-atas row ">
                                        <div class="icon-atas col-4">
                                            <div class="kotak-icon">
                                                <img src="{{ asset('img/tepung.png') }}" width="70px" height="70px">
                                            </div>
                                        </div>
                                        <div class="icon-atas col-4">
                                            <div class="kotak-icon">
                                                <img src="{{ asset('img/telur.png') }}" width="70px" height="70px">
                                            </div>
                                        </div>
                                        <div class="icon-atas col-4">
                                            <div class="kotak-icon">
                                                <img src="{{ asset('img/butter.png') }}" width="70px" height="70px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-komposisi-bawah row mt-2">
                                        <div class="icon-bawah col-6">
                                            <div class="kotak-icon">
                                                <img src="{{ asset('img/gula.png') }}" width="70px" height="70px">
                                            </div>
                                        </div>
                                        <div class="icon-bawah col-6">
                                            <div class="kotak-icon">
                                                <img src="{{ asset('img/coklat.png') }}" width="70px" height="70px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" data-bs-backdrop="true" data-bs-focus="true" data-bs-keyboard="true" id="standarModal"
            tabindex="-1" aria-labelledby="triviaModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" style="width:90%">
                <div class="modal-content">
                    <div class="row">
                        <div class="modal-isi col-6">
                            <img class="gambar-modal" src={{ $v->gambarutama }}>
                            <h2>{{ $v->namaoleh }}</h2>
                            <div class="poin-detail mt-3">
                                @php
                                    $kadarluarsa = str_replace('---', ', ', $v->kadarluarsa);
                                @endphp
                                <i class="bi bi-calendar-week"><span> {{ $kadarluarsa }}</span></i><br>
                                @php
                                    $carapenyimpanan = str_replace('Bisa disimpan di ', '', $v->carapenyimpanan);
                                @endphp
                                <i class="bi bi-box"><span> {{ ucfirst($carapenyimpanan) }}</span></i><br>
                                @php
                                    $carapenyajian = str_replace(' menjadi beberapa bagian,', ' dan ', $v->carapenyajian);
                                @endphp
                                <i class="bi bi-disc"><span> {{ $carapenyajian }}</span></i>
                            </div>
                        </div>
                        <div class="card-icon col-6">
                            <div class="icon-info">
                                @php
                                    $pantangan = preg_split('/---/', $v->pantangan);
                                    $manfaat = preg_split('/---/', $v->manfaat);
                                @endphp
                                <div class="icon-isi-plusmin row">
                                    <div class="kotak-icon-plusmin col-4 ">
                                        <div class="col-4 kotak-icon">
                                            <img src="{{ asset('img/smile.png') }}" width="60px" height="60px">
                                        </div>
                                    </div>
                                    <div class="col-8 kelebihan">
                                        <ul>
                                            @foreach ($manfaat as $mf)
                                                <li>{{ $mf }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="icon-isi-plusmin row mt-5">
                                    <div class="kotak-icon-plusmin-bawah col-4">
                                        <div class="col-4 kotak-icon">
                                            <img src="{{ asset('img/sad.png') }}" width="60px" height="60px">
                                        </div>
                                    </div>
                                    <div class="col-8 kekurangan">
                                        <ul>
                                            @foreach ($pantangan as $pt)
                                                <li>{{ $pt }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" data-bs-backdrop="true" data-bs-focus="true" data-bs-keyboard="true" id="triviaModal"
            tabindex="-1" aria-labelledby="triviaModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" style="width:90%">
                <div class="modal-content">
                    <div class="row">
                        <div class="modal-isi col-6">
                            <img class="gambar-modal" src={{ $v->gambarutama }}>
                            <h2>{{ $v->namaoleh }}</h2>
                            <div class="poin mt-3">
                                <i class="bi bi-people-fill"> {{ $v->namacocok }}</i><br>
                                <i class="bi bi-geo-alt-fill"> {{ $v->kota }},
                                    {{ $v->provinsi }}</i>
                            </div>
                            @php
                                $komposisi = preg_split('/, /', $v->komposisi);
                            @endphp
                            <div class="komposisi mt-3">
                                <h3>Komposisi :</h3>
                                <ol>
                                    @foreach ($komposisi as $k)
                                        <li>{{ $k }}</li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                        <div class="card-icon col-6">
                            <div class="icon-info">
                                <div class="icon-isi row">
                                    <div class="col-4 sub-menu">
                                        <img src="{{ asset('img/manis.png') }}" width="75px" height="75px">
                                        <p class="menu-title"><b>Manis</b></p>
                                    </div>
                                    <div class="col-4 sub-menu">
                                        <img src="{{ asset('img/panggang.png') }}" width="75px" height="75px">
                                        <p class="menu-title"><b>Panggang</b></p>
                                    </div>
                                    <div class="col-4 sub-menu">
                                        <img src="{{ asset('img/lembut.png') }}" width="75px" height="75px">
                                        <p class="menu-title"><b>Lembut</b></p>
                                    </div>
                                </div>
                                <div class="icon-komposisi row ">
                                    <h1>Ingridients</h1>
                                    <div class="icon-komposisi-atas row ">
                                        <div class="icon-atas col-4">
                                            <div class="kotak-icon">
                                                <img src="{{ asset('img/tepung.png') }}" width="70px" height="70px">
                                            </div>
                                        </div>
                                        <div class="icon-atas col-4">
                                            <div class="kotak-icon">
                                                <img src="{{ asset('img/telur.png') }}" width="70px" height="70px">
                                            </div>
                                        </div>
                                        <div class="icon-atas col-4">
                                            <div class="kotak-icon">
                                                <img src="{{ asset('img/butter.png') }}" width="70px" height="70px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-komposisi-bawah row mt-2">
                                        <div class="icon-bawah col-6">
                                            <div class="kotak-icon">
                                                <img src="{{ asset('img/gula.png') }}" width="70px" height="70px">
                                            </div>
                                        </div>
                                        <div class="icon-bawah col-6">
                                            <div class="kotak-icon">
                                                <img src="{{ asset('img/coklat.png') }}" width="70px" height="70px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="carousel">
            <div class="container carousel">
                <h1 class="mt-3">Galeri {{ $v->namaoleh }}</h1>
                <div class="container" style="position: center">
                    @php
                        $gambaroleh = preg_split('/---/', $v->gambaroleh);
                    @endphp
                    <div id="myCarousel" class="carousel" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($gambaroleh as $key => $g)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ $g }}" class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="next">
                        <span class="sr-only">Previous</span>
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="prev">
                        <span class="sr-only">Next</span>
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>

                </div>
    @endforeach
    </div>
    </section>
@endsection
