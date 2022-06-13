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
            <input type="text" id="inputName" class="form-control" value="{{ $toko_mitra->jam_buka}} - {{ $toko_mitra->jam_tutup}}" readonly>
          </div>

          <div class="form-group">
            <label for="inputName">Fasilitas Toko</label> <br>
            <div class="row">
                <div class="col-6">
                    <label><input disabled type="checkbox" name="fasilitas_mitra[]" {{in_array('Parkir Mobil dan Motor', $checkbox) ? 'checked' : ''}} value="Parkir Mobil dan Motor"> Parkir Mobil dan Motor</label> <br>
                    <label><input disabled type="checkbox" name="fasilitas_mitra[]" {{in_array('Pesan Antar', $checkbox) ? 'checked' : ''}} value="Pesan Antar"> Pesan Antar</label> <br>
                    <label><input disabled type="checkbox" name="fasilitas_mitra[]" {{in_array('Makan di Tempat', $checkbox) ? 'checked' : ''}} value="Makan di Tempat"> Makan di Tempat</label> <br>
                </div>
                <div class="col-6">
                    <label><input disabled type="checkbox" name="fasilitas_mitra[]" {{in_array('Wifi Gratis', $checkbox) ? 'checked' : ''}} value="wifi"> Wifi Gratis</label> <br>
                    <label><input disabled type="checkbox" name="fasilitas_mitra[]" {{in_array('Pembayaran Nontunai', $checkbox) ? 'checked' : ''}} value="Pembayaran Nontunai"> Pembayaran Nontunai</label>
                </div>
            </div>
        </div>
        <div class="form-group">
          <label for="inputName">Sekitar Toko</label> <br>
          <div class="row">
              <div class="col-3">
                  <label><input disabled type="checkbox" name="sekitar_mitra[]" {{in_array('ATM', $checkbox1) ? 'checked' : ''}} value="ATM"> ATM</label>
              </div>
              <div class="col-3">
                  <label><input disabled type="checkbox" name="sekitar_mitra[]" {{in_array('100ATM', $checkbox1) ? 'checked' : ''}} value="100ATM"> < 100 M</label>
              </div>
              <div class="col-3">
                  <label><input disabled type="checkbox" name="sekitar_mitra[]" {{in_array('200ATM', $checkbox1) ? 'checked' : ''}} value="200ATM"> 100 - 500 M</label>
              </div>
              <div class="col-3">
                  <label><input disabled type="checkbox" name="sekitar_mitra[]" {{in_array('500ATM', $checkbox1) ? 'checked' : ''}} value="500ATM"> > 500 M</label>
              </div>
          </div>
          <div class="row">
              <div class="col-3">
                  <label><input disabled type="checkbox" name="sekitar_mitra[]" {{in_array('Bandara', $checkbox1) ? 'checked' : ''}} value="Bandara"> Bandara</label>
              </div>
              <div class="col-3">
                  <label><input disabled type="checkbox" name="sekitar_mitra[]" {{in_array('100Bandara', $checkbox1) ? 'checked' : ''}} value="100Bandara"> < 1 KM</label>
              </div>
              <div class="col-3">
                  <label><input disabled type="checkbox" name="sekitar_mitra[]" {{in_array('200Bandara', $checkbox1) ? 'checked' : ''}} value="200Bandara"> 1 - 5 KM</label>
              </div>
              <div class="col-3">
                  <label><input disabled type="checkbox" name="sekitar_mitra[]" {{in_array('500Bandara', $checkbox1) ? 'checked' : ''}} value="500Bandara"> > 10 KM</label>
              </div>
          </div>
          <div class="row">
              <div class="col-3">
                  <label><input disabled type="checkbox" name="sekitar_mitra[]" {{in_array('Pelabuhan', $checkbox1) ? 'checked' : ''}} value="Pelabuhan"> Pelabuhan</label>
              </div>
              <div class="col-3">
                  <label><input disabled type="checkbox" name="sekitar_mitra[]" {{in_array('100Pelabuhan', $checkbox1) ? 'checked' : ''}} value="100Pelabuhan"> < 1 KM</label>
              </div>
              <div class="col-3">
                  <label><input disabled type="checkbox" name="sekitar_mitra[]" {{in_array('200Pelabuhan', $checkbox1) ? 'checked' : ''}} value="200Pelabuhan"> 1 - 5 KM</label>
              </div>
              <div class="col-3">
                  <label><input disabled type="checkbox" name="sekitar_mitra[]" {{in_array('500Pelabuhan', $checkbox1) ? 'checked' : ''}} value="500Pelabuhan"> > 10 KM</label>
              </div>
          </div>
          <div class="row">
              <div class="col-3">
                  <label><input disabled type="checkbox" name="sekitar_mitra[]" {{in_array('Stasiun', $checkbox1) ? 'checked' : ''}} value="Stasiun"> Stasiun</label>
              </div>
              <div class="col-3">
                  <label><input disabled type="checkbox" name="sekitar_mitra[]" {{in_array('100Stasiun', $checkbox1) ? 'checked' : ''}} value="100Stasiun"> < 1 KM</label>
              </div>
              <div class="col-3">
                  <label><input disabled type="checkbox" name="sekitar_mitra[]" {{in_array('200Stasiun', $checkbox1) ? 'checked' : ''}} value="200Stasiun"> 1 - 5 KM</label>
              </div>
              <div class="col-3">
                  <label><input disabled type="checkbox" name="sekitar_mitra[]" {{in_array('500Stasiun', $checkbox1) ? 'checked' : ''}} value="500Stasiun"> > 10 KM</label>
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
