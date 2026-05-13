<div class="flex-1">

    {{-- Description Box --}}
    <div class="bg-[#3A3A3A] p-5 text-white">

        <h1 class="text-4xl font-bold">
            {{$title}}
        </h1>

        <p class="mt-2 text-[13px] leading-5">
            {{$description}}
        </p>

    </div>

    {{-- Buttons --}}
    <div class="grid grid-cols-3 gap-2 mt-2">

        <button class="bg-[#FFD700] py-3 font-bold rounded-md
                        hover:bg-yellow-300 
                        hover:scale-105 
                        hover:shadow-lg 
                        active:scale-95
                        transition-all duration-200
                        cursor-pointer">
            BOOKMARK
        </button>

        <button class="bg-[#FFD700] py-3 font-bold rounded-md
                        hover:bg-yellow-300 
                        hover:scale-105 
                        hover:shadow-lg 
                        active:scale-95
                        transition-all duration-200
                        cursor-pointer">
            FIRST CHAPTER
        </button>

        <button class="bg-[#FFD700] py-3 font-bold rounded-md
                        hover:bg-yellow-300 
                        hover:scale-105 
                        hover:shadow-lg 
                        active:scale-95
                        transition-all duration-200
                        cursor-pointer">
            LAST CHAPTER
        </button>

    </div>

    {{-- Chapter List --}}
    <div class="bg-[#3A3A3A] mt-3 p-3">

        <div class="flex justify-between text-white font-semibold">
            <span>Total Chapter</span>
            <span>Newest</span>
        </div>

        <div class="bg-gray-200 h-7 rounded mt-2"></div>

        <div class="flex flex-col gap-1.5 mt-3 max-h-[450px] overflow-y-auto pr-1">

            @for ($i = $chapters; $i >= 1; $i--)

                <button class="
                                bg-[#FFD700]
                                px-4
                                py-2.5
                                rounded
                                flex
                                justify-between
                                items-center
                                text-left
                                hover:bg-[#FFE768]
                                transition-colors
                                duration-200
                                cursor-pointer
                            ">
                    <div>
                        <h2 class="font-bold">{{ sprintf('%02d', $i) }} Chapter</h2>
                        <p class="text-[10px]">Chapter Title Here</p>
                    </div>

                    <p class="text-xs">
                        Day Month Year
                    </p>
                </button>

            @endfor

        </div>

    </div>

</div>