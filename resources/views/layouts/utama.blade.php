@extends('layouts.master')
@section('content')
<style>
    body{

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
</style>
<div class="section utama" style="background: #C4C4C4; height:450px">
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5">
                <h1 class="judul">Oasis Oleh-Oleh</h1> <br> <br>
                <p class="deskripsi">
                    Oasis oleh - oleh merupakan website utama untuk membantu umat manusia memenuhi kebutuhannya dalam mencari oleh - oleh khas daerah Indonesia.
                </p>
                <button class="buttonCari">Cari Sekarang!</button>
            </div>
            <div class="col-6">

            </div>
        </div>
    </div>
</div>
<section>
    <h1 class="judul text-center mt-5">Why Oasis?</h1>
</section>
@endsection
