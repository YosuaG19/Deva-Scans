<div class="profile-banner bg-cover bg-center" style="background-image: url('{{ asset('images/profile-banner-bg.png') }}')">
    <div class="min-h-[100px] min-w-[100px] md:min-h-[130px] md:min-w-[130px] rounded-full bg-[#353535] flex items-center justify-center text-white">
        gambar
    </div>

    <div class="flex flex-col w-full justify-between gap-4 md:gap-6 box-border">
        <div class="flex w-full justify-between">
            <span class="flex flex-col text-[#FFD700]">
                <p class="text-xl font-bold profile-name">{{ __('profile.username') }}</p>
                <p class="text-sm">{{ __('profile.joined', ['date' => 'timestamp']) }}</p>
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
        <span class="flex gap-4">
            <a href="{{route('profile.edit')}}" class="btn-profile">{{ __('profile.edit_profile') }}</a>
            <button class="btn-profile">{{ __('profile.logout') }}</button>
        </span>
    </div>
</div>