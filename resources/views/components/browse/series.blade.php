<section class="flex flex-col gap-4 items-center mt-6">
    <div class="series-cont items-center w-fit gap-4">
        <div class="browse-layout">
            @for ($i = 0; $i < 12; $i++)
                @include('components.browse.card')
            @endfor
        </div>

        <div class="flex gap-2">
            @for ($i = 0; $i < 5; $i++)
                <button class="h-[25px] w-[25px] flex items-center gap-1 justify-center text-xs font-bold uppercase text-black p-1 bg-[#FFD700] rounded">
                    {{ $i + 1 }}
                </button>
            @endfor
            <button class="h-[25px] w-[25px] flex items-center gap-1 justify-center text-xs font-bold uppercase text-black p-1 bg-[#FFD700] rounded">
                <svg xmlns="http://www.w3.org/2000/svg" height="12px" viewBox="0 -960 960 960" width="12px" fill="#000000"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
            </button>
        </div>
    </div>
</section>