@extends('mitra.sidebar')
@section('container')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                      </ol>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="db-title m-0 text-dark " style="font-size: 25px;font-weight:600;">Produk Oleh-Oleh {{  $toko_mitra->nama_mitra }}</h1>
                </div>
            </div>
            <!-- Small boxes (Stat box) -->
            <div class="row">
                @foreach ( $mitra_produk as $m)
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <img class="img-fluid" alt="100%x280"
                            src="{{ url('/data_file/'.$m->gambar_produkMitra) }}" style="height: 250px;width:250px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $m->nama_produk_mitra }}</h5>
                            <br>
                            <h6 class="card-title"> Rp.{{ $m->harga_produk_mitra }}</h6>
                            {{-- <br>
                            <div class="card-footer bg-transparent">
                                Rp{{ $m->harga_produk_mitra }}
                            </div> --}}
                            <a href="/varianoleh/21" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                @endforeach

                {{-- <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <img class="img-fluid" alt="100%x280"
                            src=https://cdn.discordapp.com/attachments/906163180328325130/916964212767621130/CokelatTempe.jpg>
                        <div class="card-body">
                            <h5 class="card-title">Cokelat Tempe</h5>
                            <br>
                            <h6 class="card-title">50 pcs</h6>
                            <br>
                            <div class="card-footer bg-transparent">
                                Rp. 20.000
                            </div>
                            <a href="/varianoleh/22" class="stretched-link"></a>
                        </div>
                        <div class="card-footer bg-transparent">
                            <p class="card-text bi bi-heart-fill">
                                10 Orang Menyukai ini</p>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- /.row -->
            <!-- Main row -->

        </div>
        <!-- /.row (main row) -->
    @endsection
