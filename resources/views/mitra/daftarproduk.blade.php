@extends('mitra.sidebar')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Daftar Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @if (session()->has('successs'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <!-- Small boxes (Stat box) -->
        <div class="card">
          <div class="card-header border-0">
            <h3 class="card-title">Produk</h3>
            <div class="card-tools">
              <a href="/tambahproduk" class="btn btn-tool btn-sm">
                <i class="fas fa-plus"></i>
              </a>
              <a href="listproduk.html" class="btn btn-tool btn-sm">
                <i class="fas fa-bars"></i>
              </a>
            </div>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
              <thead>
                <tr>
                  <th>Produk</th>
                  <th>Harga</th>
                  <th>Stok</th>
                </tr>
              </thead>
              @foreach ($mitra_produk as $m)
              <tbody>
                <tr>
                  <td>
                    <img src="{{ url('/data_file/'.$m->gambar_produkMitra) }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                    {{ $m->nama_produk_mitra }}
                  </td>
                  <td>Rp.{{ $m->harga_produk_mitra }}</td>
                  <td>{{ $m->stok_produk_mitra }}</td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
