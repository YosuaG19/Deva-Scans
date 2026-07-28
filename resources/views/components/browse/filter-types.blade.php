<span data-filter="type" class="relative filter-container w-full md:w-fit">
    <div class="filter-trigger relative w-full flex gap-1 items-center text-[#FFD700] border-[2px] border-[$FFD700] rounded text-xs p-1.5 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#FFD700"><path d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-32₀Z"/></svg>
        
        <span class="flex gap-2 items-center">
            {{ __('browse.type') }}
            @php
                $selectedType = $types->firstWhere('id', request('type'));
            @endphp
            <span 
                class="selected-type-label p-[.125rem] px-2  bg-[#FFD700] text-black rounded 
                {{ $selectedType ? '' : 'hidden' }}">
                 {{ $selectedType?->name }}
            </span>
        </span>
    </div>
    <div class="filter-popup absolute w-full md:w-[10vw] bottom-full md:bottom-auto md:top-full md:left-0 my-2 rounded bg-[#252525] z-50 hidden flex filter-type p-2">
        <div class="flex flex-col w-full gap-2 items-center text-black">
            <span class="flex flex-col gap-1 w-full text-xs rounded overflow-hidden">
                @foreach ($types as $type)
                    <label class="filter-button {{ request('type') == $type->id ? 'active' : '' }}">
                        <input
                            type="radio"
                            name="type"
                            value="{{ $type->id }}"
                            class="hidden"
                            {{ request('type') == $type->id ? 'checked' : '' }}
                        >
                        {{ $type->name }}
                    </label>
                @endforeach
            </span>
        </div>
    </div>
</span>
