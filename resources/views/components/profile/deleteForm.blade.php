<form method="POST" action="{{ route('profile.accDel') }}" class="w-full md:w-[80%] m-auto my-6 p-6 bg-[#252525] flex justify-between items-center">
    @csrf
    {{-- Form Title --}}
    <span class="text-[#FFD700] text-left">
        <h2 class="text-lg font-bold ">Delete Account</h2>
        <p class="text-xs font-thin">Permanently delete your account and data</p>
    </span>

    {{-- Subcription Content --}}
    <button type="submit" class="btn-profile-edit">Delete Account</button>
</form>