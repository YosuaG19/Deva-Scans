<div class="w-full md:w-[330px] flex items-center flex-col gap-3 p-2">

    {{-- Cover --}}
    <div class="flex w-[180px] md:w-full">
        @include('components.series.cardCover')
    </div>

    {{-- Rating --}}
    <button class="btn-rating">
        <span>★</span>
        <span>Rating</span>
    </button>

    {{-- Information Box --}}
    <div class="series-desc">

        {{-- Top Stats --}}
        <div class="grid grid-cols-3 text-center">

            <div>
                <h3 class="font-bold text-lg">★ {{$rating}}</h3>
                <p class="text-xs font-thin">Rating</p>
            </div>

            <div class="border-x border-[#FFD700]">
                <h3 class="font-bold text-lg">{{$chapters}}</h3>
                <p class="text-xs font-thin">Chapters</p>
            </div>

            <div>
                <h3 class="font-bold text-lg">{{$bookmark}}</h3>
                <p class="text-xs font-thin">Bookmarks</p>
            </div>

        </div>

        {{-- Divider --}}
        <div class="border-t border-[#FFD700]"></div>

        {{-- Status & Type --}}
        <div class="grid grid-cols-2 text-center">

            <div>
                <p class="text-xs font-thin">Status</p>
                <h3 class="font-bold text-lg">• {{$status}}</h3>
            </div>

            <div>
                <p class="text-xs font-thin">Type</p>
                <h3 class="font-bold text-lg">• {{$type}}</h3>
            </div>

        </div>

        {{-- Divider --}}
        <div class="border-t border-[#FFD700]"></div>

        {{-- Author --}}
        <div class="flex items-center justify-between">

            <div class="flex items-center gap-4 justify-between w-[40%]">
                <p class="text-xs font-thin">Author</p>
                <h3 class="text-xs font-bold">-</h3>
            </div>
            <span class="w-[.5px] h-[20px] bg-[#FFD700]"></span>
            <div class="flex items-center justify-between w-[40%]">
                <p class="text-xs font-thin">Artist</p>
                <h3 class="text-xs font-bold">{{$artist}}</h3>
            </div>

        </div>

    </div>

    {{-- Genres --}}
    <div class="flex flex-wrap gap-2 w-full">

        @foreach ($genres as $genre)

            <button class="btn-genre">
                {{ $genre }}
            </button>

        @endforeach

    </div>

</div>