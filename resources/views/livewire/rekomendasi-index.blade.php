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
@auth
    <div class="align-items-center">
        @if (Rekomendasi::where(['idtoko' => $idtoko, 'id' => auth()->user()->id])->exists())
            {{-- <a wire:click="rekomendasi({{ $idtoko }})" class="btn btn-light btn-lg bi bi-heart-fill">
                {{ $count }}</a> --}}
                <a wire:click="rekomendasi({{ $idtoko }})" href="" class=" button-toko" style="">Rekomendasikan</a>
        @else
            {{-- <a wire:click="rekomendasi({{ $idtoko }})" class="btn btn-light btn-lg bi bi-heart"></a> --}}
            <a style="width:200px;font-size:0.8rem" wire:click="rekomendasi({{ $idtoko }})" href="" class=" button-toko" style="">Telah Direkomendasikan</a>
        @endif
    </div>
@endauth
@guest
    <div class="align-items-center">
        <a  href="/login" class=" button-toko" style="">Rekomendasikan</a>
    </div>
@endguest
</div>
