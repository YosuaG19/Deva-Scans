<div class="flex relative h-[240px] bg-white overflow-hidden series-hover">
    @php
        $path = $comic->cover_path
    @endphp
    <x-series.cardCover :path='$path' />
    <span class="absolute top-1 right-1 text-xs font-thin text-white p-1 bg-[#252525] rounded">
        <span class="text-yellow-400">★</span> {{$comic->rating_avg}}
    </span>
    
    <span class="absolute top-1 left-1 text-xs font-thin text-white p-1 bg-[#252525] rounded">
        {{ $comic->type->name }}
    </span>

    <span class="absolute bottom-0 left-0 text-xs font-semibold text-white p-1 w-full h-[30%] bg-gradient-to-t from-[#050505] rounded-b-lg flex items-end">
        {{ $comic->title }}
    </span>
</div>