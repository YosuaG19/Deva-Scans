{{-- @dd($history) --}}
@php
    $comic = $history->comic;
@endphp

<a href="{{ route('series.chapter', ['comic' => $comic, 'chapter' => $history->chapter->numbering]) }}" class="flex gap-2 series-hover p-2 rounded-lg hover:bg-[#252525] ease transition duration-200">
    <div class="flex aspect-3/4 min-w-[75px] max-w-[75px] bg-white overflow-hidden">
        @php
            $path = $comic->cover_path
        @endphp
        <x-series.cardCover :path='$path' />
    </div>

    

    <div class="flex flex-col justify-between py-.5 text-white w-full md:max-w-[175px] lg:max-w-[200px]">
        <span class="flex flex-col gap-1">
            <h3 class="comic-title-vert text-sm font-semibold text-[#FFD700]">{{ $comic->title }}</h3>
            <div class="bg-[#353535] w-fit px-2 py-1 rounded text-xs flex flex-wrap gap-x-[5px]">
                

                <span class="text-[#FFD70080]">Chapter {{$history?->chapter->numbering}} </span>
            </div>
        </span>

        <div class="rounded flex w-full items-center justify-end">
            <span class="text-xs font-thin flex gap-1 items-center text-[#FFFFFF90] bg-[#353535] w-fit px-2 py-1 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="15px" fill="#FFFFFF90"><path d="M160-80v-80h80v-120q0-61 28.5-114.5T348-480q-51-32-79.5-85.5T240-680v-120h-80v-80h640v80h-80v120q0 61-28.5 114.5T612-480q51 32 79.5 85.5T720-280v120h80v80H160Z"/></svg>
                {{ $history->updated_at->diffForHumans() }}
            </span>
        </div>
    </div>
</a>


