@php
use App\Models\Rekomendasioleh;
$count = 0;
$rekomendasiId;
$rekomendasiIdoleh;
@endphp
@foreach ($rekomendasioleh as $rekom)
    @if ($rekomendasioleh->idoleh = $idoleh)
        @php
            $count++;
            $rekomendasiId = $rekom->id;
            $rekomendasiIdoleh = $rekom->idoleh;
        @endphp
    @endif
@endforeach
<div>
    @auth
        <div class="align-items-center" style="overflow-wrap: anywhere">
            @if (Rekomendasioleh::where(['idoleh' => $idoleh, 'id' => auth()->user()->id])->exists())
                <label><a wire:click="rekomendasioleh({{ $idoleh }})" class="button-oleh">Rekomendasikan <i class="bi bi-hand-thumbs-up-fill"></i></a></label>
            @else
                <label><a wire:click="rekomendasioleh({{ $idoleh }})"
                        class="button-oleh">Rekomendasikan <i class="bi bi-hand-thumbs-up"></i></a></label>
            @endif
        </div>

    @endauth
    @guest
        <div class="align-items-center" style="overflow-wrap: anywhere">
            <label><a  data-toggle="modal" data-target="#exampleModal" class=" button-oleh" style="">Rekomendasikan <i class="bi bi-hand-thumbs-up"></i></a></a></label>
        </div>
    @endguest
    <div class="align-items-center">
        <label  wire:click="rekomendasioleh({{ $idoleh }})"
            class="bi bi-hand-thumbs-up-fill"><span style="color: red"> {{ $count }} </span>Orang</label>
    </div>
</div>
<style>
    .login{
        border: 1px solid #2F2F2F;
filter: drop-shadow(0px 4.71429px 4.71429px rgba(0, 0, 0, 0.25));
border-radius: 30px;
    }
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left:-80px;">
    <div class="modal-dialog d-flex justify-content-center" role="document" style="margin-left:600px;margin-top:150px">
      <div class="modal-content" style="width: 500px;border-radius:20px;background:#E5E5E5;height:425px">
        <div class="modal-header">
          <div class="d-flex justify-content-center">
            <h5 class="modal-title text-center" id="exampleModalLabel" style="">Ups, Anda belum masuk</h5>
          </div>

        </div>
        <div class="modal-body">
          <div class="d-flex justify-content-center mb-4">
              <a href="/login" class="btn btn-light text-dark login" style="bor">Login</a>

          </div>
          <p class="text-center mx-4">Atau</p>
          <div class="d-flex justify-content-center">
            <a href="/register" class="btn btn-light text-dark mb-4 login">Register</a>
        </div>
        <p class="text-center" style="font-size: 1.2rem">untuk beri rekomendasi dan simpan Wishlist oleh-olehmu!</p>
        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
          <button type="button" class="btn btn-dark text-light fw-bold" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
