<div class="flex md:min-w-[50vw] md:max-w-[50vw] flex-col gap-3 p-2">

    {{-- Description Box --}}
    <div class="series-cont text-white">

        <h1 class="text-2xl md:text-3xl font-semibold">
            {{$comic->title}}
        </h1>

        <p class="mt-2 text-xs leading-5 w-full">
            {{Str::limit($comic->desc, 300, "... read more")}}
        </p>

    </div>

    {{-- Buttons --}}
    <div class="grid grid-cols-3 gap-2">

        <button class="btn-detail">
            {{ __('series.bookmark') }}
        </button>

        <a href="{{ route('series.chapter', ['comic'=>$comic, 'chapter'=> $fc->numbering])}}" class="btn-detail">
            {{ __('series.first_chapter') }}
        </a>

        <a href="{{ route('series.chapter', ['comic'=>$comic, 'chapter'=> $lc->numbering])}}" class="btn-detail">
            {{ __('series.last_chapter') }}
        </a>

    </div>

    {{-- Chapter List --}}
    <div class="series-cont gap-2">

        <div class="flex justify-between text-white font-semibold">
            <span> {{$comic->chapter_count}} {{ __('series.chapters') }}</span>
            <span>{{ __('series.newest') }}</span>
        </div>

        <div class="bg-gray-200 h-[2px] rounded"></div>

        <div class="flex flex-col gap-1.5 max-h-[300px] md:max-h-[400px] lg:max-h-[500px] overflow-y-auto pr-1">

            @foreach ($comic->chapters as $chapter)
                <a href="{{ route('series.chapter', ['comic'=>$comic, 'chapter'=>$chapter->numbering]) }}" class="btn-chapter">
                    <div class="flex gap-2 items-center">
                        <h3 class="font-semibold text-sm">{{ __('series.chapter') }} {{ sprintf('%02d', $chapter->numbering) }}</h3>
                        
                        @if (!empty($chapter->title))
                            <p class="text-xs font-thin">|</p>
                            <p class="chapter-title text-xs font-thin">{{$chapter->title}}</p>
                        @endif
                    </div>

                    <p class="text-xs font-thin">
                        {{ $chapter->created_at->diffForHumans() }}
                    </p>
                </a>
            @endforeach
        </div>

    </div>

</div>