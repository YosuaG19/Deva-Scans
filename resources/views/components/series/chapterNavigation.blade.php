<div class="flex justify-between items-center mx-auto h-fit md:w-[80%] w-[95%] mt-6 gap-4">
    @php
        $prev = $chapter->numbering - 1;
        $next = $chapter->numbering + 1;
        $newest = $comic->chapters->max('numbering');
        if (!Auth::user() || !Auth::user()->subscriptions) {
            $subs = false;
        }else {
            $subs = true;
        }
    @endphp

    {{-- @dd($next, $newest); --}}

    @if ($prev < $fc->numbering)
        <button type="button" disabled class="chapter-control-button-disabled md:px-4 px-2">
            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="13px" fill="#000000"><path d="M640-80 240-480l400-400 71 71-329 329 329 329-71 71Z"/></svg>
            {{ __('series.prev') }}
        </button>
    @else
        <button 
            type="button" onclick="window.location.href='{{ route('series.chapter', ['comic' => $comic, 'chapter' => $prev]) }}'"
            class="chapter-control-button md:px-4 px-2">
            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="13px" fill="#000000"><path d="M640-80 240-480l400-400 71 71-329 329 329 329-71 71Z"/></svg>
            {{ __('series.prev') }}
        </button>
    @endif

    @if ($next > $lc->numbering)
        <button type="button" disabled class="chapter-control-button-disabled md:px-4 px-2">
            {{ __('series.next') }}
            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="13px" fill="#000000"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
        </button>
    @elseif ($next == $newest && !$subs)
        @if (!Auth::user())
            <button
                type="button" onclick="window.location.href='{{ route('auth.acc_sign_in') }}'"
                class="chapter-control-button md:px-4 px-2">
                {{ __('series.next') }}
                <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="13px" fill="#000000"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
            </button>
            
        @else
            <button
                type="button" onclick="window.location.href='{{ route('subscriptions.view') }}'"
                class="chapter-control-button md:px-4 px-2">
                {{ __('series.next') }}
                <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="13px" fill="#000000"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
            </button>
        @endif
    @else
        <button
            type="button" onclick="window.location.href='{{ route('series.chapter', ['comic'=>$comic, 'chapter'=>$next]) }}'"
            class="chapter-control-button md:px-4 px-2">
            {{ __('series.next') }}
            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="13px" fill="#000000"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
        </button>
    @endif
</div>