<div data-created="{{$comment->created_at->timestamp}}" class="comment flex items-start w-full gap-4">
    <div class="flex items-center justify-center min-h-[40px] min-w-[40px] max-h-[40px] max-w-[40px] rounded-full outline-2 -outline-offset-2 outline-[#FFD700] bg-[#454545]">
        <img src="{{asset('images/'.$comment->user->pp_path .'.png')}}" alt="{{$comment->user->name}}">
    </div>
    <div class="flex flex-col gap-1 text-white">
        <div class="flex gap-2">
            <a href="" class="text-xs font-semibold">{{$comment->user->name}}</a>
            <span class="text-xs font-light">{{$comment->created_at->format('d M, Y')}}</span>
        </div>

        <div class="flex text-[.65rem]">
            {{$comment->content}}
        </div>

        <div class="flex gap-4 items-center">
            <button class="like-btn [&.active_.reaction-icon]:fill-[#FFD700] [&.active_.reaction-text]:text-[#FFD700] flex gap-1 group cursor-pointer">
                <svg class="reaction-icon group-hover:fill-[#FFD700] active:fill-[#FFD700]" xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="15px" fill="#656565"><path d="M720-120H320v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h218q32 0 56 24t24 56v80q0 7-1.5 15t-4.5 15L794-168q-9 20-30 34t-44 14ZM240-640v520H80v-520h160Z"/></svg>
                <span class="reaction-text group-hover:text-[#FFD700] text-[#656565] text-[.65rem]">{{$comment->upvote}}</span>
            </button>

            <button class="dislike-btn [&.active_.reaction-icon]:fill-[#FFD700] [&.active_.reaction-text]:text-[#FFD700] flex gap-1 group cursor-pointer">
                <svg class="reaction-icon group-hover:fill-[#FFD700] active:fill-[#FFD700]" xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="15px" fill="#656565"><path d="M240-840h400v520L360-40l-50-50q-7-7-11.5-19t-4.5-23v-14l44-174H120q-32 0-56-24t-24-56v-80q0-7 1.5-15t4.5-15l120-282q9-20 30-34t44-14Zm480 520v-520h160v520H720Z"/></svg>
                <span class="reaction-text group-hover:text-[#FFD700] text-[#656565] text-[.65rem]">{{$comment->downvote}}</span>
            </button>
        </div>
    </div>
</div>