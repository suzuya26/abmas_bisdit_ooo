@extends('mitra.sidebar')
@section('container')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Tambah Produk</li>
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
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Informasi Produk</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="formFileMultiple" class="form-label">Gambar Produk</label>
                  <input class="form-control" type="file" id="formFileMultiple" multiple>
                </div>
                <div class="form-group">
                  <label for="inputName">Nama Produk</label>
                  <input type="text" id="inputName" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Harga Produk</label>
                  <input type="number" id="inputName" placeholder="Rp." class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputName">Stok</label>
                  <input type="number" id="inputName" class="form-control">
                </div>

                <div class="form-group">
                  <label for="inputStatus">Kemasan</label>
                  <select id="inputStatus" class="form-control custom-select">
                    <option selected disabled>Select one</option>
                    <option>Kotak</option>
                    <option>Canceled</option>
                    <option>Success</option>
                  </select>
                </div>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        </div>
        <div class="row ">
          <div class="col-12 mb-3">
            <a href="#" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Create new Project" class="btn btn-success float-right">
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
