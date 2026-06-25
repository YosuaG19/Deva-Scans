<div class="absolute -bottom-full h-full left-0 items-center gap-2 hidden flex items-center justify-center w-full py-2 navbar-pop bg-[#252525] z-50">
    @foreach (config('navbar') as $item)
        <a href="{{ route($item['route']) }}" class="nav-button">
            {{ $item['name'] }}
        </a>
    @endforeach
</div>
