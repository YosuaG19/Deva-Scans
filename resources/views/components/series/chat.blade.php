<div class="w-full flex justify-between items-center">
    <span id="comment-count" class="text-[.6rem] text-white">
        {{$object->comments->count()}} Comments
    </span>

    <div id="sort-switch" class="relative grid grid-cols-2 flex w-fit h-fit    bg-[#252525] rounded-lg p-1 cursor-pointer select-none">

        <!-- Sliding Background -->
        <div id="slider" class="absolute left-1 top-1 w-[calc(50%-4px)] h-[calc(100%-8px)] bg-[#FFD700] rounded-md transition-all duration-300">
        </div>

        <button type="button" id="newest" class="relative z-10 flex-1 text-black text-[.6rem] px-2 py-1">
            Newest
        </button>

        <button type="button" id="oldest" class="relative z-10 flex-1 text-white text-[.6rem] px-2 py-1">
            Oldest
        </button>
    </div>
</div>

<form method="POST" action="{{$action}}" class="comment-form w-full rounded-xl border border-[#FFFFFF30] bg-[#252525] overflow-hidden">
    @csrf
    <textarea {{Auth::user() ? '' : 'disabled'}} id="comment" name="comment" maxlength="200" placeholder="{{ Auth::user() ? 'Write your comment' : 'Sign In to comment' }}" class="w-full bg-transparent text-xs p-4 text-white placeholder:text-[#454545] outline-none resize-none comment-input {{Auth::user() ? '' : 'disabled'}}"></textarea>

    <div class="flex items-center justify-end gap-4 border-t border-[#FFFFFF30] px-6 py-1.5">
        <span class="comment-counter text-xs text-zinc-400">
            0/200
        </span>

        @auth
            <button type="submit" class="rounded bg-[#FFD700] px-4 py-1 text-xs text-black font-semibold transition hover:bg-[#ab9102]">
                Post
            </button>
        @endauth

        @guest
            <a href="{{route('auth.sign_in')}}" class="rounded bg-[#FFD700] px-4 py-1 text-xs text-black font-semibold transition hover:bg-[#ab9102]">
                Sign In
            </a>
        @endguest
    </div>
</form>

<div id="comments-container" class="flex flex-col items-start w-full gap-6">
    @foreach ($object->comments as $comment)
        <x-series.comment-card :comment="$comment"/>
    @endforeach
</div>