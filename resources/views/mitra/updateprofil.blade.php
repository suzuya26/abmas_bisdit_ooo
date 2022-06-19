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
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:700,300);

.frame {
	/* position: absolute; */
	top: 50%;
	left: 50%;
	width: 400px;
	height: 400px;
	/* margin-top: -200px;
	margin-left: -200px; */
	border-radius: 2px;
	box-shadow: 4px 8px 16px 0 rgba(0, 0, 0, 0.1);
	overflow: hidden;
	background: linear-gradient(to top right, darkmagenta 0%, hotpink 100%);
	color: #333;
	font-family: "Open Sans", Helvetica, sans-serif;
}

.center {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 300px;
	height: 260px;
	border-radius: 3px;
	box-shadow: 8px 10px 15px 0 rgba(0, 0, 0, 0.2);
	background: #fff;
	display: flex;
	align-items: center;
	justify-content: space-evenly;
	flex-direction: column;
}

.title {
	width: 100%;
	height: 50px;
	border-bottom: 1px solid #999;
	text-align: center;
}

h1 {
	font-size: 16px;
	font-weight: 300;
	color: #666;
}

.dropzone {
	width: 100px;
	height: 80px;
	border: 1px dashed #999;
	border-radius: 3px;
	text-align: center;
}

.upload-icon {
	margin: 25px 2px 2px 2px;
}

.upload-input {
	position: relative;
	top: -62px;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
}

.btn1 {
	display: block;
	width: 140px;
	height: 40px;
	background: darkmagenta;
	color: #fff;
	border-radius: 3px;
	border: 0;
	box-shadow: 0 3px 0 0 hotpink;
	transition: all 0.3s ease-in-out;
	font-size: 14px;
}

.btn1:hover {
	background: rebeccapurple;
	box-shadow: 0 3px 0 0 deeppink;
}

    </style>
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
                                <a class="nav-link" role="tab" data-toggle="tab" href="#gambar-utama">Gambar Utama Toko </a>
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
                                                                        <input type="text" name="jam_buka" value="{{ $toko_mitra->jam_buka}}" class="form-control">
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <label for="inputName" style="font-size: 0.8rem">Jam Tutup</label>
                                                                        <input type="text" name="jam_tutup" value="{{ $toko_mitra->jam_tutup}}" class="form-control">
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
                                                                <label for="inputName">Sekitar Toko</label> <br>
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('ATM', $checkbox1) ? 'checked' : ''}} value="ATM"> ATM</label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('100ATM', $checkbox1) ? 'checked' : ''}} value="100ATM"> < 100 M</label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('200ATM', $checkbox1) ? 'checked' : ''}} value="200ATM"> 100 - 500 M</label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('500ATM', $checkbox1) ? 'checked' : ''}} value="500ATM"> > 500 M</label>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('Bandara', $checkbox1) ? 'checked' : ''}} value="Bandara"> Bandara</label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('100Bandara', $checkbox1) ? 'checked' : ''}} value="100Bandara"> < 1 KM</label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('200Bandara', $checkbox1) ? 'checked' : ''}} value="200Bandara"> 1 - 5 KM</label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('500Bandara', $checkbox1) ? 'checked' : ''}} value="500Bandara"> > 10 KM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('Pelabuhan', $checkbox1) ? 'checked' : ''}} value="Pelabuhan"> Pelabuhan</label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('100Pelabuhan', $checkbox1) ? 'checked' : ''}} value="100Pelabuhan"> < 1 KM</label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('200Pelabuhan', $checkbox1) ? 'checked' : ''}} value="200Pelabuhan"> 1 - 5 KM</label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('500Pelabuhan', $checkbox1) ? 'checked' : ''}} value="500Pelabuhan"> > 10 KM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('Stasiun', $checkbox1) ? 'checked' : ''}} value="Stasiun"> Stasiun</label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('100Stasiun', $checkbox1) ? 'checked' : ''}} value="100Stasiun"> < 1 KM</label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('200Stasiun', $checkbox1) ? 'checked' : ''}} value="200Stasiun"> 1 - 5 KM</label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('500Stasiun', $checkbox1) ? 'checked' : ''}} value="500Stasiun"> > 10 KM</label>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class="row">
                                                                    <div class="col-6">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('Parkir Mobil dan Motor', $checkbox) ? 'checked' : ''}} value="Parkir Mobil dan Motor"> Parkir Mobil dan Motor</label> <br>
                                                                        <label><input type="text" name="sekitar_mitra[]" {{in_array('Pesan Antar', $checkbox) ? 'checked' : ''}} > </label> <br>
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('Makan di Tempat', $checkbox) ? 'checked' : ''}} value="Makan di Tempat"> Makan di Tempat</label> <br>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('Wifi Gratis', $checkbox) ? 'checked' : ''}} value="wifi"> Wifi Gratis</label> <br>
                                                                        <label><input type="checkbox" name="sekitar_mitra[]" {{in_array('Pembayaran Nontunai', $checkbox) ? 'checked' : ''}} value="Pembayaran Nontunai"> Pembayaran Nontunai</label>
                                                                    </div>
                                                                </div>          --}}
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
                                <div class="tab-pane fade" id="gambar-utama" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="container-fluid">
                                        <form action="{{ url('updateGambarUtama/'.$toko_mitra->idmitra) }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-primary">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Gambar Mitra</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-primary" data-card-widget="collapse"
                                                                    title="Collapse">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="mb-3">
                                                                <div class="d-flex justify-content-center">
                                                                    @if($toko_mitra->gambar_utama)
                                                                    <img src="{{ url('/data_file/'.$toko_mitra->gambar_utama) }}" alt="" class="img-preview img-fluid col-sm-6">
                                                                    @else
                                                                    <img src="" alt="" class="img-preview img-fluid col-sm-6">
                                                                    @endif
                                                                    <img src="" alt="">
                                                                </div> <br>
                                                                <label for="formFile" class="form-label">Pilih Gambar</label>
                                                                <input class="form-control" class="image" name="image" type="file" id="image" onchange="previewImage()">
                                                                @error('image')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                              </div>
                                                              <div class="form-group">
                                                                <button type="submit" class="btn btn-success">Update Gambar</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="gambar-1" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="container-fluid">
                                        <form action="{{ url('updateGambar1/'.$toko_mitra->idmitra) }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-primary">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Gambar Mitra</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-primary" data-card-widget="collapse"
                                                                    title="Collapse">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="mb-3">
                                                                <div class="d-flex justify-content-center">
                                                                    @if($toko_mitra->gambar_1)
                                                                    <img src="{{ url('/data_file/'.$toko_mitra->gambar_1) }}" alt="" class="img-preview img-fluid col-sm-6">
                                                                    @else
                                                                    <img src="" alt="" class="img-preview img-fluid col-sm-6">
                                                                    @endif
                                                                    <img src="" alt="">
                                                                </div> <br>
                                                                <label for="formFile" class="form-label">Pilih Gambar</label>
                                                                <input class="form-control" class="image" name="image" type="file" id="image" onchange="previewImage()">
                                                                @error('image')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                              </div>
                                                              <div class="form-group">
                                                                <button type="submit" class="btn btn-success">Update Gambar</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="gambar-2" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="container-fluid">
                                        <form action="{{ url('updateGambar2/'.$toko_mitra->idmitra) }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-primary">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Gambar Mitra 2</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-primary" data-card-widget="collapse"
                                                                    title="Collapse">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="mb-3">
                                                                <div class="d-flex justify-content-center">
                                                                    @if($toko_mitra->gambar_2)
                                                                    <img src="{{ url('/data_file/'.$toko_mitra->gambar_2) }}" alt="" class="img-preview img-fluid col-sm-6">
                                                                    @else
                                                                    <img src="" alt="" class="img-preview img-fluid col-sm-6">
                                                                    @endif
                                                                    <img src="" alt=""></div> <br>

                                                                <label for="formFile" class="form-label">Pilih Gambar</label>
                                                                <input class="form-control" name="image" type="file"  id="image2" onchange="previewImage2()">
                                                                @error('image')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                              </div>
                                                              <div class="form-group">
                                                                <button type="submit" class="btn btn-success">Update Gambar</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="gambar-3" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="container-fluid">
                                        <form action="{{ url('updateGambar3/'.$toko_mitra->idmitra) }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-primary">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Gambar Mitra 3</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-primary" data-card-widget="collapse"
                                                                    title="Collapse">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="mb-3">
                                                                <div class="d-flex justify-content-center">
                                                                    @if($toko_mitra->gambar_3)
                                                                    <img src="{{ url('/data_file/'.$toko_mitra->gambar_3) }}" alt="" class="img-preview img-fluid col-sm-6">
                                                                    @else
                                                                    <img src="" alt="" class="img-preview img-fluid col-sm-6">
                                                                    @endif
                                                                    <img src="" alt=""></div> <br>

                                                                <label for="formFile" class="form-label">Pilih Gambar</label>
                                                                <input class="form-control" name="image" type="file" id="image3" onchange="previewImage3()">
                                                                @error('image')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                              </div>
                                                              <div class="form-group">
                                                                <button type="submit" class="btn btn-success">Update Gambar</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="gambar-4" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="container-fluid">
                                        <form action="{{ url('updateGambar4/'.$toko_mitra->idmitra) }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-primary">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Gambar Mitra 4</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-primary" data-card-widget="collapse"
                                                                    title="Collapse">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="mb-3">
                                                                <div class="d-flex justify-content-center">
                                                                    @if($toko_mitra->gambar_4)
                                                                    <img src="{{ url('/data_file/'.$toko_mitra->gambar_4) }}" alt="" class="img-preview img-fluid col-sm-6">
                                                                    @else
                                                                    <img src="" alt="" class="img-preview img-fluid col-sm-6">
                                                                    @endif
                                                                    <img src="" alt=""></div> <br>

                                                                <label for="formFile" class="form-label">Pilih Gambar</label>
                                                                <input class="form-control" name="image" type="file" id="image4" onchange="previewImage4()">
                                                                @error('image')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                              </div>
                                                              <div class="form-group">
                                                                <button type="submit" class="btn btn-success">Update Gambar</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="gambar-5" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="container-fluid">
                                        <form action="{{ url('updateGambar5/'.$toko_mitra->idmitra) }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-primary">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Gambar Mitra 5</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-primary" data-card-widget="collapse"
                                                                    title="Collapse">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="mb-3">
                                                                <div class="d-flex justify-content-center">
                                                                    @if($toko_mitra->gambar_5)
                                                                    <img src="{{ url('/data_file/'.$toko_mitra->gambar_5) }}" alt="" class="img-preview img-fluid col-sm-6">
                                                                    @else
                                                                    <img src="" alt="" class="img-preview img-fluid col-sm-6">
                                                                    @endif
                                                                    <img src="" alt=""></div> <br>

                                                                <label for="formFile" class="form-label">Pilih Gambar</label>
                                                                <input class="form-control" name="image" type="file" id="image5" onchange="previewImage5()">
                                                                @error('image')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                              </div>
                                                              <div class="form-group">
                                                                <button type="submit" class="btn btn-success">Update Gambar</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>



    </section>
    <!-- /.content -->
    <script>
        function previewImage()
        {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
        function previewImage2()
        {
            const image = document.querySelector('#image2');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
        function previewImage3()
        {
            const image = document.querySelector('#image3');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
        function previewImage4()
        {
            const image = document.querySelector('#image4');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
        function previewImage5()
        {
            const image = document.querySelector('#image5');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
