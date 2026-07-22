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
            $newest = $comic->chapters->max('numbering')
        @endphp

        <a href="{{ route('series.chapter', ['comic'=>$comic, 'chapter'=>$newest])}}" class="w-full text-center text-xs py-1 px-2 rounded bg-[#252525] text-white hover:bg-[#FFD700] hover:text-[#252525] hover:font-semibold">{{ __('series.chapter') }} {{$comic->chapters->max('numbering')}} </a>
    </div>
</div>