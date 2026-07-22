<div class="w-full flex justify-between items-center">
    <span class="text-[.6rem] text-white">
        {{$object->comments->count()}} Comments
    </span>

    <div id="sort-switch" class="relative grid grid-cols-2 flex w-fit h-fit    bg-[#252525] rounded-lg p-1 cursor-pointer select-none">

        <!-- Sliding Background -->
        <div id="slider" class="absolute left-1 top-1 w-[calc(50%-4px)] h-[calc(100%-8px)] bg-[#FFD700] rounded-md transition-all duration-300">
        </div>

        <button id="newest" class="relative z-10 flex-1 text-black text-[.6rem] px-2 py-1">
            Newest
        </button>

        <button id="oldest" class="relative z-10 flex-1 text-white text-[.6rem] px-2 py-1">
            Oldest
        </button>
    </div>
</div>

<div class="w-full rounded-xl border border-[#FFFFFF30] bg-[#252525] overflow-hidden">
    <textarea id="comment" maxlength="200" placeholder="Write your comment" class="w-full bg-transparent text-xs p-4 text-white placeholder:text-[#454545] outline-none resize-none"></textarea>

    <div class="flex items-center justify-between border-t border-[#FFFFFF30] px-4 py-3">
        <div class="flex items-center gap-2">
            <button type="button" class="text-white w-6 h-6 rounded hover:text-[#FFD700] font-bold transition text-xs">
                B
            </button>

            <button type="button" class="text-white w-6 h-6 rounded hover:text-[#FFD700] italic transition text-xs">
                I
            </button>

            <button type="button" class="text-white w-6 h-6 rounded hover:text-[#FFD700] underline transition text-xs">
                U
            </button>
        </div>

        <div class="flex items-center gap-4">
            <span id="counter" class="text-xs text-zinc-400">
                0/200
            </span>

            <button class="rounded bg-[#FFD700] px-4 py-1 text-xs text-black font-semibold transition hover:bg-[#ab9102]">
                Post
            </button>
        </div>
    </div>
</div>

<div class="flex flex-col items-start w-full gap-4">
    @foreach ($object->comments as $comment)
        <div class="flex items-start w-full gap-4">
            <div class="min-h-[40px] min-w-[40px] rounded-full outline-2 -outline-offset-2 outline-[#FFD700] bg-[#454545]"></div>
            <div class="flex flex-col gap-2 text-white">
                <div class="flex gap-2">
                    <a href="" class="text-xs font-semibold">{{$comment->user->name}}</a>
                    <span class="text-xs font-light">{{$comment->created_at->format('d M, Y')}}</span>
                </div>

                <div class="flex text-[.65rem]">
                    {{$comment->content}}
                </div>

                <div class="flex gap-4 items-center">
                    <button id="like-btn" class="[&.active_.reaction-icon]:fill-[#FFD700] [&.active_.reaction-text]:text-[#FFD700] flex gap-1 group cursor-pointer">
                        <svg class="reaction-icon group-hover:fill-[#FFD700] active:fill-[#FFD700]" xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="15px" fill="#656565"><path d="M720-120H320v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h218q32 0 56 24t24 56v80q0 7-1.5 15t-4.5 15L794-168q-9 20-30 34t-44 14ZM240-640v520H80v-520h160Z"/></svg>
                        <span class="reaction-text group-hover:text-[#FFD700] text-[#656565] text-[.65rem]">{{$comment->upvote}}</span>
                    </button>

                    <button id="dislike-btn" class="[&.active_.reaction-icon]:fill-[#FFD700] [&.active_.reaction-text]:text-[#FFD700] flex gap-1 group cursor-pointer">
                        <svg class="reaction-icon group-hover:fill-[#FFD700] active:fill-[#FFD700]" xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="15px" fill="#656565"><path d="M240-840h400v520L360-40l-50-50q-7-7-11.5-19t-4.5-23v-14l44-174H120q-32 0-56-24t-24-56v-80q0-7 1.5-15t4.5-15l120-282q9-20 30-34t44-14Zm480 520v-520h160v520H720Z"/></svg>
                        <span class="reaction-text group-hover:text-[#FFD700] text-[#656565] text-[.65rem]">{{$comment->downvote}}</span>
                    </button>
                </div>
            </div>
        </div>    
    @endforeach
</div>