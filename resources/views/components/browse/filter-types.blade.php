@props(['types'])

<div class="absolute w-[10vw] top-full left-0 mt-2 rounded bg-[#252525] z-50 hidden flex filter-type p-2">
    <div class="flex flex-col w-full gap-2 items-center text-black">
        <span class="flex flex-col gap-1 w-full text-xs rounded overflow-hidden">
            @foreach ($types as $type)
                @if ($type->id == 1)
                    <button class="filter-button active" value="{{ $type->name }}">
                        {{ $type->name }}
                        {{-- <div></div> --}}
                    </button>    
                @else
                    <button class="filter-button" value="{{ $type->name }}">
                        {{ $type->name }}
                        {{-- <div></div> --}}
                    </button>    
                @endif    
            @endforeach
        </span>
    </div>
</div>