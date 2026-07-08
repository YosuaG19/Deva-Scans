
<a href="{{ route('series.detail') }}" class="flex gap-2 series-hover p-2 rounded-lg hover:bg-[#252525] ease transition duration-200">
    <div class="flex w-[60px] h-[80px] bg-white overflow-hidden">
        @include('components.series.cardCover')    
    </div>

    

    <div class="flex flex-col justify-between py-.5 text-white">
        <span>
            <h3 class="comic-title-vert text-sm font-semibold">On The Way To Meet Mom</h3>
            <p class="text-xs font-thin"><span class="text-[#FFD70090]">{{ __('series.genre') }} : </span>Action, Adventure</p>
        </span>

        {{-- <p class="text-xs font-thin">Last Updated TimeStamp</p> --}}
    </div>
</a>