@extends('mitra.sidebar')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/profil/{{ Auth::user()->mitra_id }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Produk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        @foreach ($mitra_produk as $m)
        <form action="/produk/update" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
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
                            {{-- <input name="id_produk_mitra" type="hidden" value="{{ $mitra_produk->id_produk_mitra }}">
                            <input name="idoleh" type="hidden" value="1"> --}}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="formFileMultiple" class="form-label">Gambar Produk</label> <br>
                                    <img style="width: 400px;height:400px" src="{{ url('/data_file/'.$m->gambar_produkMitra) }}" alt="" class="img-preview" style="width: 400px;height:400px">
                                    <input class="form-control" name="file" type="file" id="image" onchange="previewImage()">
                                </div>
                                <input type="hidden" name="id_produk_mitra" value="{{ $m->id_produk_mitra }}">
                                <div class="form-group">
                                    <label for="inputName">Nama Produk</label>
                                    <input type="text" name="nama_produk" class="form-control" value="{{ $m->nama_produk_mitra }}">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Harga Produk</label>
                                    <input type="number" name="harga_produk" placeholder="Rp." class="form-control" value="{{ $m->harga_produk_mitra }}">
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Kemasan</label>
                                    <select id="inputStatus" name="kemasan_produk" class="form-control custom-select">
                                        <option selected disabled>Select one</option>
                                        <option {{ $m->kemasan_produk_mitra === 'S' ? 'selected' : '' }} value="S">Kecil</option>
                                        <option value="M" {{ $m->kemasan_produk_mitra === 'M' ? 'selected' : '' }} >Sedang</option>
                                        <option value="L" {{ $m->kemasan_produk_mitra === 'L' ? 'selected' : '' }} >Besar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 mb-3">
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Ubah Data" class="btn btn-success float-right">
                    </div>
                </div>
                <!-- /.row -->
                <!-- Main row -->
        </form>
        @endforeach
        <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
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
    </script>
    <!-- /.content -->
@endsection
