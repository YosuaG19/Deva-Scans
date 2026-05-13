<!DOCTYPE html>
<a href="{{ route('series.detail') }}" class="flex gap-2">
    <div class="flex w-[60px] h-[80px] bg-white">
        @include('components.cover-card')    
    </div>

    

    <div class="flex flex-col justify-between py-.5 text-white">
        <span>
            <h3 class="comic-title-vert text-sm font-semibold">Title Here, and here we gooo</h3>
            <p class="text-xs font-thin">Chapter xx</p>
        </span>

        <p class="text-xs font-thin">Last Updated TimeStamp</p>
    </div>
</a>