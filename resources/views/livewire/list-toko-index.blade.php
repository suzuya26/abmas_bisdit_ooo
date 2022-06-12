@php
        use App\Models\listToko;
        $count = 0;
        $listId;
        $listIdToko;
    @endphp
    @foreach ($lists as $list)
        @if ($list->idtoko = $idtoko)
            @php
                $count++;
                $listId = $list->idtoko;
                $listIdToko = $list->idtoko;
            @endphp
        @endif
    @endforeach
    <div>
        <style>
            .button-toko{
                background: white;
                color: black;
                border-radius: 1px solid black;
            }
        </style>
    @auth
        <div class="align-items-center">
            @if (listToko::where(['idtoko' => $idtoko, 'id' => auth()->user()->id])->exists())
                {{-- <a wire:click="rekomendasi({{ $idtoko }})" class="btn btn-light btn-lg bi bi-heart-fill">
                    {{ $count }}</a> --}}
                    <a wire:click="listToko({{ $idtoko }})" href="" class="button-toko bg-light" style="background:white">Tambah ke list
                        <i class="fas fa-bookmark " style="font-size: 1.3rem"></i>
                    </a>
            @else
                {{-- <a wire:click="rekomendasi({{ $idtoko }})" class="btn btn-light btn-lg bi bi-heart"></a> --}}
                <a wire:click="listToko({{ $idtoko }})" href="" class="button-toko bg-light" style="background:white">Tambah ke list
                    <i class="far fa-bookmark " style="font-size: 1.3rem"></i>
                </a>
                {{-- <a  wire:click="listToko({{ $idtoko }})" href="" class=" button-toko" style="">Tambah ke list
                    <i class="far fa-bookmark mt-3" style="font-size: 1.3rem"></i>
                </a> --}}
            @endif
            <p>
                <i class="fas fa-thumbs-up mt-3" style="font-size: 1.3rem"></i> {{ $count }}
                    orang</p>
        </div>
    @endauth
    @guest
        <div class="align-items-center">
            <a data-toggle="modal" data-target="#exampleModal"  href="/login" class=" button-toko fw-bold" style="color:#333">Tambah ke list <i class="far fa-thumbs-up" style="font-size: 1.3rem"></i></a>
            <p class="mt-3"><i class="fas fa-thumbs-up mt-3" style="font-size: 1.3rem"></i> {{ $count }}  orang</p>
        </div>
    @endguest
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left:-80px;">
        <div class="modal-dialog d-flex justify-content-center" role="document" style="margin-left:700px;margin-top:200px">
          <div class="modal-content" style="width: 500px;border-radius:20px;background:#E5E5E5;height:425px">
            <div class="modal-header">
              <div class="d-flex justify-content-center">
                <h5 class="modal-title text-center" id="exampleModalLabel" style="">Ups, Anda belum masuk</h5>
              </div>

            </div>
            <div class="modal-body">
              <div class="d-flex justify-content-center mb-4">
                  <a href="/login" class="btn btn-light text-dark">Login</a>

              </div>
              <p class="text-center mx-4">Atau</p>
              <div class="d-flex justify-content-center">
                <a href="/register" class="btn btn-light text-dark mb-4">Register</a>
            </div>
            <p class="text-center" style="font-size: 1.2rem">untuk beri rekomendasi dan simpan Wishlist oleh-olehmu!</p>
            </div>
            <div class="modal-footer">
              {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
