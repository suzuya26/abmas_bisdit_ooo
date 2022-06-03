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
        .nama-beli {
            margin:50px 50px 50px 15px;
            width: 280px;
            height: 400px;
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
        .foto-beli {
        margin:-500px -50px 0px 0px;
            width: 301px;
            height: 285.65px;
            left: 5px;
            top: 32px;
            background: #9B9B9B;
            border-radius: 40px;
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
        .foto-beli {
            margin:-500px -50px 0px 0px;
            width: 301px;
            height: 285.65px;
            left: 5px;
            top: 32px;
            background: #9B9B9B;
            border-radius: 40px;
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
                                <h1 style="font-size: 65px">{{ $toko->nama_toko }}</h1>
                            </div>
                            <p><i class="far fa-clock"></i> 1998 - sekarang</p>
                            <div class="info-beli2">
                                <i class="icon-buka bi bi-geo-alt-fill"><span class="text-beli">Jalan Ir. Soekarno 5B</span></i> <br>
                                <i class="icon-buka bi bi-telephone-fill" style="color: black"><span class="text-beli">(031) 12345678</span></i> <br>
                                <a href="" class="btn btn-dark mt-3" style="width:175px;border-radius:30px;font-size:1.5rem">Cari Lokasi!</a>
                            </div>

                            <div class="row rekom mt-3">
                                <div class="col-6">
                                    <p>Pernah kunjungi toko ini?</p>
                                    <livewire:rekomendasi-index :idtoko="$idtoko"></livewire:rekomendasi-index>
                                </div>
                                <div class="col-6">
                                    <p>Ingin kunjungi toko ini?</p>
                                    <livewire:list-toko-index :idtoko="$idtoko"></livewire:list-toko-index>
                                    {{-- <a wire:click="rekomendasi({{ $idtoko }})" href="" class="button-toko bg-light" style="background:white">Tambah ke List   <i class="far fa-bookmark" style="font-size: 1.3rem"></i></a>
                                    <p><i class="fas fa-bookmark mt-3" style="font-size: 1.3rem"></i> 5  orang</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="foto-oleh">
                            <img src="{{ $toko->gambar_utama }}" width="785px" height="575px" >
                            {{-- <div class="livewire col-2 d-flex justify-content-end">
                                <livewire:favorite-index :idoleh="$idtoko"></livewire:favorite-index>
                            </div> --}}
                        </div>

                    </div>
                </div>
            </div>
    </section>
        <section id="tempatbeli" style="margin-bottom: 200px;margin-top:-30px">
            <div class="container">
                <div class="tempatbeli row">
                    <h1>Produk Oleh-Oleh dari {{ $toko->nama_toko }}</h1>
                </div>
                <div class="row" >
                    <div class="col-3">
                        <div class="nama-beli">
                            <div class="teks-nama ">
                                <h2 class="" style="margin-top: 33px">Spikoe Surabaya</h2>
                                <h2 id="buka" style="color: red">Rp <span id="jam-buka">100.000</span></h2>
                                <h2 id="buka" style="color: red">#1 <span id="jam-buka">Spikoe di Toko Ini</span></h2>
                                <div class="d-flex justify-content-center mb-3">
                                    <a href="" class="btn btn-light text-dark" style="border-radius: 20px">Rekomendasikan <i class="fas fa-thumbs-up"></i></a>
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
                                <h2 style="margin-top: 33px">Spikoe Surabaya</h2>
                                <h2 id="buka" style="color: red">Rp <span id="jam-buka">100.000</span></h2>
                                <h2 id="buka" style="color: red">#2 <span id="jam-buka">Spikoe di Toko Ini</span></h2>
                                <div class="d-flex justify-content-center mb-3">
                                    <a href="" class="btn btn-light text-dark" style="border-radius: 20px">Rekomendasikan <i class="fas fa-thumbs-up"></i></a>
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
                                <h2 style="margin-top: 33px">Spikoe Surabaya</h2>
                                <h2 id="buka" style="color: red">Rp <span id="jam-buka">100.000</span></h2>
                                <h2 id="buka" style="color: red">#3 <span id="jam-buka">Spikoe di Toko Ini</span></h2>
                                <div class="d-flex justify-content-center mb-3">
                                    <a href="" class="btn btn-light text-dark" style="border-radius: 20px">Rekomendasikan <i class="fas fa-thumbs-up"></i></a>
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
                                <h2 style="margin-top: 33px">Spikoe Surabaya</h2>
                                <h2 id="buka" style="color: red">Rp <span id="jam-buka">100.000</span></h2>
                                <h2 id="buka" style="color: red">#4 <span id="jam-buka">Spikoe di Toko Ini</span></h2>
                                <div class="d-flex justify-content-center mb-3">
                                    <a href="" class="btn btn-light text-dark" style="border-radius: 20px">Rekomendasikan <i class="fas fa-thumbs-up"></i></a>
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


        {{-- <div class="container ">
        <div class="row mt-3">
            <div class="col-4">
                <img width="410px" src="https://images.pexels.com/photos/9938862/pexels-photo-9938862.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
            </div>
            <div class="col-5 mt-4">
                <h1>Spikoe Kunoe Coklade</h1>
                <h3>Rp20.000</h3>
                <a href="" class="btn btn-secondary" style="font-size: 1.7rem"><i><span style="color: orange; font-weight:bold">#1</span> Spikoe di Toko ini</i></a>
            </div>
            <div class="col-3 mt-4">
                <a href="" class=" button-produk"><i class="fa fa-thumbs-up" style="font-size:24px"></i> Rekomendasikan</a> <br>
                <a href="" class=" mt-3 button-produk"><i class="far fa-bookmark" style="font-size:24px"></i> Simpan Produk</a>
            </div>
        </div>
    </div> --}}
        {{-- <div class="container ">
        <div class="row mt-3">
            <div class="col-4">
                <img width="410px" src="https://images.pexels.com/photos/9938862/pexels-photo-9938862.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
            </div>
            <div class="col-5 mt-4">
                <h1>Spikoe Kunoe Coklade</h1>
                <h3>Rp20.000</h3>
                <a href="" class="btn btn-secondary" style="font-size: 1.7rem"><i><span style="color: orange; font-weight:bold">#1</span> Spikoe di Toko ini</i></a>
            </div>
            <div class="col-3 mt-4">
                <a href="" class=" button-produk"><i class="fa fa-thumbs-up" style="font-size:24px"></i> Rekomendasikan</a> <br>
                <a href="" class=" mt-3 button-produk"><i class="far fa-bookmark" style="font-size:24px"></i> Simpan Produk</a>
            </div>
        </div>
        <hr>
    </div> --}}
        <div class="container" style="">
            <h1>Informasi {{ $toko->nama_toko }}</h1>
            <div class="row">
                <div class="col-6">
                    {{-- @php
                $embed = $toko->map_toko;
                $peta = stripslashes($embed);
                echo $embed;

                @endphp --}}

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31660.513906147913!2d112.79651086582963!3d-7.290317142661231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f09c510751b5%3A0xb04b9f70e748e85!2sKeputih%2C%20Sukolilo%2C%20Surabaya%20City%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1650439226496!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

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

                            <H5>{{ $toko->jam_operasional }}</H5>

                        </div>
                    </div>
                    <h3 class="mt-2">Fasilitas Toko</h3>
                    <div class="row">
                        @php
                            $fasil_toko = preg_split('/---/', $toko->fasilitas_toko);
                        @endphp
                        @foreach ($fasil_toko as $f)
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
                                    {{ $f }}
                                </p>
                            </div>
                        @endforeach

                        {{-- <div class="col-5" >
                       <p> <i class="fas fa-car-alt"></i> Wifi Gratis</p>
                    </div>
                    <div class="col-5" >
                       <p> <i class="fas fa-car-alt"></i> Pesan Antar</p>
                    </div>
                    <div class="col-5" >
                       <p> <i class="fas fa-car-alt"></i> Pembayaran Non-Tunai</p>
                    </div>
                    <div class="col-5" >
                       <p> <i class="fas fa-car-alt"></i> Makan di Tempat</p>
                    </div> --}}

                    </div>
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
                        {{-- @php
                    $jenis_sekitar = preg_split('/---/', $toko->jenis_sekitar);
                    $value_sekitar = preg_split('/---/', $toko->value_jenis_sekitar);
                @endphp
                @foreach ($jenis_sekitar as $j)
                <div class="col-5" >
                    @if ($j === 'ATM')
                        <p> <i class="far fa-dollar-sign"></i></p>
                    @endif
                    @if ($j === 'Bandara')
                        <p> <i class="far fa-plane-alt"></i></p>
                    @endif
                    @if ($j === 'Stasiun')
                        <p> <i class="fas fa-train"></i></p>
                    @endif
                </div>
                @endforeach
                <div class="col-5" >
                @foreach ($value_sekitar as $v)
                    @if ($loop->odd)
                    <p style="margin-left:30px"> {{ $v }}</p>
                    @endif
                    @if ($loop->odd)
                    <p> {{ $v }}</p>
                    @endif
                @endforeach
                </div> --}}
                    </div>
                </div>
            </div>
            <h2 class="mt-3">Kontak dan Informasi Toko:</h2>
            <div class="container" style="font-size: 1.5rem">
                {{-- <div class="row">
                <div class="col-3">
                    <i class='far fa-address-book'></i> <a href="www.spikoekuno.co.id">www.spikoekuno.co.id</a>
                </div>
                <div class="col-3">
                    <i class='far fa-address-book'></i> <span href="www.spikoekuno.co.id"><i>081283421383</i></span>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <i class='far fa-address-book'></i> <span href="www.spikoekuno.co.id"><i>@spikoekunosby</i></span>
                </div>
                <div class="col-3">
                    <i class='far fa-address-book'></i> <span ><i>@sspanikoekunosby</i></span>
                </div>
            </div> --}}
                <div class="row">
                    <div class="col-8">
                        @php
                            $kontak_toko = preg_split('/---/', $toko->kontak_toko);
                        @endphp
                        <div class="row">
                            @foreach ($kontak_toko as $k)
                                <div class="col-6">
                                    <i class='far fa-address-book'></i> <span
                                        href="www.spikoekuno.co.id"><i>{{ $k }}</i></span>
                                </div>
                            @endforeach

                            {{-- <div class="col-6">
                            <i class='far fa-address-book'></i> <a href="www.spikoekuno.co.id">www.spikoekuno.co.id</a>
                        </div>
                        <div class="col-6">
                            <i class='far fa-address-book'></i> <a href="www.spikoekuno.co.id">www.spikoekuno.co.id</a>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container carousel" style="">
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

            </div>


        </div>
    </div>
@endsection
