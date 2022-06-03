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
            <a  href="/login" class=" button-toko fw-bold" style="color:#333">Tambah ke list <i class="far fa-thumbs-up" style="font-size: 1.3rem"></i></a>
            <p class="mt-3"><i class="fas fa-thumbs-up mt-3" style="font-size: 1.3rem"></i> {{ $count }}  orang</p>
        </div>
    @endguest
    </div>
