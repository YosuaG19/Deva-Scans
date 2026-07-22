<div class="browse-banner bg-cover bg-center h-fit flex-col" style="background-image: url('{{ asset('images/profile-banner-bg.png') }}')">
    <span class="flex items-center gap-2 w-full">
    <h3 class="text-2xl font-bold text-white">{{ __('browse.browse_series') }}</h3>        <p class="px-2 text-lg font-semibold bg-[#FFD700] text-black rounded"> {{$comics->count()}} </p>
    </span>

    <div class="flex flex-col w-full gap-2">
        <div class="flex justify-between">
            <div class=" gap-3 items-center md:flex hidden">
                <x-browse.filter-sorts :sorts='$sorts'/>
                
                <x-browse.filter-status :status='$status'/>
                
                <x-browse.filter-types :types='$types'/>
            </div>

            <span class="flex items-center bg-white rounded px-2 py-2 md:py-1 md:w-fit w-full">
                <label for="search-series" class="mr-2 text-sm text-[#252525]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </label>
                <input type="text" id="search-series" placeholder="{{__('browse.search_series')}}" class="text-sm text-[#252525] outline-none placeholder:text-[#252525]">
            </span>
        </div>
        <div class="flex gap-3 items-center md:flex hidden">
            
            <x-browse.filter-genre :genres='$genres'/>
    
            
            <x-browse.filter-chapter/>
        </div>


        <button id="mobile-filter-btn" class="relative flex gap-2 items-center justify-center text-[#FFD700] border-[2px] border-[$FFD700] rounded text-xs px-4 py-1 md:hidden cursor-pointer">
            {{ __('browse.filter') }}
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFD700"><path d="M400-240v-80h160v80H400ZM240-440v-80h480v80H240ZM120-640v-80h720v80H120Z"/></svg>
        </button>

        <div
            id="mobile-filter-backdrop"
            class="fixed inset-0 bg-black/50 hidden z-40">
        </div>
        <x-browse.filter-layout :sorts='$sorts' :types='$types' :status='$status' :genres='$genres'/>
    </div>
</div>