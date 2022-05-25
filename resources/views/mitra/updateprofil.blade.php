@extends('mitra.sidebar')
@section('container')
    <!-- Content Header (Page header) -->
    {{-- <div class="content-header">
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
    </div> --}}
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <ul class="nav nav-tabs">
                            <li class="cycle-tab-item active">
                                <a class="nav-link" role="tab" data-toggle="tab" href="#informasi-toko">Informasi Toko</a>
                            </li>
                            <li class="cycle-tab-item">
                                <a class="nav-link" role="tab" data-toggle="tab" href="#gambar-1">Gambar Toko 1 </a>
                            </li>
                            <li class="cycle-tab-item">
                                <a class="nav-link" role="tab" data-toggle="tab" href="#gambar-2">Gambar Toko 2</a>
                            </li>
                            <li class="cycle-tab-item">
                                <a class="nav-link" role="tab" data-toggle="tab" href="#gambar-3">Gambar Toko 3</a>
                            </li>
                            <li class="cycle-tab-item">
                                <a class="nav-link" role="tab" data-toggle="tab" href="#gambar-4">Gambar Toko 4</a>
                            </li>
                            <li class="cycle-tab-item">
                                <a class="nav-link" role="tab" data-toggle="tab" href="#gambar-5">Gambar Toko 5</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="cycle-tab-container">
                            <div class="tab-content">
                                <div class="tab-pane fade" id="informasi-toko" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="container-fluid">
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
                                                                <input type="text" name="nama" value="{{ $toko_mitra->nama_mitra}}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputName">Alamat</label>
                                                                <input type="text" name="alamat" value="{{ $toko_mitra->alamat_mitra}}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputName">Jam Operasional</label>
                                                                <div class="row">
                                                                    <div class="col-2">
                                                                        <label for="inputName" style="font-size: 0.8rem">Jam Buka</label>
                                                                        <input type="text" name="alamat" value="{{ $toko_mitra->jam_buka}}" class="form-control">
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <label for="inputName" style="font-size: 0.8rem">Jam Tutup</label>
                                                                        <input type="text" name="alamat" value="{{ $toko_mitra->jam_tutup}}" class="form-control">
                                                                    </div>
                                                                </div>
                            
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputName">Fasilitas Toko</label> <br>
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <label><input type="checkbox" name="fasilitas_mitra[]" {{in_array('Parkir Mobil dan Motor', $checkbox) ? 'checked' : ''}} value="Parkir Mobil dan Motor"> Parkir Mobil dan Motor</label> <br>
                                                                        <label><input type="checkbox" name="fasilitas_mitra[]" {{in_array('Pesan Antar', $checkbox) ? 'checked' : ''}} value="Pesan Antar"> Pesan Antar</label> <br>
                                                                        <label><input type="checkbox" name="fasilitas_mitra[]" {{in_array('Makan di Tempat', $checkbox) ? 'checked' : ''}} value="Makan di Tempat"> Makan di Tempat</label> <br>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label><input type="checkbox" name="fasilitas_mitra[]" {{in_array('Wifi Gratis', $checkbox) ? 'checked' : ''}} value="wifi"> Wifi Gratis</label> <br>
                                                                        <label><input type="checkbox" name="fasilitas_mitra[]" {{in_array('Pembayaran Nontunai', $checkbox) ? 'checked' : ''}} value="Pembayaran Nontunai"> Pembayaran Nontunai</label>
                                                                    </div>
                                                                </div>         
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputName">Instagram</label>
                                                                <input type="text" name="ig" value="{{ $toko_mitra->sosmed_mitra}}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputName">Kontak</label>
                                                                <input type="text" name="kontak" value="{{ $toko_mitra->kontak_mitra}}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputName">Website</label>
                                                                <input type="text" name="web" value="{{ $toko_mitra->website_mitra}}" class="form-control">
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
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="gambar-1" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Gambar Toko</h3>
                                                    <div class="card-tools">
                                                        <div class="input-group input-group-sm" style="width: 150px;">
                                                            <input type="text" name="table_search"
                                                                class="form-control float-right" placeholder="Search">

                                                            <div class="input-group-append">
                                                                <button type="submit" class="btn btn-default"><i
                                                                        class="fas fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body table-responsive p-0" style="height: 300px;">
                                                    <table class="table table-head-fixed text-nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Stakeholder</th>
                                                                <th>Peran</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>

                                                       
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Alfito</td>
                                                                        <td>Siswa</td>
                                                                        <td>
                                                                            <a
                                                                                href="/dashboard/profil/"><button
                                                                                    type="button"
                                                                                    class="btn btn-info btn-sm">Detail</button></a>
                                                                            |
                                                                            <a
                                                                                href="/hapusStakeholder/"><button
                                                                                    type="button"
                                                                                    class="btn btn-danger btn-sm">Delete</button></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                        
                                                    </table>

                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <button type="button" class="btn btn-primary mt-2" data-toggle="collapse"
                                                data-target="#demo">Klik di sini untuk
                                                menambah stakeholder</button>
                                            <div id="demo" class="collapse container">
                                                <form action="/tambahStakeholder" method="POST">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="mb-3 mt-3">
                                                                @csrf
                                                                <label for="email" class="form-label">Email
                                                                    Stakeholder</label>
                                                                <input type="email" class="form-control" id="email"
                                                                    aria-describedby="emailHelp" name="email">
                                                                <input type="hidden" id="proyekId" name="proyekId"
                                                                    value="">
                                                                <button type="submit" id="buttonStoreStakeholder"
                                                                    class="btn btn-primary mt-2">Simpan</button>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <button type="submit" class="btn btn-default"><i
                                                                        class="fas fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
