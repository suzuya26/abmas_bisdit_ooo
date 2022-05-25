@extends('mitra.sidebar')
@section('container')
<div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Informasi Mitra</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="card-body">
          <div class="form-group">
            <label for="formFileMultiple" class="form-label">Nama Toko</label>
            <input type="text" id="inputName" class="form-control" value="{{ $toko_mitra->nama_mitra}}" readonly>
          </div>
          <div class="form-group">
            <label for="inputName">Alamat</label>
            <input type="text" id="inputName" class="form-control" value="{{ $toko_mitra->alamat_mitra}}" readonly>
          </div>
          <div class="form-group">
            <label for="inputName">Jam Operasional</label>
            <input type="text" id="inputName" class="form-control" value="{{ $toko_mitra->jam_operasional}}" readonly>
          </div>
          
          <div class="form-group">
            <label for="inputName">Fasilitas Toko</label>
            <input type="text" id="inputName" class="form-control" value="{{ $toko_mitra->fasilitas_mitra}}" readonly>
          </div>
          <div class="form-group">
            <label for="inputName">Instagram</label>
            <input type="text" id="inputName" class="form-control" value={{ $toko_mitra->sosmed_mitra}} readonly>
          </div>
          <div class="form-group">
            <label for="inputName">Kontak</label>
            <input type="text" id="inputName" class="form-control" value={{ $toko_mitra->kontak_mitra}} readonly>
          </div>
          <div class="form-group">
            <label for="inputName">Website</label>
            <input type="text" id="inputName" class="form-control" value={{ $toko_mitra->website_mitra}} readonly>
          </div>


        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>

  </div>
  <div class="row ">
    <div class="col-12 mb-3">
      <a href="{{ url('edit/'.$toko_mitra->idmitra) }}" class="btn btn-success float-right">Edit Profil</a>
    </div>
  </div>
  <!-- /.row -->
  <!-- Main row -->

@endsection
