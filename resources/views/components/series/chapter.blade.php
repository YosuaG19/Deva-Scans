<div id="reader" class="relative flex items-center w-full min-h-[100vh] h-fit">
    <div id="topControls" class="top-chapter-opt hidden fixed top-0 left-0 right-0 flex p-2 w-full bg-[#151515] items-center justify-center ">
        <div class="md:w-[80%] lg:w-[60%] w-full flex px-4 justify-between">
            <span class="flex gap-3 items-center">
                <a href="{{ route('home.view') }}" class="p-2 bg-[#FFD700] h-fit rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M160-120v-480l320-240 320 240v480H560v-280H400v280H160Z"/></svg>
                </a>
                <a href="{{ route('series.detail', $comic) }}" class="flex items-center gap-2">
                    <div class="h-[56px] aspect-3/4 rounded overflow-hidden">
                        @php
                            $path = $comic->cover_path
                        @endphp
                        <x-series.cardCover :path='$path' />
                    </div>
                    <span class="text-[.65rem] md:max-w-[250px] max-w-[120px] text-white font-thin">
                        <h2 class="text-[.7rem] opacity-50">{{$comic->title}}</h2>
                        <p class="comic-title md:max-w-[250px] max-w-[120px]">
                            <strong class="font-bold">Chapter {{$chapter->numbering}} </strong> 
                            @if (!empty($chapter->title))
                                - {{$chapter->title}}
                            @endif
                        </p>
                    </span>
                </a>
            </span>

            <span class="flex gap-2 items-center relative">
                {{-- <button class="p-2 bg-[#FFD700] h-fit rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240ZM330-120 120-330v-300l210-210h300l210 210v300L630-120H330Z"/></svg>
                </button> --}}
                <button id="pageOrientationBtn" class="cursor-pointer p-2 bg-[#FFD700] h-fit rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M480-160q-48-38-104-59t-116-21q-42 0-82.5 11T100-198q-21 11-40.5-1T40-234v-482q0-11 5.5-21T62-752q46-24 96-36t102-12q58 0 113.5 15T480-740v484q51-32 107-48t113-16q36 0 70.5 6t69.5 18v-480q15 5 29.5 10.5T898-752q11 5 16.5 15t5.5 21v482q0 23-19.5 35t-40.5 1q-37-20-77.5-31T700-240q-60 0-116 21t-104 59Zm80-200v-380l200-200v400L560-360Z"/></svg>
                </button>

                <div id="pageOrientationPanel" class="text-white hidden w-[30vw] md:w-[15vw] lg:w-[10vw] absolute top-full right-0 flex flex-col bg-[#252525] p-2 rounded overflow-hidden">
                    <button data-orientation="vertical" class="orientation-btn flex gap-1 text-[.65rem] items-center justify-center py-2 px-4 hover:bg-[#FFD700] hover:text-black">
                        Vertical
                    </button>
                    <button data-orientation="horizontal-western" class="orientation-btn flex gap-1 text-[.65rem] items-center justify-center py-2 px-4 hover:bg-[#FFD700] hover:text-black">
                        Horizontal
                    </button>
                    <button data-orientation="horizontal-japan" class="orientation-btn flex gap-1 text-[.65rem] items-center justify-center py-2 px-4 hover:bg-[#FFD700] hover:text-black">
                        Horizontal (JP)
                    </button>
                </div>
            </span>
        </div>
    </div>

    {{-- <a href="#watermark" class="animate-bounce fixed z-20 p-2 rounded-full right-4 bottom-2 bg-[#FFD700] flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#ffffff"><path d="M440-727 256-544l-56-56 280-280 280 280-56 57-184-184v287h-80v-287Zm0 487v-120h80v120h-80Zm0 160v-80h80v80h-80Z"/></svg>
    </a> --}}

    @php
        $prev = $chapter->numbering - 1;
        $next = $chapter->numbering + 1;
    @endphp

    <div id="bottomControls" class="bot-chapter-opt hidden fixed bottom-0 left-0 right-0 flex p-4 w-full bg-[#151515] items-center justify-center ">
        <div class="md:w-[80%] lg:w-[60%] w-full flex justify-around">
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

            
            <div class="relative">
                <button id="ch-list-btn" class="flex items-center rounded font-semibold text-xs text-[#858585] md:px-16 px-4 h-fit py-1.5 gap-2 bg-[#252525]">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#858585"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
                    {{ __('series.chapter') }} {{$chapter->numbering}}
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#858585"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>
                </button>

                <div id="ch-list" class="hidden absolute bottom-full bg-white my-2 flex flex-col rounded overflow-y-auto h-[20vh] w-full">
                    @foreach ($comic->chapters as $ch)
                        <a href="{{route('series.chapter', ['comic'=>$comic, 'chapter'=>$ch->numbering])}}"
                            class="ch-list-item {{$ch->numbering == $chapter->numbering ?'active' : ''}}">
                            {{ __('series.chapter') }} {{$ch->numbering}}

                            <div></div>
                        </a>
                    @endforeach
                </div>
            </div>

            @if ($next > $lc->numbering)
                <button type="button" disabled class="chapter-control-button-disabled md:px-4 px-2">
                    {{ __('series.next') }}
                    <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="13px" fill="#000000"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
                </button>
            @else
                <button
                    type="button" onclick="window.location.href='{{ route('series.chapter', ['comic'=>$comic, 'chapter'=>$next]) }}'"
                    class="chapter-control-button md:px-4 px-2">
                    {{ __('series.next') }}
                    <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="13px" fill="#000000"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
                </button>
            @endif

        </div>
    </div>


    @foreach ($chapter->panels as $panel)    
        <div class="panel relative w-full md:w-[80%] lg:w-fit lg:h-[100vh] aspect-2/3 bg-[#454545] md:mx-auto self-center flex items-center justify-center text-white border-[2px] border-white">
            <button class="opacity-0 transition-opacity duration-700 nextPanel w-[35%] h-full bg-[#FFD70020] absolute top-0 right-0"></button>
            <button class="opacity-0 transition-opacity duration-700 prevPanel w-[35%] h-full bg-[#FFD70020] absolute top-0 left-0"></button>
            {{$panel->page_number}}
        </div>
    @endforeach
</div>

