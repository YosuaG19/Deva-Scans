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
    <div class="grid grid-cols-3 gap-2 items-center">

        @php
            $bookmarked = auth()->user()?->bookmarkedComics->contains($comic->id);
        @endphp
        @auth
            <form method="POST" action="{{route('series.bookmark', $comic)}}" class="w-full">
                @csrf
                <button type="submit" class="btn-detail bookmark-btn rounded {{ $bookmarked ? 'active' : '' }}">
                    @if ($bookmarked)
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M200-120v-640q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v640L480-240 200-120Z"/></svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M200-120v-640q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v640L480-240 200-120Zm80-122 200-86 200 86v-518H280v518Zm0-518h400-400Z"/></svg> 
                    @endif
                    {{ $bookmarked ? 'Bookmarked' : __('series.bookmark') }}
                </button>
            </form>
            
        @endauth
        @guest
            <a href="{{route('auth.acc_sign_in')}}">Sign In to Bookmark</a>    
        @endguest

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