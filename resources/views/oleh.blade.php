@extends('layouts.master')
@section('content')

    <style>
        body{
            background: #FFF4EC;
        }
        .Rectangle-bg {
            background: linear-gradient(180deg, rgba(255, 240, 236, 0.08) 0%, #FFEDE8 20.31%, #FFDDD5 64.06%, #FBC5B7 100%);
            border-radius: 100px 0px 0px 24px;
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
        }
        .info {
            padding: 60px 100px 60px 100px;
            text-align: center;
        }
        .infocard {
            width: 309px;
            height: 417px;
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
        .kotak-icon-plusmin img{
            padding: 25px 0px 0px 0px;
        }
        .kotak-icon-plusmin-bawah {
            vertical-align: center;
            padding: -100px 0px 0px 50px;
        }
        .kotak-icon-plusmin-bawah img{
            padding: 25px 0px 0px 0px;
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
    </style>
    @foreach ($varianoleh as $v)
    <div class="container">

        <section>
            <div class="row Rectangle-bg">
                <div class="deskripsi-utama col-6 mt-3">
                    <div class="row ">
                        <div class="col-8 mt-3">
                            <h1>{{ $v->namaoleh }}</h1>
                        </div>
                        <br>
                        <div class="col-2 mt-3">
                            <img src="{{ asset('img/logo-halal.png') }}" width="90px" height="90px" >
                         </div>
                        <div class="col-2 mt-3">
                            <img src="{{ asset('img/logo-mui.png') }}" width="90px" height="90px" >
                        </div>
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
                        <h4 id="rank">#1 Oleh-Oleh Terlaris Surabaya</h4>
                        <p id="stat"><i>Menurut <b> <span style="color: #EB0000">100</span> </b> Orang Surabaya</i></p>
                        <p id="stat"><i>Menurut <b> <span style="color: #EB0000">230</span> </b> Wisatawan</i></p> <br>
                        <h4 id="rank">#1 Oleh-oleh yang ingin dibeli</h4>
                        <p id="stat"><i>Menurut <b> <span style="color: #EB0000">230</span> </b> Wisatawan</i></p> <br>
                    </div>
                </div>
                <div class="col-6 mt-3">
                    <div class="foto-oleh">
                        <img src="{{ asset('img/oleholeh.png') }}" width="100%" height="50%" >
                    </div>
                    <div class="row rekom mt-3">
                        <div class="col-6">
                            <p>Pernah beli produk ini?</p>
                            <a href="" class="button-oleh">Rekomendasikan</a>
                        </div>
                        <div class="col-6">
                            <p>Ingin beli produk ini?</p>
                            <a href="" class="button-oleh">Tambah ke list</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
    <hr>
    <div class="container">
        <div class="row mt-4">
            <div class="info col-4">
                <div class="card infocard">
                    <img class="mx-auto d-block mt-5" src="{{ asset('img/detail.png') }}" alt="" width="168px" height="168px">
                    <h6 class="mt-3">Detail</h6>
                    <p class="px-5">Informasi penting terkait Varian, Rasa, Bahan Dasar untuk menyesuaikan seleramu</p>
                    <a class="" data-bs-toggle="modal" data-bs-target="#detailModal">
                        <i class="bi bi-chevron-compact-down"></i>
                    </a>
                </div>
            </div>
            <div class="info col-4">
                <div class="card infocard" style="margin-top:-48px">
                    <img class="mx-auto d-block mt-5" src="{{ asset('img/standar.png') }}" alt="" width="168px" height="168px">
                    <h6 class="mt-3">Standar</h6>
                    <p class="px-5">Spesifikasi ketahanan lama produk untuk menjaga kualitas oleh-oleh yang khas</p>
                    <a class="" data-bs-toggle="modal" data-bs-target="#standarModal">
                        <i class="bi bi-chevron-compact-down"></i>
                    </a>
                </div>
            </div>
            <div class="info col-4">
                <div class="card infocard">
                    <img class="mx-auto d-block mt-5" src="{{ asset('img/trivia.png') }}" alt="" width="168px" height="168px">
                    <h6 class="mt-3">Trivia</h6>
                    <p class="px-5">Temukan informasi dan fakta menarik dari oleh-oleh</p>
                    <a class="" data-bs-toggle="modal" data-bs-target="#triviaModal">
                        <i class="bi bi-chevron-compact-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade"  data-bs-backdrop="false" data-bs-focus="true" data-bs-keyboard="true" id="detailModal" tabindex="-1" aria-labelledby="triviaModal" aria-hidden="true">
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
    <div class="modal fade"  data-bs-backdrop="false" data-bs-focus="true" data-bs-keyboard="true" id="standarModal" tabindex="-1" aria-labelledby="triviaModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" style="width:90%">
            <div class="modal-content">
                <div class="row">
                    <div class="modal-isi col-6">
                        <img class="gambar-modal" src={{ $v->gambarutama }}>
                        <h2>{{ $v->namaoleh }}</h2>
                        <div class="poin mt-3">
                            @php
                                $kadarluarsa = str_replace('---', ', ', $v->kadarluarsa)
                            @endphp
                            <i class="bi bi-people-fill"> {{ $kadarluarsa }}</i><br>
                            @php
                                $carapenyimpanan=str_replace('Bisa disimpan di ', '', $v->carapenyimpanan)
                            @endphp
                            <i class="bi bi-geo-alt-fill"> {{ ucfirst($carapenyimpanan) }}</i><br>
                            @php
                                $carapenyajian=str_replace(' menjadi beberapa bagian,', ' dan ', $v->carapenyajian)
                            @endphp
                            <i class="bi bi-people-fill"> {{ $carapenyajian }}</i>
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
                                        <img src="{{ asset('img/smile.png') }}" width="70px" height="70px" >
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
                                <div class="kotak-icon-plusmin col-4">
                                    <div class="kotak-icon">
                                        <img src="{{ asset('img/sad.png') }}" width="70px" height="70px" >
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
    <div class="modal fade"  data-bs-backdrop="false" data-bs-focus="true" data-bs-keyboard="true" id="triviaModal" tabindex="-1" aria-labelledby="triviaModal" aria-hidden="true">
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
    </div
    {{-- <div class="container carousel">
        <h1 class="mt-3">Galeri {{ $toko->nama_toko }}</h1>
        <div class="container" style="position: center">
            @php
                $galeri_toko = preg_split('/---/', $toko->galeri_toko);
                $galeri_toko_caption = preg_split('/---/', $toko->galeri_toko_caption);
            @endphp
            <div id="myCarousel" class="carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($galeri_toko as $key => $g)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ $g }}" class="d-block w-100" alt="...">
                        </div>

                        @foreach ($galeri_toko_caption as $gc)
                            <div class="carousel-caption">
                                <h1>
                                    @if ($loop->odd)
                                        {{ $gc }}
                                    @endif
                                </h1><br><br>
                                <p>
                                    @if ($loop->even)
                                        {{ $gc }}
                                    @endif
                                </p>
                            </div>
                        @endforeach
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

        </div> --}}
        @endforeach
    </div>

@endsection
