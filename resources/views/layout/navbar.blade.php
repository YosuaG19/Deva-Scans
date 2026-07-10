<nav class="flex relative w-full justify-center bg-[#353535] box-border navbar z-40">
    <div class="flex justify-between w-full px-6 py-1.5 md:min-w-[650px] md:max-w-[650px] md:px-0 lg:min-w-[1000px] lg:max-w-[1000px]">
        <div class="flex justify-between items-center gap-4">
            <a href="{{route('home.view')}}">
                <img src="{{asset('favicon.ico')}}" width="50" height="50" alt="logo">
            </a>
            
            <div class="items-center gap-2 md:flex hidden">
                <a href="{{ route('home.view') }}" class="nav-button">
                    Home
                </a>
                <a href="{{ route('browse.view') }}" class="nav-button">
                    Browse
                </a>
                <a href="{{ route('creator.view') }}" class="nav-button">
                    Creator
                </a>
                <a href="{{ route('subscriptions.view') }}" class="nav-button relative">
                    Deva<span class="text-[.4rem] invisible">+</span> <span class="text-[.7rem] absolute top-1 right-2">+</span>
                </a>
            </div>
        </div>
        <div class="flex justify-between items-center gap-6">
            <div class="flex items-center gap-4">
                <span class="text-white text-right">
                    <p class="text-sm">Username</p>
                    <p class="text-xs">Joined at Day Month, Year</p>
                </span>
                
                <a href="{{route('profile.index')}}" class="w-[40px] h-[40px] rounded-full bg-white">
                    {{-- <img src="{{asset('favicon.ico')}}" width="50" height="50" alt="logo"> --}}
                </a>
            </div>

            <button class="md:hidden hamburger deactive">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>

    @include('layout.navbarPop')
</nav>