<section class="flex flex-col gap-4 items-center mt-6">
    <div class="series-cont items-center w-fit gap-4">
        <h2>
            My Creations
        </h2>
        <div class="creator-layout">
            <a href="{{ route('creator.addView') }}" class="add-comic ">
                <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 -960 960 960" width="18px" fill="#8c8c8c"><path d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                Add new comic
            </a>

            @for ($i = 0; $i < 7; $i++)
                @include('components.creator.card')
            @endfor
        </div>

        <div class="flex gap-2">
            @for ($i = 0; $i < 1; $i++)
                <button class="h-[25px] w-[25px] flex items-center gap-1 justify-center text-xs font-bold uppercase text-black p-1 bg-[#FFD700] rounded">
                    {{ $i + 1 }}
                </button>
            @endfor
            <button class="h-[25px] w-[25px] flex items-center gap-1 justify-center text-xs font-bold uppercase text-black p-1 bg-[#FFD700] rounded">
                <svg xmlns="http://www.w3.org/2000/svg" height="12px" viewBox="0 -960 960 960" width="12px" fill="#000000"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
            </button>
        </div>
    </div>
</section>