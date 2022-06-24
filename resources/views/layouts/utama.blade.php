@extends('layouts.master')
@section('content')
<style>

    body{
        font-family: 'Poppins';

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
    .deskripsi{
        left: 6.94%;
        right: 54.17%;
        width: 539px;
        height: 145px;
        left: 100px;
        font-family: 'Poppins';
        font-style: normal;
        font-size: 60px;
        line-height: 50px;
        font-family: 'Quicksand';
        font-style: normal;
        font-size: 30px;
        line-height: 28px;
        color: #000000;
    }
    .judul{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 60px;
        line-height: 50px;
        color: #000000;
    }
    .buttonCari:hover{
        background: white;
        color: black
    }
    .penjelasan{
        font-style: normal;
        font-weight: 500;
        font-size: 14.1924px;
        line-height: 132.3%;
        /* or 19px */

        letter-spacing: -0.005em;
        color: #44455B;
    }
    .rectangle{
        width: 309px;
        height: 500px;
        background: #F5EDE1;
        border-radius: 50px;
        padding: 10px;
        filter: drop-shadow(27.46px 5.75px 5.75px rgba(0, 0, 0, 0.25));
    }
    .arrow-left{
    position: absolute;
    left: 448px;
    top: 1300px;
    }
    .arrow-right{
    position: absolute;
    left: 816px;
    top: 1475.53px;
    }
    .daun{
        /* toppng 2 */

position: absolute;

left: 1010.98px;
top: 890px;
filter: drop-shadow(40px 54px 64px rgba(0, 0, 0, 0.25));
transform: rotate(37.85deg);

    }
    .caro {
        align-items: center;
        justify-content: center;
    }
    .icon-buka {
            color: red;
            font-family: 'Poppins';
    font-style: normal;
    font-weight: 700;
    font-size: 15px;
    line-height: 10px;
        }

    .nama-beli {
            background: #DEECF3;
            /* Shadow01 */
            box-shadow: 0px 24px 48px rgba(0, 24, 52, 0.080899);
            border-radius: 0px 0px 40px 40px;
            height: 64%;
            width: 93%;
            margin-left: 10.5px;
            margin-top: -30px;
            padding-top: 20px;

        }
        .teks-nama {
            vertical-align: bottom;
            text-align: left;
            padding: 20px 25px 0px 30px;
        }
        .teks-nama h2 {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 24px;
        }
        .foto-beli {
            width: 100%;
            height: 100%;
            background: #9B9B9B;
            border-radius: 20px;
            display: block;
        }
        #buka {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
        }
        #jam-buka {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            color: #333333;
        }
        .text-beli {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            color: #333333;
        }
        .alamat-beli {
            margin-left: 5px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 15px;
            color: #333333;
        }
        .info-beli {
            line-height: 12px;
        }

</style>
<div class="section utama" style="background: #C4C4C4; height:450px">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mt-5">
                <h1 class="judul">Oasis Oleh-Oleh</h1> <br> <br>
                <p class="deskripsi" style="text-align: justify">
                    Oasis oleh - oleh merupakan website utama untuk membantu umat manusia memenuhi kebutuhannya dalam mencari oleh - oleh khas daerah Indonesia.
                </p>
                <button class="buttonCari">Cari Sekarang!</button>
            </div>
            {{-- <div class="col-1"></div> --}}
            <div class="col-sm-5">
                <img src="{{ asset('img/utama.png') }}" alt="" width="678px" height="450px" style="object-position: center">
            </div>
        </div>
    </div>
</div>
<section class="mt-5">
    <div class="container">
     @auth
     <h2>Hi, <span class="fw-bold"><i>{{ Auth::user()->name }}!</i></span></h2>
     @else
     <h2>Hi, <span class="fw-bold"><i>Tamu!</i></span></h2>
     @endauth
     <h2>Sekarang lokasi kamu ada di</h2>
     <h2><i class="fas fa-map-marker-alt" style="color: rgb(255, 148, 49)"></i> {{ $kota . ', ' . $provinsi }}</h2>
    </div>
 </section> <hr>
 @if (count($olehPopuler) > 0)
 <section style="margin-bottom: 200px">
     <div class="container">
         <h1 class="fw-bold">Rekomendasi Oleh-oleh Khas {{$kota}}</h1>
         <div class="row">
             <div class="col-8"></div>
             @if (count($olehPopuler)<4)
             <br>
             @endif
             @if (count($olehPopuler)>4)
             <div class="col-4 text-end">
                <a class="btn btn-dark text-light mb-3 mr-1 btn-sm"
                    data-bs-target="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <a class="btn btn-dark text-light mb-3 btn-sm" data-bs-target="#carouselExampleIndicators2"
                    role="button" data-bs-slide="next">
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
             @endif
             <div class="col-12">
                 <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                     <div class="carousel">
                         <div class="carousel-item active">
                             <div class="row">
                                @foreach ($olehPopuler->slice(0, 4) as $rek)
                                <div class="caro col-sm-3" onclick="location.href='/oleh/{{$rek->idoleh}}'">
                                    <div class="foto-beli">
                                        <img src="{{ $rek->gambarutama }}" width= "100%"
                                        height="100%" style="border-radius: 20px">
                                    </div>
                                    <div class="nama-beli">
                                        <div class="teks-nama">
                                            <h2>{{ $rek->namaoleh }}</h2>
                                            <h2 id="buka" style="color: red">Rp <span id="jam-buka">{{ number_format($rek->hargamin) }}</span></h2>
                                            <div class="info-beli" style="font-size: 18px">
                                                <i class="fas fa-thumbs-up"><span class="text-beli"><span class="text-danger"> {{$rek->rekomendasioleh_count}}</span> Users</span></i> <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 @endforeach
                             </div>
                         </div>
                         @if (count($olehPopuler) > 4)
                             <div class="carousel-item">
                                 <div class="row">
                                    @foreach ($olehPopuler->slice(4, 4) as $rek)
                                    <div class="caro col-sm-3" onclick="location.href='/oleh/{{$rek->idoleh}}'">
                                        <div class="foto-beli">
                                            <img src="{{ $rek->gambarutama }}" width= "100%" height="100%" style="border-radius: 20px">
                                        </div>
                                        <div class="nama-beli">
                                            <div class="teks-nama">
                                                <h2>{{ $rek->namaoleh }}</h2>
                                                <h5 id="buka" class=""><span class="text-danger fw-bold">Rp</span> <span id="jam-buka">{{ number_format($rek->hargamin) }}</span></h5>
                                                <div class="info-beli" style="font-size: 18px">
                                                    <i class="fas fa-thumbs-up"><span class="text-beli"><span class="text-danger"> {{$rek->rekomendasioleh_count}}</span> Users</span></i> <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                 </div>
                             </div>
                         @endif
                         @if (count($olehPopuler) > 8)
                             <div class="carousel-item">
                                 <div class="row">
                                    @foreach ($olehPopuler->slice(8, 4) as $rek)
                                    <div class="col-sm-3" onclick="location.href='/oleh/{{$rek->idoleh}}'">
                                        <div class="foto-beli">
                                            <img src="{{ $rek->gambarutama }}" width= "100%" height="100%"  style="border-radius: 20px">
                                        </div>
                                        <div class="nama-beli">
                                            <div class="teks-nama">
                                                <h2>{{ $rek->namaoleh }}</h2>
                                                <h5 id="buka" class=""><span class="text-danger fw-bold">Rp</span> <span id="jam-buka">{{ number_format($rek->hargamin) }}</span></h5>
                                                <div class="info-beli" style="font-size: 18px">
                                                    <i class="fas fa-thumbs-up"><span class="text-beli"><span class="text-danger"> {{$rek->rekomendasioleh_count}}</span> Users</span></i> <br>
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
             {{-- <a href="#" class="link-dark text-end col-12">Lebih Banyak >>></a> --}}
         </div>
     </div>
 </section>
 @endif
 @if (count($tokoPopuler) > 0)
 <section style="margin-bottom: 200px" class="mt-3">
     <div class="container">
         <h1 class="fw-bold mt-5">Rekomendasi Toko Oleh-oleh yang Sering Dikunjungi</h1>
     <div class="row">
         <div class="col-8"></div>
             <div class="col-4 text-end">
                 <a class="btn btn-dark text-light mb-3 mr-1 btn-sm"
                     data-bs-target="#carouselExampleIndicators1" role="button" data-bs-slide="prev">
                     <i class="bi bi-arrow-left"></i>
                 </a>
                 <a class="btn btn-dark text-light mb-3 btn-sm" data-bs-target="#carouselExampleIndicators1"
                     role="button" data-bs-slide="next">
                     <i class="bi bi-arrow-right"></i>
                 </a>
             </div>
             <div class="col-12">
                 <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                     <div class="carousel">
                         <div class="carousel-item active">
                             <div class="row">
                                 @foreach ($tokoPopuler->slice(0,4) as $rek)
                                 <div class="col-sm-3" onclick="location.href='/toko/{{$rek->idtoko}}'">
                                    <div class="foto-beli">
                                        <img src="{{ $rek->gambar_utama }}" width= "100%" height="100%"  style="border-radius: 20px">
                                    </div>
                                    <div class="nama-beli">
                                        <div class="teks-nama">
                                            <h2>{{ $rek->nama_toko }}</h2>
                                            <div class="info-beli" style="font-size: 25px">
                                                @if($check)
                                                <h3 style="color: #0CBB3D;font-size:24px" class="fw-bold">BUKA <span style="color: #000000; font-size:18px">({{ $toko->jam_buka }} - {{ $toko->jam_tutup }})</span> </h3>
                                                @else
                                                <h3 style="color: red" class="fw-bold">TUTUP <span style="color: #000000; font-size:18px">({{ $toko->jam_buka }} - {{ $toko->jam_tutup }})</span> </h3>
                                                @endif
                                                <i class="icon-buka bi bi-geo-alt-fill"><span
                                                    class="alamat-beli">{{ $rek->alamat_toko }}</span></i><br><br>
                                                <i class="icon-buka bi bi-telephone-fill"><span
                                                    class="alamat-beli">{{ $rek->kontak_toko }}</span></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 @endforeach
                             </div>
                         </div>
                                 @if (count($tokoPopuler)>4)
                                 <div class="carousel-item">
                                     <div class="row">
                                         @foreach ($tokoPopuler->slice(4, 4) as $rek)
                                         <div class="col-sm-3" onclick="location.href='/toko/{{$rek->idtoko}}'">
                                            <div class="foto-beli">
                                                <img src="{{ $rek->gambar_utama }}" width= "100%" height="100%"  style="border-radius: 20px">
                                            </div>
                                            <div class="nama-beli">
                                                <div class="teks-nama">
                                                    <h2>{{ $rek->nama_toko }}</h2>
                                                    <div class="info-beli" style="font-size: 25px">
                                                        @if($check)
                                                        <h3 style="color: #0CBB3D;font-size:24px" class="fw-bold">BUKA <span style="color: #000000; font-size:18px">({{ $toko->jam_buka }} - {{ $toko->jam_tutup }})</span> </h3>
                                                        @else
                                                        <h3 style="color: red" class="fw-bold">TUTUP <span style="color: #000000; font-size:18px">({{ $toko->jam_buka }} - {{ $toko->jam_tutup }})</span> </h3>
                                                        @endif
                                                        <i class="icon-buka bi bi-geo-alt-fill"><span
                                                            class="alamat-beli">{{ $rek->alamat_toko }}</span></i><br><br>
                                                        <i class="icon-buka bi bi-telephone-fill"><span
                                                            class="alamat-beli">{{ $rek->kontak_toko }}</span></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         @endforeach
                                     </div>
                                 </div>
                                 @endif
                                 @if (count($tokoPopuler)>8)
                                 <div class="carousel-item">
                                     <div class="row">
                                         @foreach ($tokoPopuler->slice(8, 4) as $rek)
                                         <div class="col-sm-3" onclick="location.href='/toko/{{$rek->idtoko}}'">
                                            <div class="foto-beli">
                                                <img src="{{ $rek->gambar_utama }}" width= "100%" height="100%"  style="border-radius: 20px">
                                            </div>
                                            <div class="nama-beli">
                                                <div class="teks-nama">
                                                    <h2>{{ $rek->nama_toko }}</h2>
                                                    <div class="info-beli" style="font-size: 25px">
                                                        @if($check)
                                                        <h3 style="color: #0CBB3D;font-size:24px" class="fw-bold">BUKA <span style="color: #000000; font-size:18px">({{ $toko->jam_buka }} - {{ $toko->jam_tutup }})</span> </h3>
                                                        @else
                                                        <h3 style="color: red" class="fw-bold">TUTUP <span style="color: #000000; font-size:18px">({{ $toko->jam_buka }} - {{ $toko->jam_tutup }})</span> </h3>
                                                        @endif
                                                        <i class="icon-buka bi bi-geo-alt-fill"><span
                                                            class="alamat-beli">{{ $rek->alamat_toko }}</span></i><br><br>
                                                        <i class="icon-buka bi bi-telephone-fill"><span
                                                            class="alamat-beli">{{ $rek->kontak_toko }}</span></i>
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
     </div>
     </div>
 </section>
 @endif
 @if (count($harga) > 0)
 <section style="margin-bottom:200px">
     <div class="container">
         <h1 class="fw-bold">Rekomendasi Oleh-Oleh dengan harga di bawah Rp40.000</h1>
             <div class="row">
                 <div class="col-8"></div>
                 <div class="col-4 text-end">
                 <a class="btn btn-dark text-light mb-3 mr-1 btn-sm"
                     data-bs-target="#carouselExampleIndicators3" role="button" data-bs-slide="prev">
                     <i class="bi bi-arrow-left"></i>
                 </a>
                 <a class="btn btn-dark text-light mb-3 btn-sm" data-bs-target="#carouselExampleIndicators3"
                     role="button" data-bs-slide="next">
                     <i class="bi bi-arrow-right"></i>
                 </a>
                 </div>
                 <div class="col-12">
                     <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                         <div class="carousel">
                             <div class="carousel-item active">
                                 <div class="row">
                                     @foreach ($harga->slice(0, 4) as $rek)
                                     <div class="col-sm-3" onclick="location.href='/oleh/{{$rek->idoleh}}'">
                                        <div class="foto-beli">
                                            <img src="{{ $rek->gambarutama }}" width= "100%" height="100%"  style="border-radius: 20px">
                                        </div>
                                         <div class="nama-beli">
                                             <div class="teks-nama">
                                                 <h2>{{ $rek->namaoleh }}</h2>
                                                 <h5 id="buka" class=""><span class="text-danger fw-bold">Rp</span> <span id="jam-buka">{{ number_format($rek->hargamin) }}</span></h5>
                                                 <div class="info-beli">
                                                     <span class="text-beli" style="font-size: 1.2rem">{{$rek->kota}}</span> <br>
                                                     {{-- <i class="fas fa-map-marker-alt"> <span class="text-beli" style="font-size: 0.8rem">Jalan Jemursari Raya IV</span></i> --}}
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     @endforeach
                                 </div>
                             </div>
                         @if (count($harga) > 4)
                         <div class="carousel-item">
                             <div class="row">
                                 @foreach ($harga->slice(4, 4) as $rek)
                                 <div class="col-sm-3" onclick="location.href='/oleh/{{$rek->idoleh}}'">
                                    <div class="foto-beli">
                                        <img src="{{ $rek->gambarutama }}" width= "100%" height="100%"  style="border-radius: 20px">
                                    </div>
                                     <div class="nama-beli">
                                         <div class="teks-nama">
                                             <h2>{{ $rek->namaoleh }}</h2>
                                             <h5 id="buka" class=""><span class="text-danger fw-bold">Rp</span> <span id="jam-buka">{{ number_format($rek->hargamin) }}</span></h5>
                                             <div class="info-beli">
                                                 <span class="text-beli" style="font-size: 1.2rem">{{$rek->kota}}</span> <br>
                                                 {{-- <i class="fas fa-map-marker-alt"> <span class="text-beli" style="font-size: 0.8rem">Jalan Jemursari Raya IV</span></i> --}}
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 @endforeach
                             </div>
                         </div>
                         @endif
                         @if (count($harga) > 8)
                         <div class="carousel-item">
                             <div class="row">
                                 @foreach ($harga->slice(8, 4) as $rek)
                                 <div class="col-sm-3" onclick="location.href='/oleh/{{$rek->idoleh}}'">
                                    <div class="foto-beli">
                                        <img src="{{ $rek->gambarutama }}" width= "100%" height="100%"  style="border-radius: 20px">
                                    </div>
                                     <div class="nama-beli">
                                         <div class="teks-nama">
                                             <h2>{{ $rek->namaoleh }}</h2>
                                             <h5 id="buka" class=""><span class="text-danger fw-bold">Rp</span> <span id="jam-buka">{{ number_format($rek->hargamin) }}</span></h5>
                                             <div class="info-beli">
                                                 <span class="text-beli" style="font-size: 1.2rem">{{$rek->kota}}</span> <br>
                                                 {{-- <i class="fas fa-map-marker-alt"> <span class="text-beli" style="font-size: 0.8rem">Jalan Jemursari Raya IV</span></i> --}}
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
<section class="p-4">
    <h1 class="judul text-center mt-5 mb-3">Why Oasis?</h1>
    <div class="container" style="width: 100%">
        <div class="row text-center">
            <div class="col-sm-3">
                <img src="{{ asset('img/informasi.png') }}" alt="" width="200px" height="200px">
                <h5 class="mt-1 fw-bold">Informasi Satu Sumber</h5>
                <p class="penjelasan">Semua informasi oleh-oleh tiap daerah dapat ditemukan dalam satu platform</p>
            </div>
            <div class="col-1"></div>
            <div class="col-sm-4 ">
                <img src="{{ asset('img/mitra.png') }}" alt="" width="200px" height="200px">
                <h5 class="mt-1 fw-bold">Mitra dan Toko Terpercaya</h5>
                <p class="penjelasan">Kami melakukan kurasi dan penelitian untuk menampilkan Toko Oleh-oleh terbaik dan terpercaya</p>
            </div>
            <div class="col-1"></div>
            <div class="col-sm-3">
                <img src="{{ asset('img/time.png') }}" alt="" width="200px" height="200px">
                <h5 class="mt-1 fw-bold">Efisien Waktu</h5>
                <p class="penjelasan">Nikmati waktu liburan dengan maksimal tanpa perlu mencari rekomendasi toko oleh-oleh di kota wisatamu</p>
            </div>
        </div>
    </div>
</section>
<section style="background: rgba(244, 106, 6, 0.48);" class="p-5">
    <h1 class="judul text-center mt-3" style="margin-bottom: 78px">How We Work?</h1>

    <div class="container mt-2" style="width: 100%">
        <div class="row" style="margin: auto">
            <div class="col-sm-4 mb-3">
                <div class="rectangle">
                    <img src="{{ asset('img/kurasi.png') }}" alt="" width="143px" height="143px" class="mt-5" style="margin-left:28%">
                    <h3 class="text-center mt-4 fw-bold">Kurasi Data</h3> <br>
                    <p class="text-center">Kami melakukan kurasi data dan riset mengenai toko oleh-oleh yang menjadi khas suatu daerah dan layak untuk direkomendasikan ke User kami</p>
                </div>

            </div>
            {{-- <div class="col-1"></div> --}}
            <div class="col-sm-4 mb-3">
                <div class="rectangle" style="margin-top:-32px ">
                    <img src="{{ asset('img/pengumpulan.png') }}" alt="" width="143px" height="143px" class="mt-5" style="margin-left:28%">
                    <h3 class="text-center mt-4  fw-bold">Pengumpulan Data</h3> <br>
                    <p class="text-center">Setelah melakukan kurasi data kami mengumpulkan data tersebut dan menampilkannya kedalam website Oasis Oleh-oleh</p>
                </div>
            </div>
            {{-- <div class="col-1"></div> --}}
            <div class="col-sm-4 mb-3">
                <div class="rectangle">
                    <img src="{{ asset('img/cari.png') }}" alt="" width="143px" height="143px" class="mt-5" style="margin-left:28%">
                    <h3 class="text-center mt-4  fw-bold">Cari Oleh-oleh</h3> <br>
                    <p class="text-center">User dapat mengakses website Oasis oleh-oleh dan menemukan pencarian oleh-oleh yang ingin dicari sesuai daerah yang diinginkan hanya dalam satu platform</p>
                </div>
            </div>
        </div>
        {{-- <img src="{{ asset('img/arrow-left.png') }}" alt="" width="74px" class="arrow-left">
        <img src="{{ asset('img/arrow-right.png') }}" alt="" width="84px" class="arrow-right"> --}}
        {{-- <img src="{{ asset('img/daun.png') }}" alt="" class="daun" width="100px" height="100px"> --}}
    </div>
</section>


@endsection
