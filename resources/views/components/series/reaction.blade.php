@php
    $userReaction = Auth::check()
        ? $objects->reactions()
            ->where('user_id', Auth::id())
            ->value('type')
        : null;
@endphp

@auth
    <form method="POST" action="{{$action}}" class="reaction-form grid md:grid-cols-6 grid-cols-3 gap-y-4 md:w-[70%] lg:w-[50%] w-full">
        @csrf
        <input type="hidden" name="reaction" class="reaction-input">

        @foreach ($reaction as $react)
            <button type="submit" value="{{$react['type']}}" class="reaction-btn cursor-pointer flex flex-col items-center text-white gap-.5">
                <img
                    class="reaction-icon"
                    src="{{ asset(
                        'images/reactions/'.$react['type'].
                        ($userReaction === $react['type'] ? '_active' : '').
                        '.svg'
                    ) }}"
                    data-default="{{ asset('images/reactions/'.$react['type'].'.svg') }}"
                    data-active="{{ asset('images/reactions/'.$react['type'].'_active.svg') }}"
                    alt=""
                >
                @php
                    $count = $reactions?->firstWhere('type', $react['type']) ?? (object) ['total' => 0];
                @endphp
                <p data-type="{{$react['type']}}" class="reaction-count text-sm">{{$count->total}}</p>
                <label class="font-thin text-[.55rem]">{{ $react['type']}}</label>
            </button>
        @endforeach
    </form>
@endauth
    
@guest
    <div class="grid md:grid-cols-6 grid-cols-3 gap-y-4 md:w-[70%] lg:w-[50%] w-full">
        <input type="hidden" name="reaction" class="reaction-input">

        @foreach ($reaction as $react)
            <a href="{{route('auth.acc_sign_in')}}" class="reaction-btn cursor-pointer flex flex-col items-center text-white gap-.5">
                <img
                    class="reaction-icon"
                    src="{{ asset(
                        'images/reactions/'.$react['type'].
                        ($userReaction === $react['type'] ? '_active' : '').
                        '.svg'
                    ) }}"
                    data-default="{{ asset('images/reactions/'.$react['type'].'.svg') }}"
                    data-active="{{ asset('images/reactions/'.$react['type'].'_active.svg') }}"
                    alt=""
                >
                <p data-type="{{$react['type']}}" class="reaction-count text-sm">{{$react['total']}}</p>
                <label class="font-thin text-[.55rem]">{{$react['type']}}</label>
            </a>
        @endforeach
    </div>
@endguest