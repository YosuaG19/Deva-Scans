<div class="flex justify-between items-center mx-auto h-fit md:w-[80%] w-[95%] mt-6 gap-4">
    <a href="{{ route('series.chapter', $id-1)}}" class="flex items-center rounded font-semibold text-xs md:px-4 px-2 py-1.5 gap-2 bg-[#FFD700]">
        <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px" fill="#000000"><path d="M640-80 240-480l400-400 71 71-329 329 329 329-71 71Z"/></svg>
        {{ __('series.prev') }}
    </a>

    <a href="{{ route('series.chapter', $id+1) }}" class="flex items-center rounded font-semibold text-xs md:px-4 px-2 py-1.5 gap-2 bg-[#FFD700]">
        {{ __('series.next') }}
        <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px" fill="#000000"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
    </a>
</div>