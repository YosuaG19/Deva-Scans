<div class="flex flex-col gap-3 p-2">

    {{-- Description Box --}}
    <div class="series-cont text-white">

        <h1 class="text-2xl md:text-3xl font-semibold">
            {{$title}}
        </h1>

        <p class="mt-2 text-xs leading-5 w-full md:w-[400px] lg:w-[550px]">
            {{Str::limit($description, 300, "... read more")}}
        </p>

    </div>

    {{-- Buttons --}}
    <div class="grid grid-cols-3 gap-2">

        <button class="btn-detail">
            {{ __('series.bookmark') }}
        </button>

        <button class="btn-detail">
            {{ __('series.first_chapter') }}
        </button>

        <button class="btn-detail">
            {{ __('series.last_chapter') }}
        </button>

    </div>

    {{-- Chapter List --}}
    <div class="series-cont gap-2">

        <div class="flex justify-between text-white font-semibold">
            <span>{{ __('series.total_chapter') }}</span>
            <span>{{ __('series.newest') }}</span>
        </div>

        <div class="bg-gray-200 h-7 rounded"></div>

        <div class="flex flex-col gap-1.5 max-h-[300px] md:max-h-[400px] lg:max-h-[500px] overflow-y-auto pr-1">

            @for ($i = $chapters; $i >= 1; $i--)

                <a href="{{ route('series.chapter', $i) }}" class="btn-chapter">
                    <div class="flex gap-2 items-center">
                        <h3 class="font-semibold text-sm">{{ __('series.chapter') }} {{ sprintf('%02d', $i) }}</h3>
                        <p class="text-xs font-thin">|</p>
                        <p class="chapter-title text-xs font-thin">Chapter Title Here</p>
                    </div>

                    <p class="text-xs font-thin">
                        Mon DD, Year
                    </p>
                </a>

            @endfor

        </div>

    </div>

</div>