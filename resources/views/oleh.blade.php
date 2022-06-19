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
            justify-content: space-evenly;
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

        p,
        h2 {
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
            margin-top: 20px;
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


        .info {
        }

        .strip {
            border-right: 1px solid black;
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


        .poin {
            width: 550px;
            margin-top: 20px;
            font-size: 24px;

        }

        .poin-standar {
            margin-top: 10px;
            justify-content: space-between;
            text-align: left;

        }

        .poin-detail {
            width: 550px;
            margin-top: 20px;
            font-size: 24px;
            line-height: 75px;
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
            justify-content: space-evenly;
            text-align: center;
        }

        .sub-menu {
            border: 1px solid #C8C8C8;
            border-radius: 10px;
            overflow-wrap: break-word;
            padding: 10px;
        }

        .menu-title {
            color: #376A87;
            font-size: 15px;
        }

        .title {
            font-size: 10px;
        }

        .menu-title-standar {
            color: #2D3135;
            font-size: 19px;
        }

        .title-standar {
            font-size: 17px;
            color: #878585
        }

        .komposisi {
            justify-content: flex-start;
        }

        .manfaat {
            width: 277px;
            height: 429px;
            background: linear-gradient(0deg, #FFFFFF, #FFFFFF), #FFFFFF;
            border-radius: 20px;
        }

        .manfaat .isi {
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

        .komposisi-text {
            width: 56px;
        }

        .foto-beli {
            width: 110%;
            height: 80%;
            background: #9B9B9B;
            border-radius: 20px;
        }

        .foto-beli img {
            border-radius: 20px;
        }

        .nama-beli {
            background: #DEECF3;
            /* Shadow01 */
            box-shadow: 0px 24px 48px rgba(0, 24, 52, 0.080899);
            border-radius: 0px 0px 40px 40px;
            height: 75%;
            width: 100%;
            margin-left: 10.5px;
            margin-top: -15px;
            padding-top: 20px;
        }

        .teks-nama {
            vertical-align: bottom;
            text-align: left;
            padding: 5px;
            padding-left: 15px;
            line-height: 32px;
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
            line-height: 18px;
        }

        #funfact {
            margin-top: 250px;
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
        }

        .button-selengkapnya {
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
        @if (count($tempatbeli)>0)
        <section id="tempatbeli">
            <div class="container">
                <h1 class="tempatbeli">Tempat Beli</h1>
                <div class="row">
                    <div class="col-8"></div>
                    @if (count($tempatbeli)>4)
                    <div class="col-4 text-end">
                        <a class="btn btn-dark text-light mb-3 mr-1 btn-sm"
                            data-bs-target="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                        <a class="btn btn-dark text-light mb-3 btn-sm" data-bs-target="#carouselExampleIndicators"
                            role="button" data-bs-slide="next">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    @endif
                    <div class="col-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel">
                                <div class="carousel-item active">
                                    <div class="row">
                                        @foreach ($tempatbeli->slice(0, 4) as $t)
                                        <div class="col-3 ">
                                            <div class="foto-beli">
                                                <img src="{{ $t->gambarproduk }}" width="100%" height="100%">
                                            </div>
                                            <div class="nama-beli">
                                                <div class="row teks-nama">
                                                    <h2 style="color: black">{{ $t->merk }}</h2>
                                                    <h5 id="buka" class=""><span
                                                            class="text-success fw-bold">BUKA</span> <span
                                                            id="jam-buka">({{ $t->jambuka }})</span></h5>
                                                    <div class="row info-beli">
                                                        <i class="icon-buka bi bi-geo-alt-fill"><span
                                                                class="text-beli">{{ $t->alamat }}</span></i>
                                                        <br><br>
                                                        <i class="icon-buka bi bi-telephone-fill"><span
                                                                class="text-beli">(031) 12345678</span></i>
                                                    </div>
                                                    <div class="button-selengkapnya">
                                                        <label id="selengkapnya" class="button-oleh text-beli"><a
                                                                data-bs-toggle="modal" data-bs-target="#tempatbeli">Selengkapnya</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="modal fade" id="tempatbeli" tabindex="2" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                      ...
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                      <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                        @endforeach
                                    </div>
                                </div>
                                @if (count($tempatbeli)>4)
                                <div class="carousel-item">
                                    <div class="row">
                                        @foreach ($tempatbeli->slice(4, 4) as $t)
                                        <div class="col-3 ">
                                            <div class="foto-beli">
                                                <img src="{{ $t->gambarproduk }}" width="100%" height="100%">
                                            </div>
                                            <div class="nama-beli">
                                                <div class="row teks-nama">
                                                    <h2 style="color: black">{{ $t->merk }}</h2>
                                                    <h5 id="buka" class=""><span
                                                            class="text-success fw-bold">BUKA</span> <span
                                                            id="jam-buka">({{ $t->jambuka }})</span></h5>
                                                    <div class="row info-beli">
                                                        <i class="icon-buka bi bi-geo-alt-fill"><span
                                                                class="text-beli">{{ $t->alamat }}</span></i>
                                                        <br><br>
                                                        <i class="icon-buka bi bi-telephone-fill"><span
                                                                class="text-beli">(031) 12345678</span></i>
                                                    </div>
                                                    <div class="button-selengkapnya">
                                                        <label id="selengkapnya" class="button-oleh text-beli"><a
                                                                data-bs-toggle="modal" data-bs-target="#tempatbeli">Selengkapnya</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="tempatbeli" tabindex="2" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                  ...
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                                @if (count($tempatbeli)>8)
                                <div class="carousel-item">
                                    <div class="row">
                                        @foreach ($tempatbeli->slice(8, 4) as $t)
                                        <div class="col-3 ">
                                            <div class="foto-beli">
                                                <img src="{{ $t->gambarproduk }}" width="100%" height="100%">
                                            </div>
                                            <div class="nama-beli">
                                                <div class="row teks-nama">
                                                    <h2 style="color: black">{{ $t->merk }}</h2>
                                                    <h5 id="buka" class=""><span
                                                            class="text-success fw-bold">BUKA</span> <span
                                                            id="jam-buka">({{ $t->jambuka }})</span></h5>
                                                    <div class="row info-beli">
                                                        <i class="icon-buka bi bi-geo-alt-fill"><span
                                                                class="text-beli">{{ $t->alamat }}</span></i>
                                                        <br><br>
                                                        <i class="icon-buka bi bi-telephone-fill"><span
                                                                class="text-beli">(031) 12345678</span></i>
                                                    </div>
                                                    <div class="button-selengkapnya">
                                                        <label id="selengkapnya" class="button-oleh text-beli"><a
                                                                data-bs-toggle="modal" data-bs-target="#tempatbeli">Selengkapnya</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="tempatbeli" tabindex="2" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                  ...
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        <section id="funfact">
            <div class="container">
                <div class="row mt-4">
                    <div class="strip col-7">
                        <div class="info row mt-4">
                            <div class="desc row">
                                <h1>Detail Produk</h1>
                                <p class="text-desc">Informasi penting terkait Varian, Rasa, Bahan Dasar untuk
                                    menyesuaikan seleramu</p>
                            </div>
                            <div class="row">
                                <div class="icon-isi row">
                                    <div class="col-2 sub-menu">
                                        <p class="title">Rasa</p>
                                        <img src="{{ asset('img/rasa.png') }}" width="45px" height="45px">
                                        <p class="menu-title">{{ $v->namarasa }}</p>
                                    </div>
                                    <div class="col-2 sub-menu">
                                        <p class="title">Cara Masak</p>
                                        <img src="{{ asset('img/caramasak.png') }}" width="45px" height="45px">
                                        <p class="menu-title">{{ $v->namamasak }}</p>
                                    </div>
                                    <div class="col-2 sub-menu">
                                        <p class="title">Tekstur</p>
                                        <img src="{{ asset('img/tekstur.png') }}" width="45px" height="45px">
                                        <p class="menu-title">{{ $v->namatekstur }}</p>
                                    </div>
                                    <div class="col-2 sub-menu">
                                        <p class="title">Porsi</p>
                                        <img src="{{ asset('img/perorangan.png') }}" width="45px" height="45px">
                                        <p class="menu-title">{{ $v->namacocok }}</p>
                                    </div>
                                    <div class="col-2 sub-menu">
                                        <p class="title">Asal Daerah</p>
                                        <img src="{{ asset('img/lokasi.png') }}" width="45px" height="45px">
                                        <p class="menu-title">{{ $v->kota }}</p>
                                    </div>
                                </div>
                                @php
                                    $komposisi = preg_split('/, /', $v->komposisi);
                                    $c = count($komposisi);
                                @endphp
                                <div class="mt-3">
                                    <h2>Ingredients ({{ $c }})</h2>
                                    <div class="icon-isi komposisi row">
                                        @foreach ($komposisi as $t)
                                            @php
                                                $k = ucwords(strtolower($t));
                                                $k = str_replace('Dan ', '', $k);
                                                $k = str_replace('.', '', $k);
                                            @endphp
                                            <div class="icon col-2">
                                                @if ($k === 'Tepung')
                                                    <div class="kotak">
                                                        <img src="{{ asset('img/tepung.png') }}" width="37px"
                                                            height="37px">
                                                    </div>
                                                @elseif ($k === 'Gula' || $k === 'Gula Halus' || $k === 'Gula Aren' || $k === 'Gula Pasir')
                                                    <div class="kotak">
                                                        <img src="{{ asset('img/gula.png') }}" width="37px"
                                                            height="37px">
                                                    </div>
                                                @elseif ($k === 'Telur')
                                                    <div class="kotak">
                                                        <img src="{{ asset('img/telur.png') }}" width="37px"
                                                            height="37px">
                                                    </div>
                                                @elseif ($k === 'Mentega' || $k === 'Mentega Putih')
                                                    <div class="kotak">
                                                        <img src="{{ asset('img/butter.png') }}" width="37px"
                                                            height="37px">
                                                    </div>
                                                @elseif ($k === 'Topping Pilihan' || $k === 'Topping')
                                                    <div class="kotak">
                                                        <img src="{{ asset('img/coklat.png') }}" width="37px"
                                                            height="37px">
                                                    </div>
                                                @elseif ($k === 'Beras' || $k === 'Nasi' || $k === 'Garam' || $k === 'Beras Ketan')
                                                    <div class="kotak">
                                                        <img src="https://media.discordapp.net/attachments/964470483875672094/965147746132697128/Beras.png"
                                                            width="37px" height="37px">
                                                    </div>
                                                @elseif ($k === 'Kopi')
                                                    <div class="kotak">
                                                        <img src="https://media.discordapp.net/attachments/964470483875672094/965147894573334538/coffee-bean.png"
                                                            width="37px" height="37px">
                                                    </div>
                                                @elseif ($k === 'Daging')
                                                    <div class="kotak">
                                                        <img src="https://media.discordapp.net/attachments/964470483875672094/965148001452568646/Daging.png"
                                                            width="37px" height="37px">
                                                    </div>
                                                @elseif ($k === 'Jamur')
                                                    <div class="kotak">
                                                        <img src="https://media.discordapp.net/attachments/964470483875672094/965148203366383646/Jamur.png?width=703&height=703"
                                                            width="37px" height="37px">
                                                    </div>
                                                @elseif ($k === 'Susu' || $k === 'Air' || $k === 'Santan')
                                                    <div class="kotak">
                                                        <img src="https://media.discordapp.net/attachments/964470483875672094/965148369188175902/Susu.png"
                                                            width="37px" height="37px">
                                                    </div>
                                                @elseif ($k === 'Tahu')
                                                    <div class="kotak">
                                                        <img src="https://media.discordapp.net/attachments/964470483875672094/965148408803364905/tahu.png"
                                                            width="37px" height="37px">
                                                    </div>
                                                @elseif ($k === 'Cokelat')
                                                    <div class="kotak">
                                                        <img src="{{ asset('img/coklat.png') }}" width="37px"
                                                            height="37px">
                                                    </div>
                                                @elseif ($k === 'Tempe')
                                                    <div class="kotak">
                                                        <img src="https://img.icons8.com/plasticine/100/undefined/tempeh.png"
                                                            width="37px" height="37px">
                                                    </div>
                                                @else
                                                    <div class="kotak">
                                                        <img src="https://media.discordapp.net/attachments/964470483875672094/988016504559788042/placeholder-komposisi.png" width="37px"
                                                            height="37px">
                                                    </div>
                                                @endif
                                                <div class="komposisi-text">
                                                    <span>{{ $k }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row ">
                                <div class="desc row">
                                    <h1>Standar</h1>
                                    <p class="text-desc">Spesifikasi ketahanan lama produk untuk menjaga kualitas
                                        oleh-oleh yang khas</p>
                                    @php
                                        $kadarluarsa = preg_split('/---/', $v->kadarluarsa);
                                    @endphp
                                    @php
                                        $carapenyimpanan = str_replace('zddfas', '', $v->carapenyimpanan);
                                    @endphp
                                    @php
                                        $carapenyajian = str_replace(' menjadi beberapa bagian,', ' dan ', $v->carapenyajian);
                                    @endphp
                                    <div class="poin-standar row mt-3">
                                        <div class="col-3">
                                            <p class="title-standar">Ketahanan</p>
                                            @foreach ($kadarluarsa as $kd)
                                                <p class="menu-title-standar">{{ $kd }}</p>
                                            @endforeach
                                        </div>
                                        <div class="col-3">
                                            <p class="title-standar">Penyimpanan</p>
                                            <p class="menu-title-standar">{{ $carapenyimpanan }}</p>
                                        </div>
                                        <div class="col-3">
                                            <p class="title-standar">Cara Penyajian</p>
                                            <p class="menu-title-standar">{{ $carapenyajian }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="col-4">
                            @php
                                $pantangan = preg_split('/---/', $v->pantangan);
                                $manfaat = preg_split('/---/', $v->manfaat);
                            @endphp
                            <div class="manfaat">
                                <div class="isi">
                                    <h1 class="ms-3 mt-2">Manfaat</h1>
                                    <ul>
                                        @foreach ($manfaat as $mf)
                                            <li style="font-size: 16px">{{ $mf }}</li>
                                        @endforeach
                                    </ul>
                                    <h1 class="ms-3 mt-2">Pantangan</h1>
                                    <ul>
                                        @foreach ($pantangan as $mf)
                                            <li style="font-size: 16px">{{ $mf }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

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
        </section>
    @endforeach
@endsection
