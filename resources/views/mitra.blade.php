@extends('layouts.master')
@section('content')
    <style>
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
        .caro {
        align-items: center;
        justify-content: center;
        margin-top: 25px;
    }

    .nama-beli {
            background: #DEECF3;
            /* Shadow01 */
            box-shadow: 0px 24px 48px rgba(0, 24, 52, 0.080899);
            border-radius: 0px 0px 40px 40px;
            height: 200px;
            width: 280px;
            margin-left: 10.5px;
            margin-top: -30px;
            padding-top: 15px;

        }
        .teks-nama {
            vertical-align: bottom;
            text-align: left;
            padding-left: 20px;
        }
        .teks-nama h2 {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 25px;
            line-height: 32px;
        }
        .foto-beli {
            width: 301px;
            height: 285.65px;
            background: #9B9B9B;
            border-radius: 40px;
            display: block;
            object-fit: cover;
            object-position: center;
        }
        #jam-buka, #buka{
            font-size: 1.3rem
        }
        ul li{
            line-height: 0.3em;
            list-style: none
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


        }
        #carousel {
            margin-top: 300px;
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
            /* margin: 40px 0px 25px 0px; */
            margin-top: 80px;
            vertical-align: center;
        }
        .info-beli i{
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 15px;
            line-height: 10px;
        }
        .info-beli2 i{
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 25px;
            line-height: 25px;
        }
        .info-beli2{
            line-height: 40px;
        }
        .icon-buka {
            color: red;
        }
        .text-beli {
            margin-left: 5px;
            color: #333333;
        }
        #funfact {
            margin-top: 100px;
        }
        .foto-oleh{
            position: relative;
        }
        .foto-oleh img {
            border-radius: 100px 0px 0px 0px;
            object-fit: cover;
            object-position: center;
        }
        .livewire {
            position: absolute;
            top : 600px;
            padding: 5px;
        }
    </style>
    <div class="body" style="overflow:hidden">
        <section id="header" class="" style="background: #f5ede1">
            <div class="container">
                <div class="row Rectangle-bg">
                    <div class="deskripsi-utama col-6 mt-3">
                        <div class="row ">
                            <div class="col-8 mt-3">
                                <h1 style="font-size: 65px">{{ $toko->nama_mitra }}</h1>
                            </div>
                            {{-- <p><i class="far fa-clock"></i> 1998 - sekarang</p> --}}
                            <div class="info-beli2">
                                @if ($toko->alamat_mitra)
                                <i class="icon-buka bi bi-geo-alt-fill"><span class="text-beli">{{ $toko->alamat_mitra }}</span></i> <br>
                                @endif
                                @if ($toko->kontak_mitra)
                                <i class="icon-buka bi bi-telephone-fill" style="color: black"><span class="text-beli">{{ $toko->kontak_mitra }}</span></i> <br>
                                @endif

                                <a href="" class="btn btn-dark mt-3" style="width:175px;border-radius:30px;font-size:1.5rem">Cari Lokasi!</a>
                            </div>

                            <div class="row rekom mt-3">
                                <div class="col-6">
                                    <p>Pernah kunjungi toko ini?</p>
                                    <livewire:rekomendasi-index :idtoko="$idmitra"></livewire:rekomendasi-index>

                                </div>
                                <div class="col-6">
                                    <p>Ingin kunjungi toko ini?</p>
                                    <livewire:list-toko-index :idtoko="$idmitra"></livewire:list-toko-index>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="foto-oleh">
                            <img src="{{ $toko->gambar_utama }}" width="785px" height="575px" >

                    </div>
                </div>
            </div>
    </section>
        <section id="tempatbeli" style="margin-top:-30px" class="mb-5">
            <div class="container">
                <div class="tempatbeli row">
                    <h1>Produk Oleh-Oleh dari {{ $toko->nama_mitra }}</h1>
                </div>
                <div class="row">
                    @foreach ($mitra_produk as $p)
                    <div class="caro col-3">
                        <div class="foto-beli">
                            @if ($p->gambar_produkMitra === null)
                            <img src="{{ $p->gambar_produk_admin }}" alt=""  width= "301px"
                            height="285.65px" style="border-radius: 20px">
                            @elseif ($p->gambar_produk_admin === null)
                            <img src="{{ url('/data_file/'.$p->gambar_produkMitra) }}" alt=""  width= "301px"
                            height="285.65px" style="border-radius: 20px">
                            @endif
                        </div>
                        <div class="nama-beli">
                            <div class="teks-nama ">
                                <h2 class="" style="margin-top: 33px">{{ $p->nama_produk_mitra }}</h2>
                                <h2 id="buka" style="color: red">Rp <span id="jam-buka">{{ $p->harga_produk_mitra }}</span></h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="container" style="">
            <h1>Informasi {{ $toko->nama_mitra }}</h1>
            <div class="row">
                <div class="col-6">
                {!! $toko->map_mitra !!}
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-2">
                            <i class='far fa-calendar-alt' style='font-size:66px'></i>
                        </div>
                        <div class="col-4">
                            @if($check)
                            <h3 style="color: #8fd14f" class="fw-bold">BUKA</h3>
                            @else
                            <h3 style="color: red" class="fw-bold">TUTUP</h3>
                            @endif

                            <H5>{{ $toko->jam_buka }} - {{ $toko->jam_tutup }}</H5>

                        </div>
                    </div>
                    <h3 class="mt-2">Fasilitas Toko</h3>
                    <div class="row">
                        @php
                            $fasil_mitra = preg_split('/---/', $toko->fasilitas_mitra);
                        @endphp
                        @foreach ($fasil_mitra as $f)
                            <div class="col-5">
                                <p>
                                    @if ($f === 'Parkir Mobil & Motor')
                                        <i class="fas fa-car-alt"></i>
                                    @endif
                                    @if ($f === 'Wifi Gratis')
                                        <i class="fas fa-wifi"></i>
                                    @endif
                                    @if ($f === 'Pesan Antar')
                                        <i class="fas fa-motorcycle"></i>
                                    @endif
                                    @if ($f === 'Pembayaran Non-Tunai')
                                        <i class="fas fa-money-check"></i>
                                    @endif
                                    @if ($f === 'Makan di Tempat')
                                        <i class="fas fa-utensils"></i>
                                    @endif
                                    @if ($f === 'Toilet')
                                        <i class="fas fa-toilet"></i>
                                    @endif
                                    @if ($f === 'Kantin')
                                        <i class="fa-solid fa-utensils"></i>
                                    @endif
                                    @if ($f === 'Ruang Tunggu')
                                    <i class="fas fa-person-booth"></i>
                                    @endif
                                    {{ $f }}
                                </p>
                            </div>
                        @endforeach

                    </div>
                   <section>
                    <h3 class="mt-2">Di Sekitar Toko</h3>
                    <div class="row">
                        @php
                            $sekita_toko = preg_split('/---/', $toko->jenis_sekitar);
                        @endphp
                        @foreach ($sekita_toko as $s)
                            @if ($loop->odd)
                                <div class="col-5">
                                    <p> <i class="fa-solid fa-location-dot"></i> {{ $s }}</p>
                                </div>
                            @endif
                            @if ($loop->even)
                                <div class="col-5">
                                    <p> {{ $s }}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                   </section>
                </div>
            </div>
            <h2 class="mt-3">Kontak dan Informasi Toko:</h2>
            <div class="container" style="font-size: 1.5rem">
                <div class="row">
                    <div class="col-8">
                        {{-- @php
                            $kontak_toko = preg_split('/---/', $toko->kontak_toko);
                        @endphp --}}
                        <div class="row">
                            {{-- @foreach ($kontak_toko as $k) --}}
                            @if ($toko->website_mitra)
                            <div class="col-6">
                                <i class='fas fa-globe'></i> <a href="{{ $toko->website_toko }}" style="color: black;text-decoration:none">{{ $toko->website_mitra }}</a>
                            </div>
                            @endif
                            @if ($toko->sosmed_mitra)
                            <div class="col-6">
                                <i class="fab fa-instagram"></i> <span
                                    href="www.spikoekuno.co.id"><i>{{ $toko->sosmed_mitra }}</i></span>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @php
            $galeri_toko = preg_split('/---/', $toko->galeri_mitra);
            $galeri_toko_caption = preg_split('/---/', $toko->galeri_mitra_caption);
        @endphp
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    @foreach ($galeri_toko as $key => $gt)
                    @foreach ($galeri_toko_caption as $gc)
                  <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ $gt }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="text-center">{{ $gc }}</h4>
                    </div>
                  </div>
                    @endforeach
                    @endforeach

                </div>
                @if (count($galeri_toko)>1)
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                @endif

              </div>
        </div>
    </div>

@endsection
