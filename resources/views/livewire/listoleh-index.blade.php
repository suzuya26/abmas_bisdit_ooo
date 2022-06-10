@php
        use App\Models\listOleh;
        $count = 0;
        $listId;
        $listIdOleh;
    @endphp
    @foreach ($listoleh as $list)
        @if ($list->idoleh = $idoleh)
            @php
                $count++;
                $listId = $list->id;
                $listIdoleh = $list->idoleh;
            @endphp
        @endif
    @endforeach
    <div>
    @auth
        <div class="align-items-center">
            @if (listOleh::where(['idoleh' => $idoleh, 'id' => auth()->user()->id])->exists())
            <label><a wire:click="listoleh({{ $idoleh }})" class="button-oleh">Tambah ke List <i class="bi bi-bookmark-fill"></i></a></label>
            @else
            <label><a wire:click="listoleh({{ $idoleh }})"
                class="button-oleh">Tambah ke List <i class="bi bi-bookmark"></i></a></label>
            @endif
        </div>
    @endauth
    @guest
    <div class="align-items-center">
        <label><a href="/login" class=" button-oleh" style="">Tambah ke List <i class="bi bi-bookmark"></i></a></label>
    </div>
    @endguest
    <div class="align-items-center">
        <label  wire:click="listoleh({{ $idoleh }})"
            class="bi bi-bookmark-fill"><span style="color: red"> {{ $count }} </span>Orang</label>
    </div>
    </div>
