<!DOCTYPE html>
<a href="{{ route('series.detail') }}" class="flex flex-col md:w-[120px]">
    <div class="flex w-full md:h-[160px] bg-white">
        @include('components.cover-card')
    </div>

    
    <div class="flex flex-col text-white">
        <h3 class="comic-title">Title Here, and here we gooo</h3>
        
        <span class="flex justify-between">
            <p class="text-xs">Chapter xx</p>
            <p class="text-xs">Rating</p>
        </span>
    </div>
</a>