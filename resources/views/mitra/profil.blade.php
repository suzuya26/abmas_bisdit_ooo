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
            <input type="text" id="inputName" class="form-control" value="Mitra Jaya" readonly>
          </div>
          <div class="form-group">
            <label for="inputName">Deskripsi</label>
            <input type="text" id="inputName" class="form-control" value="Toko oleh-oleh unggulan" readonly>
          </div>
          <div class="form-group">
            <label for="inputName">Alamat</label>
            <input type="text" id="inputName" class="form-control" value="Surabaya, Jawa Timur" readonly>
          </div>
          <div class="form-group">
            <label for="inputName">Instagram</label>
            <input type="text" id="inputName" class="form-control" value="@mitrajaya" readonly>
          </div>
          <div class="form-group">
            <label for="inputName">Kontak</label>
            <input type="text" id="inputName" class="form-control" value="08123456789" readonly>
          </div>


        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>

  </div>
  <div class="row ">
    <div class="col-12 mb-3">

      <a href="/updateprofil" class="btn btn-success float-right">Edit Profil</a>
    </div>
  </div>
  <!-- /.row -->
  <!-- Main row -->

@endsection
