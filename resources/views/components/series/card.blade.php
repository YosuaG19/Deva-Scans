<div class="flex flex-col md:w-[120px] lg:w-[135px]">
    <a href="{{ route('series.detail', $comic) }}" class="flex w-full series-hover md:h-[160px] lg:h-[180px] bg-white overflow-hidden">
        @php
            $path = $comic->cover_path
        @endphp
        <x-series.cardCover :path='$path' />
    </a>

    
    <div class="flex flex-col text-white">
        <h3 class="comic-title text-sm font-semibold"> {{ $comic->title}} </h3>
        
        @php
            $newest = $comic->chapters->max('numbering');
            if (!Auth::user() || !Auth::user()->subscriptions) {
                $subs = false;
            }else {
                $subs = true;
            }
        @endphp

        @if (!$subs)
            @if (!Auth::user())
                <a href="{{ route('auth.acc_sign_in')}}" class="group flex items-center justify-center gap-1 w-full text-center text-xs py-1 px-2 rounded bg-[#252525] text-white hover:bg-[#FFD700] hover:text-[#252525] hover:font-semibold">
                    {{ __('series.chapter') }} {{$comic->chapters->max('numbering')}} 
                    <svg class="group-hover:fill-black" xmlns="http://www.w3.org/2000/svg" height="10px" viewBox="0 -960 960 960" width="10px" fill="#fff"><path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm296.5-223.5Q560-327 560-360t-23.5-56.5Q513-440 480-440t-56.5 23.5Q400-393 400-360t23.5 56.5Q447-280 480-280t56.5-23.5ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80Z"/></svg>
                </a>
            @else
                <a href="{{ route('subscriptions.view')}}" class="group flex items-center justify-center gap-1 w-full text-center text-xs py-1 px-2 rounded bg-[#252525] text-white hover:bg-[#FFD700] hover:text-[#252525] hover:font-semibold">
                    {{ __('series.chapter') }} {{$comic->chapters->max('numbering')}} 
                    <svg class="group-hover:fill-black" xmlns="http://www.w3.org/2000/svg" height="10px" viewBox="0 -960 960 960" width="10px" fill="#fff"><path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm296.5-223.5Q560-327 560-360t-23.5-56.5Q513-440 480-440t-56.5 23.5Q400-393 400-360t23.5 56.5Q447-280 480-280t56.5-23.5ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80Z"/></svg>
                </a>
            @endif
        @else
            <a href="{{ route('series.chapter', ['comic'=>$comic, 'chapter'=>$newest])}}" class="group flex items-center justify-center gap-1 w-full text-center text-xs py-1 px-2 rounded bg-[#252525] text-white hover:bg-[#FFD700] hover:text-[#252525] hover:font-semibold">
                {{ __('series.chapter') }} {{$comic->chapters->max('numbering')}} 
            </a>
        @endif
    </div>
</div>