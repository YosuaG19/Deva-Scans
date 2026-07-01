<div class="w-full md:w-[80%] m-auto mt-6 p-6 bg-[#252525] flex flex-col gap-4">
    {{-- Form title --}}
    <span class="text-[#FFD700] text-left">
        <h2 class="text-lg font-bold ">Account Settings</h2>
        <p class="text-xs font-thin">Manage your account here</p>
    </span>

    {{-- Profile Picture --}}
    <div class="flex flex-col gap-2 text-[#FFD700]">
        <h3 class="text-sm font-semibold">Profile Picture</h3>
        <div class="flex gap-4 items-center">
            <div class="w-[90px] h-[90px] bg-[#353535] rounded-full"></div>

            <div class="flex flex-col gap-2">
                <span class="flex gap-4">
                    <button class="btn-profile">Change Photo</button>
                    <button class="btn-profile">Remove</button>
                </span>
                <p class="text-xs font-thin">Requirement for profile picture</p>
            </div>
        </div>
    </div>

    {{-- Username & Email --}}
    <form class="form-cont" action="{{ route('profile.uptUser') }}" method="POST">
        @csrf
        <div class="w-full">
            <span class="flex justify-between text-[#FFD700]">
                <label class="text-sm font-semibold">Username</label>
                <p class="text-xs font-thin">Requirement for username</p>
            </span>
            <input placeholder="old.values" name="Username" class="input-cont" type="text">
        </div>
        <div class="w-full">
            <label class="text-[#FFD700] text-sm font-semibold">Email</label>
            <input placeholder="old.values" name="Email" class="input-cont" type="text">
        </div>
        <button type="submit" class="btn-profile-edit">Save Profile</button>
    </form>

    {{-- Pembatas --}}
    <span class="w-full h-[2px] bg-[#FFD700]"></span>
    
    {{-- Change Password --}}
    <div>
        <h3 class="text-[#FFD700] text-sm font-semibold">Change Password</h3>
        <form class="form-cont text-[#FFD700]" action="{{ route('profile.uptPass') }}" method="POST">
            @csrf
            <input placeholder="old.values" name="old_pass" class="input-cont" placeholder="Old Password" type="password">
            <input placeholder="old.values" name="password" class="input-cont" placeholder="New Password" type="password">
            <input placeholder="old.values" name="password_confirmation" class="input-cont" placeholder="Confirm Password" type="password">
            <button class="btn-profile-edit" type="submit">Update Password</button>
        </form>
    </div>
</div>