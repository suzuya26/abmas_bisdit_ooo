@extends('layouts.master')
@section('content')
    <style>
         body{
        font-family: 'Poppins';

    }
    .header {
        margin: 50px 0px 50px 100px;
        font-family: 'Poppins';
font-style: normal;
font-weight: 700;
font-size: 80px;
line-height: 50px;
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
        left: 100px;
        font-family: 'Quicksand';
        font-style: normal;
        font-size: 150%;
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
    .caro {
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
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
            height: 300px;
            width: 93%;
            margin-left: 10.5px;
            margin-top: -30px;
            padding-top: 20px;
            padding-bottom: 40%;

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
            height: 300px;
            background: #9B9B9B;
            border-radius: 20px;
            display: block;
            transition: .3s;
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
        .foto-beli:hover{
            width: 103%;
            cursor: pointer;
        }
    </style>
    <div class="body">
        <h1 class="header">Daftar Mitra</h1>
        @if (count($tokooleh) > 0)
        <section id="tempatbeli" style="margin-bottom: 200px;margin-top:30px">
            <div class="container">
                <div class="row" >
                    @foreach ($tokooleh as $rek)
                    <div class="caro col-sm-3" onclick="location.href='/toko/{{$rek->idtoko}}'">
                        <div class="foto-beli">
                             <img src="{{ $rek->gambar_utama }}" width= "100%" height="100%"  style="border-radius: 20px">
                        </div>
                        <div class="nama-beli mb-5">
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
        </section>
        @endif
    </div>

@endsection
