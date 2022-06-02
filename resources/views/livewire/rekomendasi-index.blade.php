@php
use App\Models\Rekomendasi;
$count = 0;
$rekomendasiId;
$rekomendasiIdToko;
@endphp
@foreach ($rekomendasi as $rekom)
@if ($rekomendasi->idtoko = $idtoko)
    @php
        $count++;
        $rekomendasiId = $rekom->id;
        $rekomendasiIdToko = $rekom->idtoko;
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
        @if (Rekomendasi::where(['idtoko' => $idtoko, 'id' => auth()->user()->id])->exists())
            {{-- <a wire:click="rekomendasi({{ $idtoko }})" class="btn btn-light btn-lg bi bi-heart-fill">
                {{ $count }}</a> --}}
                <a wire:click="rekomendasi({{ $idtoko }})" href="" class="button-toko bg-light" style="background:white">Rekomendasikan <i class="fas fa-thumbs-up" style="font-size: 1.3rem"></i></a>
        @else
            {{-- <a wire:click="rekomendasi({{ $idtoko }})" class="btn btn-light btn-lg bi bi-heart"></a> --}}
            <a style="width:200px;font-size:0.8rem" wire:click="rekomendasi({{ $idtoko }})" href="" class=" button-toko" style="">Rekomendasikan <i class="far fa-thumbs-up" style="font-size: 1.3rem"></i></a>
        @endif
        <p><i class="fas fa-thumbs-up" style="font-size: 1.3rem"> {{ $count }} orang</p>
    </div>
@endauth
@guest
    <div class="align-items-center">
        <a  href="/login" class=" button-toko fw-bold" style="color:#333">Rekomendasikan <i class="far fa-thumbs-up" style="font-size: 1.3rem"></i></a>
        <p><i class="fas fa-thumbs-up mt-3" style="font-size: 1.3rem"></i> {{ $count }}  orang</p>
    </div>
@endguest
</div>
