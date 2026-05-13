<!DOCTYPE html>
<nav class="flex w-full justify-center bg-[#353535] box-border">
    <div class="flex justify-between w-full px-6 py-1.5 md:min-w-[650px] md:max-w-[650px] md:px-0 lg:min-w-[1000px] lg:max-w-[1000px]">
        <div class="flex justify-between items-center gap-4">
            <a href="{{route('home.view')}}">
                <img src="{{asset('favicon.ico')}}" width="50" height="50" alt="logo">
            </a>
            
            <div class="items-center gap-2 md:flex hidden">
                @foreach (config('navbar') as $item)
                    <a href="{{ route($item['route']) }}" class="nav-button">
                        {{ $item['name'] }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="flex justify-between items-center gap-6">
            <div class="flex items-center gap-4">
                <span class="text-white text-right">
                    <p class="text-sm">Username</p>
                    <p class="text-xs">Joined at Day Month, Year</p>
                </span>
                
                <a href="{{route('profile.view')}}" class="w-[40px] h-[40px] rounded-full bg-white">
                    {{-- <img src="{{asset('favicon.ico')}}" width="50" height="50" alt="logo"> --}}
                </a>
            </div>

            <div class="w-[30px] h-[20px] flex flex-col justify-between md:hidden">
                <span class="h-[3px] bg-white rounded-lg"></span>
                <span class="h-[3px] bg-white rounded-lg"></span>
                <span class="h-[3px] bg-white rounded-lg"></span>
            </div>
        </div>
    </div>
</nav>