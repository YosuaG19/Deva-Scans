<!DOCTYPE html>
<navbar class="flex justify-around w-full h-[70px] bg-black py-2 box-border">
    <div class="flex justify-between items-center gap-4">
        <a href="{{route('home.view')}}">
            <img src="{{asset('favicon.ico')}}" width="60" height="60" alt="logo">
        </a>
        
        @foreach (config('navbar') as $item)
            <a href="{{ route($item['route']) }}" class="text-white text-lg px-4 py-1.5 font-semibold rounded-lg hover:bg-[#353535]">
                {{ $item['name'] }}
            </a>
        @endforeach
    </div>
    <div class="flex justify-between items-center">
        <form action="" class="flex gap-3">
            <input type="text" placeholder="Search here" class="rounded-lg text-lg px-4 py-1.5 bg-white">
            <button class="text-white text-lg px-4 py-1.5 font-semibold rounded-lg hover:bg-[#353535]">Search</button>
        </form>
    </div>
</navbar>