<div id="reader" class="flex flex-col items-center relative w-full min-h-[100vh] h-fit">
    <div id="topControls" class="top-chapter-opt opacity-0 fixed top-0 left-0 right-0 flex p-2 w-full bg-[#252525] items-center justify-center ">
        <div class="md:w-[50%] flex w-full px-4 justify-between">
            <span class="flex gap-3 items-center">
                <a href="{{ route('home.view') }}" class="p-2 bg-[#FFD700] h-fit rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M160-120v-480l320-240 320 240v480H560v-280H400v280H160Z"/></svg>
                </a>
                <a href="{{ route('series.detail') }}" class="flex items-center gap-2">
                    <div class="h-[56px] aspect-3/4 rounded overflow-hidden">
                        @include('components.series.cardCover')
                    </div>
                    <span class="text-[.65rem] md:max-w-[250px] max-w-[120px] text-white font-thin">
                        <h2 class="text-[.7rem]">Title here</h2>
                        <p class="comic-title md:max-w-[250px] max-w-[120px]">
                            <strong class="font-bold">Chapter XX</strong> - Chapter Title Here and some explaination
                        </p>
                    </span>
                </a>
            </span>

            <span class="flex gap-2 items-center">
                <button class="p-2 bg-[#FFD700] h-fit rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240ZM330-120 120-330v-300l210-210h300l210 210v300L630-120H330Z"/></svg>
                </button>
                <button class="p-2 bg-[#FFD700] h-fit rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M480-160q-48-38-104-59t-116-21q-42 0-82.5 11T100-198q-21 11-40.5-1T40-234v-482q0-11 5.5-21T62-752q46-24 96-36t102-12q58 0 113.5 15T480-740v484q51-32 107-48t113-16q36 0 70.5 6t69.5 18v-480q15 5 29.5 10.5T898-752q11 5 16.5 15t5.5 21v482q0 23-19.5 35t-40.5 1q-37-20-77.5-31T700-240q-60 0-116 21t-104 59Zm80-200v-380l200-200v400L560-360Z"/></svg>
                </button>
            </span>
        </div>
    </div>
    <div id="bottomControls" class="bot-chapter-opt opacity-0 fixed bottom-0 left-0 right-0 flex p-4 w-full bg-[#252525] items-center justify-center ">
        <div class="md:w-[50%] w-full flex justify-around">
            <a href="{{ route('series.chapter', $id-1)}}" class="flex items-center rounded font-semibold text-xs md:px-4 px-2 py-1.5 gap-2 bg-[#FFD700]">
                <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px" fill="#000000"><path d="M640-80 240-480l400-400 71 71-329 329 329 329-71 71Z"/></svg>
                Prev
            </a>
            
            <button class="flex items-center rounded font-semibold text-xs md:px-8 px-4 h-fit py-1.5 gap-2 bg-[#FFD700]">
                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
                Chapter xx
                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>
            </button>

            <a href="{{ route('series.chapter', $id+1) }}" class="flex items-center rounded font-semibold text-xs md:px-4 px-2 py-1.5 gap-2 bg-[#FFD700]">
                Next
                <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px" fill="#000000"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
            </a>
        </div>
    </div>


    @for ($i = 0; $i < 10; $i++)
        <div class=" w-full md:w-[80%]  lg:w-fit lg:h-[100vh] aspect-2/3 bg-[#454545] flex items-center justify-center text-white border-[2px] border-white     ">
            {{$i}}
        </div>
    @endfor
</div>

