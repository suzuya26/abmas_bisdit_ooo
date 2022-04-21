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
        <form action="{{ url('tambah/'.$mitra_produk->idmitra) }}" method="POST">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Informasi Produk</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <input name="idmitra" type="hidden" value="1">
                            <input name="idoleh" type="hidden" value="1">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="formFileMultiple" class="form-label">Gambar Produk</label>
                                    <input class="form-control" name="gambar_produk" type="file" id="formFileMultiple"
                                        multiple>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Nama Produk</label>
                                    <input type="text" name="nama_produk" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Harga Produk</label>
                                    <input type="number" name="harga_produk" placeholder="Rp." class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Stok</label>
                                    <input type="number" name="stok_produk" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Kemasan</label>
                                    <select id="inputStatus" name="kemasan_produk" class="form-control custom-select">
                                        <option selected disabled>Select one</option>
                                        <option value="S">Kecil</option>
                                        <option value="M">Sedang</option>
                                        <option value="L">Besar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 mb-3">
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Tambahkan" class="btn btn-success float-right">
                    </div>
                </div>
                <!-- /.row -->
                <!-- Main row -->
        </form>
        <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
