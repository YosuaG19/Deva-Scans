<span data-filter="chapter" class="filter-container relative w-full md:w-fit">
    <div class="filter-trigger relative w-full flex gap-2 items-center text-[#FFD700] border-[2px] border-[$FFD700] rounded text-xs px-4 py-1 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#FFD700"><path d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
        
        <span class="flex gap-2 items-center">
            {{ __('browse.minimum_chapters') }}
            <span class="min-chapter-label selected-type-label p-[.125rem] px-[.375rem]  bg-[#FFD700] text-black rounded hidden"></span>
        </span>
    </div>
    <div class=" filter-popup min-chapter-form absolute w-full md:w-[20vw]  lg:w-[17vw] bottom-full md:bottom-auto md:top-full left-0 my-2 rounded bg-[#252525] z-50 hidden flex filter-chapter py-2 px-4">
        <div class="flex flex-col w-full gap-2 items-center text-white">
            <input value="{{request('chapter')}}" name="chapter" min="0" type="number" placeholder="{{ __('browse.example_chapter') }}" class="min-chapter-input w-full text-xs p-1">
            <small class="text-sm text-[#ffffff70] text-[.65rem]">{{ __('browse.show_series') }}</small>
            <button type="submit" class="bg-[#FFD700] py-2 w-full rounded text-black font-semibold text-xs">{{ __('browse.apply') }}</button>
        </div>
    </div>
</span>
