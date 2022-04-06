@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-5 mt-3">
            <p style="font-size: 2rem">Kamu sedang menelusuri toko, </p>
            <h1>Spikoe Surabaya</h1>
            <h4># Toko Oleh-Oleh Surabaya</h4>
            <p><i>Menurut <b> <span style="color: orange">100</span> </b> Orang Surabaya</i></p>
            <p><i>Menurut <b> <span style="color: orange">230</span> </b> Wisatawan</i></p> <br>
            <h4>#3 Toko Kue Lapis</h4>
            <p><i>Menurut <b> <span style="color: orange">100</span> </b> Orang Surabaya</i></p>
            <p><i>Menurut <b> <span style="color: orange">230</span> </b> Wisatawan</i></p>
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
            <h1 class="">Produk Oleh-oleh dari Spikoe Surabaya</h1>
        </div>
        <div class="col-2"></div>
        <div class="col-2" >
           <h1> <span><i class="fas fa-filter"></i></span>  <i class='fas fa-angle-left'></i> <i class='fas fa-angle-right'></i> </h1>
        </div>
    </div>
</div>
<div class="container ">
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
</div>
<div class="container ">
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
</div>
<div class="container ">
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
</div>
<div class="container">
    <h1>Informasi Spikoe Surabaya</h1>
    <div class="row">
        <div class="col-8">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="720" height="360" id="gmap_canvas" src="https://maps.google.com/maps?q=ir.%20soekarno&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:720px;}</style><a href="https://www.embedgooglemap.net">google maps on my web site</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:720px;}</style></div></div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-4" style="margin-left: -130px">
                    <i class='far fa-calendar-alt' style='font-size:66px'></i>

                </div>
                <div class="col-4" style="margin-left: -50px">
                   <h3 style="color: lightgreen">BUKA</h3>
                   <H5>10.00-16.00</H5>

                </div>
            </div>
            <h3 style="margin-left: -130px" class="mt-2">Fasilitas Toko</h3>
            <div class="row" style="margin-left: -130px">
                <div class="col-5" >
                   <p> <i class="fas fa-car-alt"></i> Parkir Mobil & Motor</p>
                </div>
                <div class="col-5" >
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
                </div>

            </div>
        </div>
    </div>
    <h2 class="mt-3">Kontak dan Informasi Toko:</h2>
    <div class="container" style="font-size: 1.5rem">
        <div class="row">
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
        </div>
    </div>

</div>
<div class="container">
    <h1 class="mt-3">Galeri Spikoe Resep Kuno Surabaya</h1>
    <div id="demo" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="" class=""
                    aria-current="" aria-label="Slide "></button>
        </div>
        <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="d-block ratio ratio-16x9 rounded" src="https://images.pexels.com/photos/9938862/pexels-photo-9938862.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="object-fit: cover;">
                </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

@endsection
