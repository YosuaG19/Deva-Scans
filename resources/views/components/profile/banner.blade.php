{{-- @dd($user->pp_path) --}}
<div class="profile-banner bg-cover bg-center" style="background-image: url('{{ asset('images/profile-banner-bg.png') }}')">
    <img src="{{asset('images/'.$user->pp_path.'.png')}}" class="min-h-[100px] min-w-[100px] md:min-h-[130px] md:min-w-[130px] rounded-full" alt="profile pic"/>

    <div class="flex flex-col w-full justify-between gap-4 md:gap-6 box-border">
        <div class="flex w-full justify-between">
            <span class="flex flex-col text-[#FFD700]">
                <p class="text-xl font-bold profile-name">{{ $user->name }}</p>
                <p class="text-sm">{{ __('profile.joined', ['date' => $user->created_at->format('d M, Y')]) }}</p>
            </span>

            <div id="lang-switch" 
                data-locale="{{ app()->getLocale() }}"
                class="relative grid grid-cols-2 flex w-fit h-fit bg-[#252525] rounded-lg p-1 cursor-pointer select-none">
                <!-- Sliding Background -->
                <div id="lang-slider" class="absolute left-1 top-1 w-[calc(50%-4px)] h-[calc(100%-8px)] bg-[#FFD700] rounded-md transition-all duration-300">
                </div>
    
                <button id="en" class="uppercase relative z-10 flex-1 text-black text-[.6rem] px-2 py-1">
                    en
                </button>
    
                <button id="id" class="uppercase relative z-10 flex-1 text-white text-[.6rem] px-2 py-1">
                    id
                </button>
            </div>
        </div>
        <form method="get" action="{{route('profile.sign_out')}}" class="flex gap-4">
            <a href="{{route('profile.edit')}}" class="btn-profile">{{ __('profile.edit_profile') }}</a>
            <button type="submit" class="btn-profile">{{ __('profile.logout') }}</button>
        </form>
    </div>
</div>