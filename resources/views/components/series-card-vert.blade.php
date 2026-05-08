<!DOCTYPE html>
<a href="{{ route('series.detail') }}" class="flex gap-2">
    <div class="flex w-[90px] h-[120px] bg-white">
        @include('components.cover-card')    
    </div>

    

    <div class="flex flex-col justify-between py-1 text-white">
        <h3>Title Here</h3>
        
        <span>
            <p class="text-xs">Chapter xx</p>
            <p class="text-xs">Last Updated TimeStamp</p>
        </span>
    </div>
</a>