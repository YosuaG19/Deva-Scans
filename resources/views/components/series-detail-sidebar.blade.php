<div class="w-[360px] flex flex-col gap-3">

    {{-- Cover --}}
    <img 
        src="{{asset($coverimage)}}"
        class="w-full h-[470px] object-cover"
    >

    {{-- Rating --}}
    <div class="
        border-2
        border-[#FFD700]
        rounded
        py-1.5
        flex
        items-center
        justify-center
        gap-2
        text-[#FFD700]
        font-semibold
    ">
        <span>★</span>
        <span>Rating</span>
    </div>

    {{-- Information Box --}}
    <div class="bg-[#3A3A3A] rounded p-4 text-[#FFD700]">

        {{-- Top Stats --}}
        <div class="grid grid-cols-3 text-center">

            <div>
                <h2 class="font-bold text-xl">★ {{$rating}}</h2>
                <p class="text-[10px]">Rating</p>
            </div>

            <div class="border-x border-[#FFD700]">
                <h2 class="font-bold text-lg">{{$chapters}}</h2>
                <p class="text-[10px]">Chapters</p>
            </div>

            <div>
                <h2 class="font-bold text-lg">{{$bookmark}}</h2>
                <p class="text-[10px]">Bookmarks</p>
            </div>

        </div>

        {{-- Divider --}}
        <div class="border-t border-[#FFD700] my-3"></div>

        {{-- Status & Type --}}
        <div class="grid grid-cols-2 text-center">

            <div>
                <p class="text-[10px]">Status</p>
                <h2 class="font-bold text-1xl">• {{$status}}</h2>
            </div>

            <div>
                <p class="text-[10px]">Type</p>
                <h2 class="font-bold text-1xl">• {{$type}}</h2>
            </div>

        </div>

        {{-- Divider --}}
        <div class="border-t border-[#FFD700] my-4"></div>

        {{-- Author --}}
        <div class="grid grid-cols-3 text-center text-[11px]">

            <div>
                <p>Author</p>
                <h2 class="mt-1 font-semibold">-</h2>
            </div>

            <div>
                <p>{{$author}}</p>
                <h2 class="mt-1 font-semibold">-</h2>
            </div>

            <div>
                <p>Artist</p>
                <h2 class="mt-1 font-semibold">{{$artist}}</h2>
            </div>

        </div>

    </div>

    {{-- Genres --}}
    <div class="flex flex-wrap gap-2">

        @foreach ($genres as $genre)

            <button class="
                border
                border-[#FFD700]
                text-[#FFD700]
                text-[11px]
                px-3
                py-1
                hover:bg-[#FFD700]
                hover:text-black
                transition-colors
                duration-200
            ">
                {{ $genre }}
            </button>

        @endforeach

    </div>

</div>