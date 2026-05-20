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
                <p class="text-xs font-extrathin">Requirement for profile picture</p>
            </div>
        </div>
    </div>

    {{-- Username & Email --}}
    <form class="form-cont" action="">
        @csrf
        <div class="w-full">
            <span class="flex justify-between text-[#FFD700]">
                <label class="text-sm font-semibold">Username</label>
                <p class="text-xs font-extrathin">Requirement for username</p>
            </span>
            <input class="input-cont" type="text">
        </div>
        <div class="w-full">
            <label class="text-[#FFD700] text-sm font-semibold">Email</label>
            <input class="input-cont" type="text">
        </div>
        <button class="btn-profile-edit">Save Profile</button>
    </form>

    {{-- Pembatas --}}
    <span class="w-full h-[2px] bg-[#FFD700]"></span>
    
    {{-- Change Password --}}
    <div>
        <h3 class="text-[#FFD700] text-sm font-semibold">Change Password</h3>
        <form class="form-cont text-[#FFD700]" action="">
            @csrf
            <input class="input-cont" placeholder="Old Password" type="text">
            <input class="input-cont" placeholder="New Password" type="text">
            <input class="input-cont" placeholder="Confirm Password" type="text">
            <button class="btn-profile-edit">Update Password</button>
        </form>
    </div>
</div>