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
            <a href="" class="btn btn-primary button-produk"><i class="fa fa-thumbs-up" style="font-size:24px"></i> Rekomendasikan</a> <br>
            <a href="" class="btn btn-primary mt-3 button-produk"><i class="fa fa-thumbs-up" style="font-size:24px"></i> Simpan Produk</a>
        </div>
    </div>
</div>

@endsection
