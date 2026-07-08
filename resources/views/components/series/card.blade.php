<div class="flex flex-col md:w-[135px]">
    <a href="{{ route('series.detail') }}" class="flex w-full series-hover md:h-[180px] bg-white overflow-hidden">
        @include('components.series.cardCover')
    </a>

    
    <div class="flex flex-col text-white">
        <h3 class="comic-title text-sm font-semibold">On The Way To Meet Mom</h3>
        
        <a href="{{ route('series.chapter', 1) }}" class="w-full text-center text-xs py-1 px-2 rounded bg-[#252525] text-white hover:bg-[#FFD700] hover:text-[#252525] hover:font-semibold">Newest Chapter</a>
    </div>
</div>