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
    <div class="align-items-center">
        @if (Rekomendasioleh::where(['idoleh' => $idoleh, 'id' => auth()->user()->id])->exists())
            {{-- <a wire:click="rekomendasi({{ $idoleh }})" class="btn btn-light btn-lg bi bi-heart-fill">
                {{ $count }}</a> --}}
                <a wire:click="rekomendasioleh({{ $idoleh }})" href="" class=" button-oleh" style="">Rekomendasikan</a>
        @else
            {{-- <a wire:click="rekomendasi({{ $idoleh }})" class="btn btn-light btn-lg bi bi-heart"></a> --}}
            <a style="width:200px;font-size:0.8rem" wire:click="rekomendasioleh({{ $idoleh }})" href="" class=" button-oleh" style="">Telah Direkomendasikan</a>
        @endif
    </div>
@endauth
@guest
    <div class="align-items-center">
        <a  href="/login" class=" button-oleh" style="">Rekomendasikan</a>
    </div>
@endguest
</div>
