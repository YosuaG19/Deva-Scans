<div class="flex flex-col justify-betweenN w-fit">
    <a  href="{{ route('creator.manage') }}" class="flex relative series-hover w-full md:h-[240px] aspect-[3/4] bg-white overflow-hidden">
        {{-- @include('components.series.cardCover') --}}
        <span class="absolute top-1 right-1 text-xs font-thin text-white p-1 bg-[#252525] rounded">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFD700"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z"/></svg>
        </span>
    </a>

    
    <div class="flex flex-col justify-between text-white w-full gap-3">
        <span class="flex flex-col">
            <h3 class="comic-title text-sm font-semibold">On The Way To Meet Mom</h3>
            <span class="flex w-full justify-between items-center px-2">
                <p class="text-[.65rem] font-thin rounded hover:bg-[#252525] text-white">xx {{ __('creator.chapters') }}</p>
                <p class="text-[.65rem] font-thin text-white">dd/mm/yyyy</p>
            </span>
        </span>

        <span class="h-[1px] bg-white w-full"></span>

        <span class="flex px-2 justify-between">
            <span class="flex flex-col w-full items-center">
                <p class="text-[.65rem] font-semibold text-white">XXXX</p>
                <p class="text-[.5rem] font-thin rounded hover:bg-[#252525] text-white">{{ __('creator.views') }}</p>
            </span>
            <span class="flex flex-col w-full items-center">
                <p class="text-[.65rem] font-semibold text-white">XXXX</p>
                <p class="text-[.5rem] font-thin rounded hover:bg-[#252525] text-white">{{ __('creator.likes') }}</p>
            </span>
            <span class="flex flex-col w-full items-center">
                <p class="text-[.65rem] font-semibold text-white">XXXX</p>
                <p class="text-[.5rem] font-thin rounded hover:bg-[#252525] text-white">{{ __('creator.comments') }}</p>
            </span>
        </span>
    </div>
</div>
