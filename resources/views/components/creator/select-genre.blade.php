@props(['genres'])
<input type="hidden" id="selected-genres" name="genres[]">

@if ($comic)
    @php
        $selected = $comic->genres;
    @endphp
@endif

<div class="absolute w-full top-full left-0 mt-2 rounded bg-[#252525] z-50 hidden flex filter-genre p-2">
    <span class="grid grid-cols-2 gap-1 overflow-y-auto max-h-[30vh] w-full text-xs rounded overflow-hidden">
        @foreach ($genres as $genre)
            <button type="button" data-genre="genre" class="genre-button justify-start {{$selected->contains($genre) ? 'active' : ''}}" value=" {{ $genre->name }} ">
                <div class="flex items-center justify-center">
                    <span></span>
                </div>
                {{ $genre->name }}
            </button>
        @endforeach
    </span>
</div>