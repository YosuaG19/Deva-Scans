<section class="flex flex-col gap-4 items-center mt-6 min-h-[30vh] md:min-h-[60vh] lg:min-h-[30vh] h-fit">
    <div class="series-cont items-center w-fit gap-4">
        <div class="browse-layout md:min-w-[80vw]">
            @foreach ($comics as $comic)
                <x-browse.card :comic='$comic'/>
            @endforeach
        </div>

        <div class="flex gap-2">
            @php
                $start = max(1, $comics->currentPage() - 2);
                $end = min($comics->lastPage(), $comics->currentPage() + 2);
            @endphp

            {{-- Previous --}}
            @if ($comics->onFirstPage())
                <button class="opacity-50 cursor-not-allowed">←</button>
            @else
                <a href="{{ $comics->previousPageUrl() }}"
                class="h-[25px] w-[25px] flex items-center justify-center bg-[#FFD700] rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" height="12px" viewBox="0 -960 960 960" width="12px" fill="#000000"><path d="M640-80 240-480l400-400 71 71-329 329 329 329-71 71Z"/></svg>
                </a>
            @endif

            @for ($page = $start; $page <= $end; $page++)
                <a
                    href="{{ $comics->url($page) }}"
                    class="h-[25px] w-[25px] flex items-center gap-1 justify-center text-xs font-bold uppercase p-1 bg-[#FFD700] rounded
                        {{ $page == $comics->currentPage()
                            ? 'bg-black text-[#FFD700] border-2 border-[#FFD700] '
                            : 'bg-[#FFD700] text-black' }}">
                    {{ $page }}
                </a>
            @endfor

            {{-- Next --}}
            @if ($comics->hasMorePages())
                <a href="{{ $comics->nextPageUrl() }}"
                class="h-[25px] w-[25px] flex items-center justify-center bg-[#FFD700] rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" height="12px" viewBox="0 -960 960 960" width="12px" fill="#000000"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
                </a>
            @else
                <button class="opacity-50 cursor-not-allowed">→</button>
            @endif
        </div>
    </div>
</section>