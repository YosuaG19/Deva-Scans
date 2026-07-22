<div class="w-full md:w-[330px] flex items-center flex-col gap-3 p-2">

    {{-- Cover --}}
    <div class="flex w-[210px] md:w-full">
        @php
            $path = $comic->cover_path
        @endphp
        <x-series.cardCover :path='$path' />
    </div>

    {{-- Rating --}}
    <button class="btn-rating">
        <span>★</span>
        <span>{{ __('series.rating') }}</span>
    </button>

    {{-- Information Box --}}
    <div class="series-desc">

        {{-- Top Stats --}}
        <div class="grid grid-cols-3 text-center">

            <div>
                {{-- <h3 class="font-bold text-lg">★ {{$comic->rating}}</h3> --}}
                <h3 class="font-bold text-lg">★ {{$comic->rating_avg}}</h3>
                <p class="flex items-center w-full justify-center gap-1 text-xs font-thin">Rating <span class="text-[.6rem] mt-[.5px] font-thin">({{$comic->rating_count}})</span></p>
            </div>

            <div class="border-x border-[#FFD700]">
                {{-- <h3 class="font-bold text-lg">{{$comic->chapters}}</h3> --}}
                <h3 class="font-bold text-lg">{{$comic->chapter_count}}</h3>
                <p class="text-xs font-thin">{{ __('series.chapters') }}</p>
            </div>

            <div>
                {{-- <h3 class="font-bold text-lg">{{$comic->bookmark}}</h3> --}}
                <h3 class="font-bold text-lg">{{$comic->bookmarks_count}}</h3>
                <p class="text-xs font-thin">{{ __('series.bookmarks') }}</p>
            </div>

        </div>

        {{-- Divider --}}
        <div class="border-t border-[#FFD700]"></div>

        {{-- Status & Type --}}
        <div class="grid grid-cols-2 text-center">

            <div>
                <p class="text-xs font-thin">{{ __('series.status') }}</p>
                <h3 class="font-bold text-lg">• {{$comic->status->name}}</h3>
            </div>

            <div>
                <p class="text-xs font-thin">{{ __('series.type') }}</p>
                <h3 class="font-bold text-lg">• {{$comic->type->name}}</h3>
            </div>

        </div>

        {{-- Divider --}}
        <div class="border-t border-[#FFD700]"></div>

        {{-- Author --}}
        <div class="flex items-center justify-between">

            <div class="flex items-center gap-4 justify-between w-[45%]">
                <p class="text-xs font-thin">{{ __('series.author') }}</p>
                <h3 class="text-[.6rem] font-bold">{{Str::words($comic->author, 1, '')}}</h3>
            </div>
            <span class="w-[.5px] h-[20px] bg-[#FFD700]"></span>
            <div class="flex items-center justify-between w-[45%]">
                <p class="text-xs font-thin">{{ __('series.artist') }}</p>
                <h3 class="text-[.6rem] font-bold">{{Str::words($comic->artist, 1, '')}}</h3>
            </div>

        </div>

    </div>

    {{-- Genres --}}
    <div class="flex flex-wrap gap-2 w-full">

        @foreach ($comic->genres as $genre)

            <button class="btn-genre">
                {{ $genre->name }}
            </button>

        @endforeach

    </div>

</div>