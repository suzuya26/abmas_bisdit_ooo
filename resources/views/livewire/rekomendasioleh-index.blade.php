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
                <label><a wire:click="rekomendasioleh({{ $idoleh }})" class="button-oleh">Rekomendasikan <i class="bi bi-hand-thumbs-up-fill"></i></a></label>
            @else
                {{-- <a wire:click="rekomendasi({{ $idoleh }})" class="btn btn-light btn-lg bi bi-heart"></a> --}}
                <label><a wire:click="rekomendasioleh({{ $idoleh }})"
                        class="button-oleh">Rekomendasikan <i class="bi bi-hand-thumbs-up"></i></a></label>
            @endif
        </div>
        <div class="align-items-center">
            <label  wire:click="rekomendasioleh({{ $idoleh }})"
                class="bi bi-hand-thumbs-up-fill"><span style="color: red"> {{ $count }} </span>Orang</label>
        </div>
    @endauth
    @guest
        <div class="align-items-center">
            <label><a href="/login" class=" button-oleh" style="">Rekomendasikan</a></label>
        </div>
    @endguest
</div>

