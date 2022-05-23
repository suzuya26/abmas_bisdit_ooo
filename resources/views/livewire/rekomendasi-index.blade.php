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
            <a wire:click="rekomendasi({{ $idtoko }})" class="btn btn-light btn-lg bi bi-heart-fill">
                {{ $count }}</a>
        @else
            <a wire:click="rekomendasi({{ $idtoko }})" class="btn btn-light btn-lg bi bi-heart">
                {{ $count }}</a>
        @endif
    </div>
@endauth
@guest
    <div class="align-items-center">
        <a type="button" class="btn btn-light btn-lg bi bi-heart" href="/login"> {{ $count }}</a>
    </div>
@endguest
</div>
