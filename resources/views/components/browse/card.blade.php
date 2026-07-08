<div class="flex gap-2 w-fit">
    <a  href="{{ route('series.detail') }}" class="flex relative w-full series-hover h-[172px] md:h-[180px] aspect-[3/4] bg-white overflow-hidden">
        @include('components.series.cardCover')
        <span class="absolute top-1 right-1 text-xs font-thin text-white p-1 bg-[#252525] rounded">
            <span class="text-yellow-400">★</span> 9.8
        </span>

        <span class="absolute top-1 left-1 text-xs font-thin text-white p-1 bg-[#252525] rounded">
            Manwha
        </span>
    </a>

    
    <div class="flex flex-col justify-between text-white max-w-[150px]">
        <span class="flex flex-col gap-1">
            <h3 class="comic-title text-sm font-semibold">On The Way To Meet Mom</h3>
            <a href="{{ route('series.chapter', 1) }}" class="text-xs font-thin py-1 px-2 rounded hover:bg-[#252525] text-white">Chapters xx</a>
            <a href="{{ route('series.chapter', 1) }}" class="text-xs font-thin py-1 px-2 rounded hover:bg-[#252525] text-white">Chapters xx</a>
            <a href="{{ route('series.chapter', 1) }}" class="text-xs font-thin py-1 px-2 rounded hover:bg-[#252525] text-white">Chapters xx</a>
        </span>
        
        <button class="flex items-center gap-1 justify-center text-xs font-bold uppercase text-black p-1 bg-[#FFD700] rounded">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M200-120v-640q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v640L480-240 200-120Zm80-122 200-86 200 86v-518H280v518Zm0-518h400-400Z"/></svg> 
            BookMark
        </button>
    </div>
</div>
