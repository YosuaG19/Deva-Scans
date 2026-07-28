<div class="w-full md:w-[80%] m-auto mt-6 p-6 bg-[#252525] flex flex-col gap-4">
    {{-- Form title --}}
    <span class="text-[#FFD700] text-left">
        <h2 class="text-lg font-bold ">{{ __('profile.account_settings') }}</h2>
        <p class="text-xs font-thin">{{ __('profile.manage_account') }}</p>
    </span>

    {{-- Profile Picture --}}
    <div class="flex flex-col gap-2 text-[#FFD700]">
        <h3 class="text-sm font-semibold">{{ __('profile.profile_picture') }}</h3>
        <form method="POST" action="{{route('profile.uptPP')}}" class="flex gap-4 items-center">
            @csrf
            @foreach ($pp_list as $pp)
                <button
                    type="submit"
                    name="pp_path"
                    value="{{ $pp }}"
                    class="pp_selection cursor-pointer flex items-center justify-center w-[90px] h-[90px] rounded-full border-2
                    {{ $user->pp_path == $pp ? 'border-[#FFD700]' : 'border-transparent' }}"
                >
                    <img
                        class="w-full h-full rounded-full"
                        src="{{ asset('images/'.$pp.'.png') }}"
                        alt=""
                    >
                </button>
            @endforeach
        </form>
    </div>

    {{-- Username & Email --}}
    <form class="form-cont" action="{{ route('profile.uptUser') }}" method="POST">
        @csrf
        <div class="w-full">
            <span class="flex justify-between text-[#FFD700]">
                <label class="text-sm font-semibold">{{ __('profile.username_label') }}</label>
                <p class="text-xs font-thin">{{ __('profile.username_requirement') }}</p>
            </span>
            <input placeholder="New Username" value="{{old('user_name',$user->name)}}" name="name" class="input-cont" type="text">
        </div>
        <div class="w-full">
            <label class="text-[#FFD700] text-sm font-semibold">{{ __('profile.email_label') }}</label>
            <input placeholder="New Email" value="{{old('user_email',$user->email)}}" name="email" class="input-cont" type="email">
        </div>
        <button type="submit" class="btn-profile-edit">{{ __('profile.save_profile') }}</button>
    </form>

    {{-- Pembatas --}}
    <span class="w-full h-[2px] bg-[#FFD700]"></span>
    
    {{-- Change Password --}}
    <div>
        <h3 class="text-[#FFD700] text-sm font-semibold">{{ __('profile.change_password') }}</h3>
        <form class="form-cont text-[#FFD700]" action="{{ route('profile.uptPass') }}" method="POST">
            @csrf
            <input placeholder="Current Password" name="current_password" class="input-cont" placeholder="Old Password" type="password">
            <input placeholder="New Password" name="password" class="input-cont" placeholder="New Password" type="password">
            <input placeholder="Confirm Password" name="password_confirmation" class="input-cont" placeholder="Confirm Password" type="password">
            <button class="btn-profile-edit" type="submit">{{ __('profile.update_password') }}</button>
        </form>
    </div>
</div>