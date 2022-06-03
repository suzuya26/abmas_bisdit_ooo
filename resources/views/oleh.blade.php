@extends('layouts.master')
@section('content')

    <style>
        body{
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
            height: 32rem;
            background: #777777;
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
        p, h4 {
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
        #rank {
            font-weight: 700;
            font-size: 30px;
            line-height: 28px;
        }
        .rekom{
            font-family: 'Quicksand';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 28px;
            text-align: center;
            vertical-align: bottom;
            display: flex;
            justify-content:start;
        }
        .button-rekom {

        }
        .info {
            padding: 60px 100px 60px 100px;
            text-align: center;
        }
        .infocard {
            width: 309px;
            height: 450px;
            background: #F5EDE1;
            border-radius: 100px;
            text-align: center;
            filter: drop-shadow(27.46px 5.75px 5.75px rgba(0, 0, 0, 0.25));
        }
        .bi-chevron-compact-down{
            font-size: 36px;
            color: #555555;
        }
        .modal-content{
            width: 1364px;
            height: 700px;
            background: linear-gradient(108.91deg, #FCB581 16.49%, rgba(248, 195, 159, 0.830833) 67%, rgba(250, 248, 248, 0.72) 100.1%);
            border-radius: 100px;

        }
        .gambar-modal{
            width: 532px;
            height: 280px;

        }
        .modal-isi{
            margin: 50px 0px 0px 50px;
        }
        .modal-isi h2{
            margin-top: 24px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 50px;
            line-height: 50px;
        }
        .modal-isi i{
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
            padding: 100px 50px 0px 50px;
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
        .kotak-icon {
            width: 100px;
            height: 90px;
            background: #FFF7F7;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 30px;
            vertical-align: center;
        }
        .kotak-icon img{
            padding: 25px 0px 0px 0px;
        }
        .kotak-icon-plusmin {
            vertical-align: center;
            padding: 100px 0px 100px 50px;
        }
        .kotak-icon-plusmin-bawah {
            vertical-align: center;
            padding: 0px 0px 100px 50px;
        }
        .kotak-icon-plusmin img{
            margin: 15px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }
        .kotak-icon-plusmin-bawah {
            vertical-align: center;
            padding: -100px 0px 0px 50px;
        }
        .kotak-icon-plusmin-bawah img{
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
            margin:-550px -50px 50px 15px;
            width: 280px;
            height: 285.65px;
            left: 16px;
            top: 32px;
            background: #9B9B9B;
            border-radius: 40px 40px 0px 0px;
        }
        .nama-beli {
            margin:50px 50px 50px 15px;
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
            margin: 100px 0px 75px 0px;
            vertical-align: center;
        }
        .info-beli i{
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
        .foto-oleh{
            position: relative;
        }
        .foto-oleh img {
            border-radius: 100px 0px 0px 0px;
        }
        .livewire {
            position: absolute;
            top : 600px;
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
        .buttonCari{
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
                            @if ($v->statushalal===1)
                            <div class="col-2 mt-3">
                                <img src="{{ asset('img/logo-halal.png') }}" width="75px" height="75px" >
                            </div>
                            <div class="col-2 mt-3">
                                <img src="{{ asset('img/logo-mui.png') }}" width="75px" height="75px" >
                            </div>
                            @endif
                        </div>
                        <div class="row deskripsi">
                            @php
                                $desc = preg_split('/---/', $v->deskripsioleh);
                            @endphp
                            @foreach ($desc as $desk)
                            <p>{{ $desk }}</p>
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
                                <a href="" class="button-oleh">Tambah ke list</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="foto-oleh">
                            <img src="{{ $v->gambarutama }}" width="645px" height="679px" >
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
            <div class="tempatbeli row">
                <h1>Tempat Beli</h1>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="nama-beli">
                        <div class="teks-nama">
                            <h2>Toko Bolu Jago</h2>
                            <h2 id="buka">Buka <span id="jam-buka">(07.00-10.00)</span></h2>
                            <div class="info-beli">
                                <i class="icon-buka bi bi-geo-alt-fill"><span class="text-beli">Jalan Ir. Soekarno 5B</span></i> <br>
                                <i class="icon-buka bi bi-telephone-fill"><span class="text-beli">(031) 12345678</span></i>
                            </div>
                            <div class="button-selengkapnya">
                            <label id="selengkapnya" class="button-oleh text-beli">Selengkapnya</label>
                            </div>
                        </div>
                    </div>
                    <div class="foto-beli">
                        <img src="{{ asset('img/logo-halal.png') }}" width= "301px"
                        height="285.65px">
                    </div>
                </div>
                <div class="col-3">
                    <div class="nama-beli">
                        <div class="teks-nama">
                            <h2>Toko Bolu Jago</h2>
                            <h2 id="buka">Buka <span id="jam-buka">(07.00-10.00)</span></h2>
                            <div class="info-beli">
                                <i class="icon-buka bi bi-geo-alt-fill"><span class="text-beli">Jalan Ir. Soekarno 5B</span></i> <br>
                                <i class="icon-buka bi bi-telephone-fill"><span class="text-beli">(031) 12345678</span></i>
                            </div>
                            <div class="button-selengkapnya">
                                <label id="selengkapnya" class="button-oleh text-beli">Selengkapnya</label>
                            </div>
                        </div>
                    </div>
                    <div class="foto-beli">
                        <img src="{{ asset('img/logo-halal.png') }}" width= "301px"
                        height="285.65px">
                    </div>
                </div>
                <div class="col-3">
                    <div class="nama-beli">
                        <div class="teks-nama">
                            <h2>Toko Bolu Jago</h2>
                            <h2 id="buka">Buka <span id="jam-buka">(07.00-10.00)</span></h2>
                            <div class="info-beli">
                                <i class="icon-buka bi bi-geo-alt-fill"><span class="text-beli">Jalan Ir. Soekarno 5B</span></i> <br>
                                <i class="icon-buka bi bi-telephone-fill"><span class="text-beli">(031) 12345678</span></i>
                            </div>
                            <div class="button-selengkapnya">
                                <label id="selengkapnya" class="button-oleh text-beli">Selengkapnya</label>
                            </div>
                        </div>
                    </div>
                    <div class="foto-beli">
                        <img src="{{ asset('img/logo-halal.png') }}" width= "301px"
                        height="285.65px">
                    </div>
                </div>
                <div class="col-3">
                    <div class="nama-beli">
                        <div class="teks-nama">
                            <h2>Toko Bolu Jago</h2>
                            <h2 id="buka">Buka <span id="jam-buka">(07.00-10.00)</span></h2>
                            <div class="info-beli">
                                <i class="icon-buka bi bi-geo-alt-fill"><span class="text-beli">Jalan Ir. Soekarno 5B</span></i> <br>
                                <i class="icon-buka bi bi-telephone-fill"><span class="text-beli">(031) 12345678</span></i>
                            </div>
                            <div class="button-selengkapnya">
                                <label id="selengkapnya" class="button-oleh text-beli">Selengkapnya</label>
                            </div>
                        </div>
                    </div>
                    <div class="foto-beli">
                        <img src="{{ asset('img/logo-halal.png') }}" width= "301px"
                        height="285.65px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="funfact">
        <div class="container">
            <div class="Informasi mt-3">
                <h1>Informasi Produk</h1>
            </div>
            <div class="row mt-4">
                <div class="info col-4">
                    <div class="card infocard">
                        <img class="mx-auto d-block mt-5" src="{{ asset('img/detail.png') }}" alt="" width="168px" height="168px">
                        <h6 class="mt-3">Detail</h6>
                        <p class="px-5">Informasi penting terkait Varian, Rasa, Bahan Dasar untuk menyesuaikan seleramu</p>
                            <div class="button-selengkapnya">
                                <a class="" data-bs-toggle="modal" data-bs-target="#detailModal">
                                <label id="selengkapnya" class="button-oleh text-beli">Selengkapnya</label>
                                </a>
                            </div>
                    </div>
                </div>
                <div class="info col-4">
                    <div class="card infocard" style="margin-top:-48px">
                        <img class="mx-auto d-block mt-5" src="{{ asset('img/standar.png') }}" alt="" width="168px" height="168px">
                        <h6 class="mt-3">Standar</h6>
                        <p class="px-5">Spesifikasi ketahanan lama produk untuk menjaga kualitas oleh-oleh yang khas</p>
                            <div class="button-selengkapnya">
                                <a class="" data-bs-toggle="modal" data-bs-target="#standarModal">
                                <label id="selengkapnya" class="button-oleh text-beli">Selengkapnya</label>
                                </a>
                            </div>
                    </div>
                </div>
                <div class="info col-4">
                    <div class="card infocard">
                        <img class="mx-auto d-block mt-5" src="{{ asset('img/trivia.png') }}" alt="" width="168px" height="168px">
                        <h6 class="mt-3">Trivia</h6>
                        <p class="px-5">Temukan informasi dan fakta menarik dari oleh-oleh</p>
                            <div class="button-selengkapnya">
                                <a class="" data-bs-toggle="modal" data-bs-target="#triviaModal">
                                <label id="selengkapnya" class="button-oleh text-beli">Selengkapnya</label>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade"  data-bs-backdrop="true" data-bs-focus="true" data-bs-keyboard="true" id="detailModal" tabindex="-1" aria-labelledby="triviaModal" aria-hidden="true">
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
                                    <p class="menu-title"><b>{{$v->namarasa}}</b></p>
                                </div>
                                <div class="col-4 sub-menu">
                                    <img src="{{ asset('img/panggang.png') }}" width="75px" height="75px">
                                    <p class="menu-title"><b>{{$v->namamasak}}</b></p>
                                </div>
                                <div class="col-4 sub-menu">
                                    <img src="{{ asset('img/lembut.png') }}" width="75px" height="75px">
                                    <p class="menu-title"><b>{{$v->namatekstur}}</b></p>
                                </div>
                            </div>
                            <div class="icon-komposisi row ">
                                <h1>Ingredients</h1>
                                <div class="icon-komposisi-atas row ">
                                    <div class="icon-atas col-4">
                                        <div class="kotak-icon">
                                            <img src="{{ asset('img/tepung.png') }}" width="70px" height="70px" >
                                        </div>
                                    </div>
                                    <div class="icon-atas col-4">
                                        <div class="kotak-icon">
                                            <img src="{{ asset('img/telur.png') }}" width="70px" height="70px" >
                                        </div>
                                    </div>
                                    <div class="icon-atas col-4">
                                        <div class="kotak-icon">
                                            <img src="{{ asset('img/butter.png') }}" width="70px" height="70px" >
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-komposisi-bawah row mt-2">
                                    <div class="icon-bawah col-6">
                                        <div class="kotak-icon">
                                            <img src="{{ asset('img/gula.png') }}" width="70px" height="70px" >
                                        </div>
                                    </div>
                                    <div class="icon-bawah col-6">
                                        <div class="kotak-icon">
                                            <img src="{{ asset('img/coklat.png') }}" width="70px" height="70px" >
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
    <div class="modal fade"  data-bs-backdrop="true" data-bs-focus="true" data-bs-keyboard="true" id="standarModal" tabindex="-1" aria-labelledby="triviaModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" style="width:90%">
            <div class="modal-content">
                <div class="row">
                    <div class="modal-isi col-6">
                        <img class="gambar-modal" src={{ $v->gambarutama }}>
                        <h2>{{ $v->namaoleh }}</h2>
                        <div class="poin-detail mt-3">
                            @php
                                $kadarluarsa = str_replace('---', ', ', $v->kadarluarsa)
                            @endphp
                            <i class="bi bi-calendar-week"><span> {{ $kadarluarsa }}</span></i><br>
                            @php
                                $carapenyimpanan=str_replace('Bisa disimpan di ', '', $v->carapenyimpanan)
                            @endphp
                            <i class="bi bi-box"><span> {{ ucfirst($carapenyimpanan) }}</span></i><br>
                            @php
                                $carapenyajian=str_replace(' menjadi beberapa bagian,', ' dan ', $v->carapenyajian)
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
                                        <img src="{{ asset('img/smile.png') }}" width="60px" height="60px" >
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
                                        <img src="{{ asset('img/sad.png') }}" width="60px" height="60px" >
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
    <div class="modal fade"  data-bs-backdrop="true" data-bs-focus="true" data-bs-keyboard="true" id="triviaModal" tabindex="-1" aria-labelledby="triviaModal" aria-hidden="true">
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
                                            <img src="{{ asset('img/tepung.png') }}" width="70px" height="70px" >
                                        </div>
                                    </div>
                                    <div class="icon-atas col-4">
                                        <div class="kotak-icon">
                                            <img src="{{ asset('img/telur.png') }}" width="70px" height="70px" >
                                        </div>
                                    </div>
                                    <div class="icon-atas col-4">
                                        <div class="kotak-icon">
                                            <img src="{{ asset('img/butter.png') }}" width="70px" height="70px" >
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-komposisi-bawah row mt-2">
                                    <div class="icon-bawah col-6">
                                        <div class="kotak-icon">
                                            <img src="{{ asset('img/gula.png') }}" width="70px" height="70px" >
                                        </div>
                                    </div>
                                    <div class="icon-bawah col-6">
                                        <div class="kotak-icon">
                                            <img src="{{ asset('img/coklat.png') }}" width="70px" height="70px" >
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
