
<a href="{{ route('series.detail', $comic) }}" class="flex gap-2 series-hover p-2 rounded-lg hover:bg-[#252525] ease transition duration-200">
    <div class="flex aspect-3/4 min-w-[75px] max-w-[75px] bg-white overflow-hidden">
        @php
            $path = $comic->cover_path
        @endphp
        <x-series.cardCover :path='$path' />
    </div>

    

    <div class="flex flex-col justify-between py-.5 text-white w-full md:max-w-[175px] lg:max-w-[200px]">
        <span>
            <h3 class="comic-title-vert text-sm font-semibold">{{ $comic->title }}</h3>
            <div class="text-xs font-thin flex flex-wrap gap-x-[5px]">
                <span class="text-[#FFD70090]">{{ __('series.genre') }} : </span>
                
                @foreach ($comic->genres as $genre)
                    <span>
                        {{ $genre->name }}@if(!$loop->last), @endif
                    </span>
                @endforeach
            </div>
        </span>

        <div class="flex w-full items-center justify-between">
            <span class="text-xs font-thin">
                {{$comic->last_chapter_at->format('d M, Y')}}
            </span>

            <span class="text-xs font-thin text-[#FFD70090]">
                {{ $comic->last_chapter_at->diffForHumans() }}
            </span>
        </div>
    </div>
</a>