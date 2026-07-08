<div class="profile-banner bg-cover bg-center" style="background-image: url('{{ asset('images/profile-banner-bg.png') }}')">
    <div class="h-[100px] w-[100px] md:h-[130px] md:w-[130px] rounded-full bg-[#353535] flex items-center justify-center text-white">
        gambar
    </div>

    <div class="flex flex-col justify-between gap-4 md:gap-6 box-border">
        <span class="flex flex-col text-[#FFD700]">
            <p class="text-xl font-bold">{{ __('profile.username') }}</p>
            <p class="text-sm">{{ __('profile.joined', ['date' => 'timestamp']) }}</p>
        </span>
        <span class="flex gap-4">
            <a href="{{route('profile.edit')}}" class="btn-profile">{{ __('profile.edit_profile') }}</a>
            <button class="btn-profile">{{ __('profile.logout') }}</button>
        </span>
    </div>
</div>