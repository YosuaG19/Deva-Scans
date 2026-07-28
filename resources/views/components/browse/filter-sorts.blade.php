<span data-filter="timeline" class="filter-container relative w-full md:w-fit">
    <div class="filter-trigger flex gap-1 w-full items-center text-[#FFD700] border-[2px] border-[$FFD700] rounded text-xs p-1.5 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#FFD700"><path d="m480-360 160-160H320l160 160Zm0 280q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
        
        
        @php
            $selectedSort = $sorts->firstWhere('id', request('sort'));
        @endphp

        <span class="selected-sort-label">
            {{ $selectedSort?->name ?? __('browse.latest_update') }}
        </span>

    </div>
    <div class="filter-popup absolute w-full md:w-[20vw] lg:w-[15vw] bottom-full md:bottom-auto md:top-full left-0 my-2 rounded bg-[#252525] z-50 hidden flex filter-timeline p-2">
        <div class="flex flex-col w-full gap-2 items-center text-black">
            {{-- <span class="flex w-full text-xs bg-[#252525] rounded overflow-hidden">
                <button class="sort-button" name="sortOrder" value="asc">{{ __('browse.asc') }}</button>
                <button class="sort-button active" name="sortOrder" value="desc">{{ __('browse.desc') }}</button>
            </span> --}}
            <span class="flex w-full text-xs bg-[#252525] rounded overflow-hidden">
                <label class="sort-button text-center {{ request('direction', 'desc') == 'asc' ? 'active' : '' }}">
                    <input
                        type="radio"
                        name="direction"
                        value="asc"
                        class="hidden"
                        {{ request('direction', 'desc') == 'asc' ? 'checked' : '' }}
                    >
                    {{ __('browse.asc') }}
                </label>

                <label class="sort-button text-center {{ request('direction', 'desc') == 'desc' ? 'active' : '' }}">
                    <input
                        type="radio"
                        name="direction"
                        value="desc"
                        class="hidden"
                        {{ request('direction', 'desc') == 'desc' ? 'checked' : '' }}
                    >
                    {{ __('browse.desc') }}
                </label>
            </span>
            <span class="flex flex-col w-full text-xs rounded overflow-hidden">
                @foreach ($sorts as $sort)
                    <label class="filter-button {{ request('sort') == $sort->id ? 'active' : '' }}">
                        <input
                            type="radio"
                            name="sort"
                            value="{{ $sort->id }}"
                            class="hidden"
                            {{ request('sort') == $sort->id ? 'checked' : '' }}
                        >
                        {{ $sort->name }}
                        <svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="15px" fill="#000000"><path d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                    </label>
                @endforeach
            </span>
        </div>
    </div>
</span>
