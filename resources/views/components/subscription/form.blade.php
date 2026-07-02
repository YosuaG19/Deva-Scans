<div class="w-full md:w-[80%] m-auto mt-6 p-6 bg-[#252525] flex flex-col gap-4 items-center">
    {{-- Form Title --}}
    <span class="text-[#FFD700] text-left w-full">
        <h2 class="text-lg font-bold ">{{ __('subscription.title') }}</h2>
        <p class="text-xs font-thin">{{ __('subscription.current_plan_none') }}</p>
    </span>

    <span class="w-full h-[2px] bg-[#FFD700]"></span>

    {{-- Subcription Content --}}
    <a href="{{route('subscriptions.view')}}" class="btn-profile-edit">{{ __('subscription.view_plans') }}</a>

    <span class="w-full h-[2px] bg-[#FFD700]"></span>
    
    {{-- Contact --}}
    <span class="text-xs font-thin text-[#FFD700] w-full">{{ __('subscription.trouble') }} <a href="" class="underline">{{ __('subscription.contact_us') }}</a></span>
</div>