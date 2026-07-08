@props(['sorts'])

<div class="absolute w-[15vw] top-full left-0 mt-2 rounded bg-[#252525] z-50 hidden flex filter-timeline p-2">
    <div class="flex flex-col w-full gap-2 items-center text-black">
        <span class="flex w-full text-xs bg-[#252525] rounded overflow-hidden">
            <button class="sort-button" name="sortOrder" value="asc">{{ __('browse.asc') }}</button>
            <button class="sort-button active" name="sortOrder" value="desc">{{ __('browse.desc') }}</button>
        </span>
        <span class="flex flex-col w-full text-xs rounded overflow-hidden">
            @foreach ($sorts as $sort)
                @if ($sort->id == 1)
                    <button class="filter-button active" value="{{ $sort->name }}">
                        {{ $sort->name }}
                        <svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="15px" fill="#000000"><path d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                    </button>
                @else
                    <button class="filter-button" value="{{ $sort->name }}">
                        {{ $sort->name }}
                        <svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="15px" fill="#000000"><path d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                    </button>
                @endif    
            @endforeach
        </span>
    </div>
</div>