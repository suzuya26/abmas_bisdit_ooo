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
        <!-- Small boxes (Stat box) -->
        <div class="card">
          <div class="card-header border-0">
            <h3 class="card-title">Produk</h3>
            <div class="card-tools">
              <a href="addproduk.html" class="btn btn-tool btn-sm">
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
              <tbody>
                <tr>
                  <td>
                    <img src="https://cdn.discordapp.com/attachments/906163180328325130/914060163638505542/AlmondCrispyCheese_1.jpg" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Almond Crispy Cheese
                  </td>
                  <td>Rp.20.000</td>
                  <td>50</td>
                </tr>
                <tr>
                  <td>
                    <img src="https://cdn.discordapp.com/attachments/906163180328325130/916964212767621130/CokelatTempe.jpg" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Cokelat Tempe
                  </td>
                  <td>Rp.20.000</td>
                  <td>50</td>
                </tr>
                <tr>
                  <td>
                    <img src="https://cdn.discordapp.com/attachments/906163180328325130/916964212767621130/CokelatTempe.jpg" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Cokelat Tempe
                  </td>
                  <td>Rp.20.000</td>
                  <td>50</td>
                </tr>
                <tr>
                  <td>
                    <img src="https://cdn.discordapp.com/attachments/906163180328325130/916962624820879431/PiaMalang_2.jpg" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Bakpia Khas Malang
                  </td>
                  <td>Rp.20.000</td>
                  <td>50</td>
                </tr>
              </tbody>
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
