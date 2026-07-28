<div class="flex gap-2 w-full">
    <a  href="{{ route('series.detail', $comic) }}" class="flex relative w-fit series-hover h-[172px] md:h-[180px] aspect-[3/4] bg-white overflow-hidden">
        @php
            $path = $comic->cover_path
        @endphp
        <x-series.cardCover :path='$path' />
        <span class="absolute top-1 right-1 text-xs font-thin text-white p-1 bg-[#252525] rounded">
            <span class="text-yellow-400">★</span> {{$comic->rating_avg}}
        </span>

        <span class="absolute top-1 left-1 text-xs font-thin text-white p-1 bg-[#252525] rounded">
            {{ $comic->type->name }}
        </span>
    </a>

    @php
        $newest = $comic->chapters->max('numbering')
    @endphp
    
    <div class="flex flex-col justify-between text-white w-full max-w-[150px]">
        <span class="flex flex-col gap-1">
            <h3 class="comic-title text-sm font-semibold">{{ $comic->title }}</h3>
            @php
                if (!Auth::user() || !Auth::user()->subscriptions) {
                    $subs = false;
                }else {
                    $subs = true;
                }
            @endphp

            @for ($i = 0; $i < 3; $i++)
                @if ($i === 0 && !$subs)
                    @if (!Auth::user())
                        <a href="{{ route('auth.acc_sign_in')}}" class="flex items-center justify-between text-xs font-thin py-1 px-2 rounded hover:bg-[#252525] text-white">
                            {{ __('browse.chapters') }} {{$newest-$i}}
                            <svg xmlns="http://www.w3.org/2000/svg" height="12px" viewBox="0 -960 960 960" width="12px" fill="#FFD700"><path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm296.5-223.5Q560-327 560-360t-23.5-56.5Q513-440 480-440t-56.5 23.5Q400-393 400-360t23.5 56.5Q447-280 480-280t56.5-23.5ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80Z"/></svg>
                        </a>
                    @else
                        <a href="{{ route('subscriptions.view')}}" class="flex items-center justify-between text-xs font-thin py-1 px-2 rounded hover:bg-[#252525] text-white">
                            {{ __('browse.chapters') }} {{$newest-$i}}
                            <svg xmlns="http://www.w3.org/2000/svg" height="12px" viewBox="0 -960 960 960" width="12px" fill="#FFD700"><path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm296.5-223.5Q560-327 560-360t-23.5-56.5Q513-440 480-440t-56.5 23.5Q400-393 400-360t23.5 56.5Q447-280 480-280t56.5-23.5ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80Z"/></svg>
                        </a>
                    @endif
                @else
                    <a href="{{ route('series.chapter', ['comic'=>$comic, 'chapter'=>$newest-$i]) }}" class="flex items-center text-xs font-thin py-1 px-2 rounded hover:bg-[#252525] text-white">{{ __('browse.chapters') }} {{$newest-$i}}</a>    
                @endif
            @endfor
        </span>
        
        @php
            $bookmarked = auth()->user()?->bookmarkedComics->contains($comic->id);
        @endphp

        @auth
            <form method="Post" action="{{route('browse.bookmark', $comic)}}" class="w-full" >
                @csrf
                <button type="submit" class="bookmark-btn text-xs rounded {{ $bookmarked ? 'active' : '' }}">
                    @if ($bookmarked)
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M200-120v-640q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v640L480-240 200-120Z"/></svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M200-120v-640q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v640L480-240 200-120Zm80-122 200-86 200 86v-518H280v518Zm0-518h400-400Z"/></svg> 
                    @endif
                    {{ $bookmarked ? 'Bookmarked' : __('browse.bookmark') }}
                </button>
            </form>
        @endauth
            
        @guest
            <a href="{{route('auth.acc_sign_in')}}" class="flex items-center gap-1 justify-center text-xs font-bold uppercase text-black p-1 bg-[#FFD700] rounded border-2 border-[#FFD700] hover:text-[#FFD700] hover:bg-transparent group">
                <svg class="group-hover:fill-[#FFD700]" xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M200-120v-640q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v640L480-240 200-120Zm80-122 200-86 200 86v-518H280v518Zm0-518h400-400Z"/></svg> 
                <p class="min-h-[20px] flex items-center">{{ __('browse.bookmark') }}</p>
            </a>
        @endguest
    </div>
</div>
