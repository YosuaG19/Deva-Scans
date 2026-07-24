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
            @auth    
                <div class="flex items-center gap-3">
                    <span class="text-white text-right">
                        <p class="text-xs text-[#FFD700]">{{ Auth::user()->name }}</p>
                        <p class="text-[.6rem] font-thin">Since {{ Auth::user()->created_at->format('d M, Y') }}</p>
                    </span>
                    
                    <a href="{{route('profile.index')}}" class="w-[40px] h-[40px] rounded-full bg-white">
                        @php
                            $user = Auth::user();
                        @endphp
                        <img src="{{asset('images/'.$user->pp_path.'.png')}}" width="50" height="50" alt="logo">
                    </a>
                    
                </div>
            @endauth
            
            @guest    
                <a href="{{route('auth.sign_in')}}" class="bg-[#FFD700] border-2 border-[#FFD700] text-xs px-4 py-1.5 rounded hover:bg-transparent hover:text-[#FFD700]">
                    Sign In
                </a>
            @endguest

            <button class="md:hidden hamburger deactive">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>

    @include('layout.navbarPop')
</nav>