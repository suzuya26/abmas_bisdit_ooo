@extends("layouts.master")
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

    </style>
    <div class="container">
        <div class="row">
            <div class="col-5 mt-3">
                <p style="font-size: 2rem">Kamu sedang menelusuri mitra, </p>



                <h1>{{ $toko->nama_mitra }}</h1>

                <h4>#1 Toko Oleh-Oleh Surabaya</h4>
                <p><i>Menurut <b> <span style="color: orange">100</span> </b> Orang Surabaya</i></p>
                <p><i>Menurut <b> <span style="color: orange">230</span> </b> Wisatawan</i></p> <br>

                {{-- <p>Pernah ke toko ini?    Ingin berkunjung ke toko ini?</p> --}}
                <div class="row">
                    <div class="col-5">
                        <p>Pernah ke toko ini?</p>
                        <a href="" class=" button-toko" style="">Rekomendasikan</a>
                    </div>
                    <div class="col-6">
                        <p>Ingin berkunjung ke toko ini?</p>
                        <a href="" class=" button-toko">Tambah ke list</a>
                    </div>
                </div>
            </div>
            <div class="col-7 mt-3">
                <img width="90%"
                    src="{{ $toko->gambar_utama }}"
                    alt="">
            </div>
        </div> <br>
        <hr class="mt-3">
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-8">
                <h1 class="">Produk Oleh-oleh dari {{ $toko->nama_mitra }}</h1>
            </div>
            <div class="col-2"></div>
            <div class="col-2">
                <h1> <span><i class="fas fa-filter"></i></span> <i class='fas fa-angle-left'></i> <i
                        class='fas fa-angle-right'></i> </h1>
            </div>
        </div>
    </div>
    @foreach ($produk_mitra as $p)
        <div class="container ">
            <div class="row mt-3">
                <div class="col-4">
                    <img width="410px" src="{{ $p->gambar_produk_mitra }}" alt="">
                </div>
                <div class="col-5 mt-4">
                    <h1>{{ $p->nama_produk_mitra }}</h1>
                    <h3>Rp.{{ number_format($p->harga_produk_mitra) }}</h3>
                    <a href="" class="btn btn-secondary" style="font-size: 1.7rem"><i><span
                                style="color: orange; font-weight:bold">#1</span> {{ $p->nama_produk_mitra }} di Toko ini</i></a>
                </div>
                <div class="col-3 mt-4">
                    <a href="" class=" button-produk"><i class="fa fa-thumbs-up" style="font-size:24px"></i>
                        Rekomendasikan</a> <br>
                    <a href="" class=" mt-3 button-produk"><i class="far fa-bookmark" style="font-size:24px"></i> Simpan
                        Produk</a>
                </div>
            </div>
        </div>
    @endforeach
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
    <div class="container mt-4">
        <h1>Informasi {{ $toko->nama_mitra }}</h1>
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
                    <div class="col-4">
                        <i class='far fa-calendar-alt' style='font-size:66px'></i>

                    </div>
                    <div class="col-4" style="margin-left:-130px">
                        <h3 style="color: #8fd14f; " class="fw-bold">BUKA</h3>
                        <H5>{{ $toko->jam_operasional }}</H5>

                    </div>
                </div>
                <h3 class="mt-2">Fasilitas Toko</h3>
                <div class="row">
                    @php
                        $fasil_toko = preg_split('/---/', $toko->fasilitas_mitra);
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
                        $sekita_toko = preg_split('/---/', $toko->sekitar_mitra);
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
                        $kontak_mitra = preg_split('/---/', $toko->kontak_mitra);
                    @endphp
                    <div class="row">
                        @foreach ($kontak_mitra as $k)
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
    <div class="container carousel">
        <h1 class="mt-3">Galeri {{ $toko->nama_mitra }}</h1>
        <div class="container" style="position: center">
            @php
                $galeri_toko = preg_split('/---/', $toko->galeri_mitra);
                $galeri_toko_caption = preg_split('/---/', $toko->galeri_mitra_caption);
            @endphp
            <div id="myCarousel" class="carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($galeri_toko as $key => $g)
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <img src="{{$g}}" class="d-block w-100"  alt="...">
                    </div>
                    @endforeach
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
