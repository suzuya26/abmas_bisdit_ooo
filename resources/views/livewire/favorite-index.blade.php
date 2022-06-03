    @php
        use App\Models\favorite;
        $count = 0;
        $favoriteId;
        $favoriteIdOleh;
    @endphp
    @foreach ($favorites as $favorite)
        @if ($favorite->idoleh = $idoleh)
            @php
                $count++;
                $favoriteId = $favorite->id;
                $favoriteIdOleh = $favorite->idoleh;
            @endphp
        @endif
    @endforeach
    <div>
        @auth
            <div class="align-items-center">
                @if (favorite::where(['idoleh' => $idoleh, 'id' => auth()->user()->id])->exists())
                <label style="font-size : 36px"><a wire:click="favorite({{ $idoleh }})" class="" style="text-decoration:none"><i class="bi bi-heart-fill" style="color: red"></i>
                        {{ $count }}</a></label>
                @else
                <label style="font-size : 36px"><a wire:click="favorite({{ $idoleh }})" class="" style="text-decoration:none"><i class="bi bi-heart" style="color: red"></i>
                        {{ $count }}</a></label>
                @endif
            </div>
        @endauth
        @guest
            <div class="align-items-center">
                <a type="button" class="btn btn-light btn-lg bi bi-heart" href="/login"> {{ $count }}</a>
            </div>
        @endguest
    </div>
