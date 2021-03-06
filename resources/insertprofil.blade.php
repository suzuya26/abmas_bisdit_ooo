@extends('mitra.sidebar')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profil Mitra</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Profil Mitra</li>
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
            <form action="{{ url('update/'.$toko_mitra->idmitra) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Informasi Mitra</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName" class="form-label">Nama Toko</label>
                                    <input type="text" name="nama" value={{ $toko_mitra->nama_mitra}} class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Alamat</label>
                                    <input type="text" name="alamat" value={{ $toko_mitra->alamat_mitra}} class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Jam Operasional</label>
                                    <div class="row">
                                        <div class="col-2">
                                            <label for="inputName" style="font-size: 0.8rem">Jam Buka</label>
                                            <input type="text" name="jam_buka" placeholder="08:00" class="form-control">
                                        </div>
                                        <div class="col-2">
                                            <label for="inputName" style="font-size: 0.8rem">Jam Tutup</label>
                                            <input type="text" name="jam_tutup" placeholder="17:00" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Fasilitas Toko</label> <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label><input type="checkbox" name="fasilitas_mitra[]" value="Parkir Mobil dan Motor"> Parkir Mobil dan Motor</label> <br>
                                            <label><input type="checkbox" name="fasilitas_mitra[]" value="pesan_antar"> Pesan Antar</label> <br>
                                            <label><input type="checkbox" name="fasilitas_mitra[]" value="makan_diTempat"> Makan di Tempat</label> <br>
                                        </div>
                                        <div class="col-6">
                                            <label><input type="checkbox" name="fasilitas_mitra[]" value="wifi"> Wifi Gratis</label> <br>
                                            <label><input type="checkbox" name="fasilitas_mitra[]" value="nontunai"> Pembayaran Nontunai</label>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Tempat di Sekitar Toko</label>
                                    <input type="text" name="sekitar" value="{{ $toko_mitra->sekitar_mitra}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Instagram</label>
                                    <input type="text" name="ig" value={{ $toko_mitra->sosmed_mitra}} class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Kontak</label>
                                    <input type="text" name="kontak" value={{ $toko_mitra->kontak_mitra}} class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Website</label>
                                    <input type="text" name="web" value={{ $toko_mitra->website_mitra}} class="form-control">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
                <div class="row ">
                    <div class="col-12 mb-3">
                        <a href="{{ url('profil/'.$toko_mitra->idmitra) }}" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Update Profil" class="btn btn-success float-right">
                    </div>
                </div>
            </form>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
