<div class="min-chapter-form absolute w-[17vw] top-full left-0 mt-2 rounded bg-[#252525] z-50 hidden flex filter-chapter py-2 px-4">
    <form class="flex flex-col w-full gap-2 items-center text-white">
        @csrf
        <input name="min-chapter" min="0" type="number" placeholder="e.g., 10" class="min-chapter-input w-full text-xs p-1">
        <small class="text-sm text-[#ffffff70] text-[.65rem]">Show series with at least this many chapters</small>
        <button type="submit" class="bg-[#FFD700] py-2 w-full rounded text-black font-semibold text-xs">Apply</button>
    </form>
</div>