<div
    id="mobile-filter-panel"
    class="fixed p-6 flex bottom-0 left-0 right-0 bg-[#252525] rounded-t-2xl
           translate-y-full transition-transform duration-300
           z-50 md:hidden">

    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 w-full">
        <x-browse.filter-sorts :sorts="$sorts"/>

        <x-browse.filter-status :status="$status"/>

        <x-browse.filter-types :types="$types"/>

        <x-browse.filter-genre :genres="$genres"/>

        <x-browse.filter-chapter/>    
    </div>
</div>