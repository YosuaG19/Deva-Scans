<div class="flex flex-col md:w-[120px] lg:w-[135px]">
    <a href="{{ route('series.detail', $comic) }}" class="flex w-full series-hover md:h-[160px] lg:h-[180px] bg-white overflow-hidden">
        @php
            $path = $comic->cover_path
        @endphp
        <x-series.cardCover :path='$path' />
        {{-- @include('components.series.cardCover') --}}
    </a>

    
    <div class="flex flex-col text-white">
        <h3 class="comic-title text-sm font-semibold"> {{ $comic->title}} </h3>
        
        @php
            $bookmarked = auth()->user()?->bookmarkedComics->contains($comic->id);
        @endphp
        @auth
            <form method="POST" action="{{route('series.bookmark', $comic)}}" class="w-full">
                @csrf
                <button type="submit" class="text-xs rounded bookmark-btn {{ $bookmarked ? 'active' : '' }}">
                    @if ($bookmarked)
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M200-120v-640q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v640L480-240 200-120Z"/></svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M200-120v-640q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v640L480-240 200-120Zm80-122 200-86 200 86v-518H280v518Zm0-518h400-400Z"/></svg> 
                    @endif
                    {{ $bookmarked ? 'Bookmarked' : __('series.bookmark') }}
                </button>
            </form>
            
        @endauth
    </div>
</div>