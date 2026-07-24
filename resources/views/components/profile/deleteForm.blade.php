<form id="deleteForm" method="POST" action="{{ route('profile.accDel') }}" class="w-full md:w-[80%] m-auto my-6 p-6 bg-[#252525] flex justify-between items-center">
    @csrf
    {{-- Form Title --}}
    <span class="text-[#FFD700] text-left">
        <h2 class="text-lg font-bold ">{{ __('profile.delete_account') }}</h2>
        <p class="text-xs font-thin">{{ __('profile.delete_account_desc') }}</p>
    </span>

    {{-- Subcription Content --}}
    <button type="submit" class="btn-profile-edit">{{ __('profile.delete_account_button') }}</button>
</form>

{{-- <script>
document.getElementById('deleteForm').addEventListener('submit', function(e) {
    if (!confirm('Are you sure you want to delete your account? This action cannot be undone.')) {
        e.preventDefault();
    }
});
</script> --}}