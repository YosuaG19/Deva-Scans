<div class="w-full md:w-[330px] flex items-center flex-col gap-3 p-2">

    {{-- @dd($comic) --}}
    {{-- Cover --}}
    <div class="flex w-[210px] md:w-full">
        @php
            $path = $comic->cover_path
        @endphp
        <x-series.cardCover :path='$path' />
    </div>

    {{-- Rating --}}
    @auth
        <div class="relative w-full">
            <button class="btn-rating">
                <span>★</span>
                <span>{{ __('series.rating') }}</span>
            </button>

            <form method="POST" action="{{route('series.addRating', $comic)}}" class="rating-form hidden absolute top-full my-2 w-full gap-3 py-4 px-6 flex flex-col items-center bg-[#252525] border-2 border-[#FFD700] rounded">
                @csrf
                <div class="flex w-full justify-between">
                    <div class="flex flex-col">
                        <p class="text-xs font-bold text-[#FFD700]">Rate this Series?</p>
                        <p class="text-[.6rem] text-[#FFFFFF90]">Choose from 1 to 10</p>
                    </div>

                    <div class="rating-close cursor-pointer relative w-[15px] h-[20px] flex flex-col items-center justify-center">
                        <span class="absolute w-[15px] h-[2px] bg-[#FFD700] rotate-45"></span>
                        <span class="absolute w-[15px] h-[2px] bg-[#FFD700] -rotate-45"></span>
                    </div>
                </div>

               @php
                    $user = Auth::user();

                    $userRating = $comic->ratings()->where('user_id', $user->id)->first();
                @endphp


                <input type="hidden" name="rate" class="rating-input">
                <div class="flex w-full justify-center gap-1">
                    @for ($i = 1; $i <= 10; $i++)
                        <button
                            type="submit"
                            class="rating-btn rounded cursor-pointer text-white text-[.65rem] font-bold h-[20px] w-[20px]
                            {{ $userRating?->rate == $i ? 'active' : 'hover:bg-[#353535]' }}"
                            value="{{ $i }}">
                            {{ $i }}
                        </button>
                    @endfor
                </div>
            </form>
        </div>
    @endauth
        
    @guest
        <a href="{{route('auth.acc_sign_in')}}" class="btn-rating">
            <span>★</span>
            <span>Sign In to Rate</span>
        </a>
    @endguest

    {{-- Information Box --}}
    <div class="series-desc">

        {{-- Top Stats --}}
        <div class="grid grid-cols-3 text-center">

            <div>
                <h3 class="rating-average font-bold text-lg">★ {{$comic->rating_avg}}</h3>
                <p class="flex items-center w-full justify-center gap-1 text-xs font-thin">Rating <span class="rating-count text-[.6rem] mt-[.5px] font-thin">({{$comic->rating_count}})</span></p>
            </div>

            <div class="border-x border-[#FFD700]">
                <h3 class="font-bold text-lg">{{$comic->chapter_count}}</h3>
                <p class="text-xs font-thin">{{ __('series.chapters') }}</p>
            </div>

            <div>
                <h3 class="font-bold text-lg">{{$comic->bookmarks_count}}</h3>
                <p class="text-xs font-thin">{{ __('series.bookmarks') }}</p>
            </div>

        </div>

        {{-- Divider --}}
        <div class="border-t border-[#FFD700]"></div>

        {{-- Status & Type --}}
        <div class="grid grid-cols-2 text-center">

            <div>
                <p class="text-xs font-thin">{{ __('series.status') }}</p>
                <h3 class="font-bold text-lg">• {{$comic->status->name}}</h3>
            </div>

            <div>
                <p class="text-xs font-thin">{{ __('series.type') }}</p>
                <h3 class="font-bold text-lg">• {{$comic->type->name}}</h3>
            </div>

        </div>

        {{-- Divider --}}
        <div class="border-t border-[#FFD700]"></div>

        {{-- Author --}}
        <div class="flex items-center justify-between">

            <div class="flex items-center gap-4 justify-between w-[45%]">
                <p class="text-xs font-thin">{{ __('series.author') }}</p>
                <h3 class="text-[.6rem] font-bold">{{Str::words($comic->author, 1, '')}}</h3>
            </div>
            <span class="w-[.5px] h-[20px] bg-[#FFD700]"></span>
            <div class="flex items-center justify-between w-[45%]">
                <p class="text-xs font-thin">{{ __('series.artist') }}</p>
                <h3 class="text-[.6rem] font-bold">{{Str::words($comic->artist, 1, '')}}</h3>
            </div>

        </div>

    </div>

    {{-- Genres --}}
    <div class="flex flex-wrap gap-2 w-full">

        @foreach ($comic->genres as $genre)

            <button class="btn-genre">
                {{ $genre->name }}
            </button>

        @endforeach

    </div>

</div>