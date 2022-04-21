@extends("layouts.master")
@section('content')

    {{-- <div class="container">
        <h3 class="text-center">Mitra Oasis Oleh-oleh</h3>
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
                @foreach ($mitra as $m)
                    <div class="card mt-3">
                        <img src="{{ $m->foto_mitra }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $m->namamitra }}</h5>
                            <p class="card-text"><i class="bi bi-geo-alt"></i>{{ $m->alamat_mitra }}</p>
                            <h6 class="card-text">{{ $m->kota }}-{{ $m->provinsi }}</h6>
                            <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Lihat Detail</a>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-xl modal-fullscreen-lg-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ $m->namamitra }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5 class="mx-3">Detail {{ $m->namamitra }}</h5>
                                    <div class="px-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <figure class="figure">
                                                    <img class="d-block ratio ratio-16x9 rounded"
                                                        src="{{ $m->foto_mitra }}" style="object-fit: cover;">
                                                    <figcaption class="figure-caption text-center">Foto Lokasi
                                                        {{ $m->namamitra }}</figcaption>
                                                </figure>
                                            </div>
                                            <div class="col">
                                                <h6>Tentang {{ $m->namamitra }}</h6>
                                                <p>{{ $m->deskripsimitra }}</p>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <table class="table table-borderless">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="col-4 bi bi-dot">Kontak</td>
                                                                    <td class="col-1 text-center">:</td>
                                                                    <td class="col-7"><i class="bi bi-whatsapp"></i> {{ $m->kontak }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-4 bi bi-dot">Alamat</td>
                                                                    <td class="col-1 text-center">:</td>
                                                                    <td class="col-7">{{ $m->alamat_mitra }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-4 bi bi-dot">Jam Buka</td>
                                                                    <td class="col-1 text-center">:</td>
                                                                    <td class="col-7">{{ $m->jam_buka_mitra }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-4 bi bi-dot">Sampel Cicip</td>
                                                                    <td class="col-1 text-center">:</td>
                                                                    <td class="col-7">{{ $m->cicip }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h5>Produk {{ $m->namamitra }}</h5>

                                        <div class="row row-cols-1 row-cols-md-4 g-4 mb-3">
                                            @foreach ($produkmitra as $pm)
                                                @if ($pm->idmitra = $m->idmitra)
                                                    <div class="col">
                                                        <div class="card h-100">
                                                            <img class="d-block ratio ratio-16x9 rounded"
                                                                src="{{ $pm->gambar_produk_mitra }}"
                                                                style="object-fit: cover;">
                                                            <div class="card-body">
                                                                <h5 class="card-title">{{ $pm->nama_produk_mitra }}
                                                                </h5>
                                                                <p class="card-text">Harga Produk :
                                                                    {{ $pm->harga_produk_mitra }} <br>
                                                                    @if ($pm->status_produkmitra == 1)
                                                                        Produk Asli Dapur {{ $pm->namamitra }}
                                                                    @else
                                                                        Produk Partner {{ $pm->namamitra }}
                                                                    @endif
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>

                                        <h5>Lokasi {{ $m->namamitra }}</h5>
                                        <div class="rounded">
                                            @php
                                                $embed = $m->gmap_mitra;
                                                $peta = stripslashes($embed);
                                                echo $embed;
                                            @endphp
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <a type="button" class="btn btn-outline-primary" href="{{$m->link}}" target="blank">Hubungi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <style>
        .carousel-item{
            height: 32rem;
            background: #777777;
            color: white;
            position: relative;
            background-position: center;
            background-size: cover;
        }
        .container .carousel{
            position: relative;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 40px;
        }
        .carousel-caption{
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
                <p style="font-size: 2rem">Kamu sedang menelusuri toko, </p>



                <h1>{{ $toko->nama_toko }}</h1>

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
                <img width="90%" src="https://images.unsplash.com/photo-1580757468214-c73f7062a5cb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80" alt="">
            </div>
        </div> <br>
        <hr class="mt-3">
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-8">
                <h1 class="">Produk Oleh-oleh dari {{ $toko->nama_toko }}</h1>
            </div>
            <div class="col-2"></div>
            <div class="col-2" >
               <h1> <span><i class="fas fa-filter"></i></span>  <i class='fas fa-angle-left'></i> <i class='fas fa-angle-right'></i> </h1>
            </div>
        </div>
    </div>
    @foreach ($produk_toko as $p )
    <div class="container ">
        <div class="row mt-3">
            <div class="col-4">
                <img width="410px" src="https://images.pexels.com/photos/9938862/pexels-photo-9938862.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
            </div>
            <div class="col-5 mt-4">
                <h1>{{ $p->nama_produk }}</h1>
                <h3>Rp.{{ number_format($p->harga_produk) }}</h3>
                <a href="" class="btn btn-secondary" style="font-size: 1.7rem"><i><span style="color: orange; font-weight:bold">#1</span> Spikoe di Toko ini</i></a>
            </div>
            <div class="col-3 mt-4">
                <a href="" class=" button-produk"><i class="fa fa-thumbs-up" style="font-size:24px"></i> Rekomendasikan</a> <br>
                <a href="" class=" mt-3 button-produk"><i class="far fa-bookmark" style="font-size:24px"></i> Simpan Produk</a>
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
    <div class="container">
        <h1>Informasi {{ $toko->nama_toko }}</h1>
        <div class="row">
            <div class="col-6">
                {{-- @php
                $embed = $toko->map_toko;
                $peta = stripslashes($embed);
                echo $embed;

                @endphp --}}

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31660.513906147913!2d112.79651086582963!3d-7.290317142661231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f09c510751b5%3A0xb04b9f70e748e85!2sKeputih%2C%20Sukolilo%2C%20Surabaya%20City%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1650439226496!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-4" >
                        <i class='far fa-calendar-alt' style='font-size:66px'></i>

                    </div>
                    <div class="col-4" >
                       <h3 style="color: #8fd14f" class="fw-bold">BUKA</h3>
                       <H5>{{ $toko->jam_operasional }}</H5>

                    </div>
                </div>
                <h3  class="mt-2">Fasilitas Toko</h3>
                <div class="row" >
                @php
                    $fasil_toko = preg_split('/---/', $toko->fasilitas_toko);
                @endphp
                @foreach ($fasil_toko as $f )
                <div class="col-5" >
                    <p>
                        @if ($f==='Parkir Mobil & Motor')
                        <i class="fas fa-car-alt"></i>
                        @endif
                        @if ($f==='Wifi Gratis')
                        <i class="fas fa-wifi"></i>
                        @endif
                        @if ($f==='Pesan Antar')
                        <i class="fas fa-motorcycle"></i>
                        @endif
                        @if ($f==='Pembayaran Non-Tunai')
                        <i class="fas fa-money-check"></i>
                        @endif
                        @if ($f==='Makan di Tempat')
                        <i class="fas fa-utensils"></i>
                        @endif
                        {{ $f }}</p>
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
                <h3  class="mt-2">Di Sekitar Toko</h3>
                <div class="row" >
                @php
                    $sekita_toko = preg_split('/---/', $toko->jenis_sekitar);
                @endphp
                @foreach ($sekita_toko as $s )
                    @if ($loop->odd)
                    <div class="col-5" >
                        <p> <i class="fa-solid fa-location-dot"></i> {{ $s }}</p>
                    </div>
                    @endif
                    @if ($loop->even)
                    <div class="col-5" >
                        <p> {{ $s }}</p>
                    </div>
                    @endif
                @endforeach
                {{-- @php
                    $jenis_sekitar = preg_split('/---/', $toko->jenis_sekitar);
                    $value_sekitar = preg_split('/---/', $toko->value_jenis_sekitar);
                @endphp
                @foreach ($jenis_sekitar as $j )
                <div class="col-5" >
                    @if ($j==='ATM')
                        <p> <i class="far fa-dollar-sign"></i></p>
                    @endif
                    @if ($j==='Bandara')
                        <p> <i class="far fa-plane-alt"></i></p>
                    @endif
                    @if ($j==='Stasiun')
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
        <h2  class="mt-3">Kontak dan Informasi Toko:</h2>
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
                        @foreach ($kontak_toko as $k )
                        <div class="col-6">
                            <i class='far fa-address-book'></i> <span href="www.spikoekuno.co.id"><i>{{ $k }}</i></span>
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
        <h1 class="mt-3">Galeri {{ $toko->nama_toko }}</h1>
        <div class="container" style="position: center">
        <div id="myCarousel" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" style="background-image:url(https://i0.wp.com/www.emporioarchitect.com/upload/portofolio/1280/desain-rumah-dan-toko-modern-2-lantai-43010721-94431946010721023307-3.jpg)">
                <div class="carousel-caption">
                    <h1>Tampak Depan Toko</h1>
                    <p>Jalan Tunjungan Plaza 78, Tunjungan, Plaza</p>
                </div>
              </div>
              <div class="carousel-item" style="background-image:url(https://sribu-sg.s3.amazonaws.com/assets/media/contest_attachment/5768d146fcbda3e74f5b142ab561c0df/2585cb9dbc.jpg)">
                <div class="carousel-caption">
                    <h1>Tampak Samping Toko</h1>
                    <p>Jalan Tunjungan Plaza 78, Tunjungan, Plaza</p>
                </div>
              </div>
              <div class="carousel-item" style="background-image:url(https://i0.wp.com/www.emporioarchitect.com/upload/portofolio/thumb/desain-rumah-dan-toko-modern-2-lantai-43010721-94431946010721023307-5.jpg)">
                <div class="carousel-caption">
                    <h1>Tampak Belakang Toko</h1>
                    <p>Jalan Tunjungan Plaza 78, Tunjungan, Plaza</p>
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
