<div class="flex flex-col items-center justify-between mx-auto bg-[#252525] rounded-lg h-fit md:w-[80%] w-[95%] p-4 mt-6 gap-6">
    <div class="flex justify-between items-start w-[90%]">
        <a href="{{ route('series.chapter', $id-1)}}" class="flex items-center justify-center rounded font-semibold text-xs md:px-4 px-2 py-1.5 gap-2 bg-[#FFD700]">
            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px" fill="#000000"><path d="M640-80 240-480l400-400 71 71-329 329 329 329-71 71Z"/></svg>
            Prev
        </a>
        
        <span class="flex flex-col gap-2">
            <a href="{{ route('home.view') }}" class="flex items-center justify-center rounded font-semibold text-xs md:px-8 px-4 h-fit py-1.5 gap-2 bg-[#FFD700]">
                <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px" fill="#000000"><path d="M160-120v-480l320-240 320 240v480H560v-280H400v280H160Z"/></svg>
                Back to Home
            </a>

            <button class="flex items-center justify-center  rounded font-semibold text-xs md:px-8 px-4 h-fit py-1.5 gap-2 bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px" fill="#000000"><path d="M200-120v-640q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v640L480-240 200-120Zm80-122 200-86 200 86v-518H280v518Zm0-518h400-400Z"/></svg> 
                Bookmark
            </button>
        </span>

        <a href="{{ route('series.chapter', $id+1) }}" class="flex items-center justify-center rounded font-semibold text-xs md:px-4 px-2 py-1.5 gap-2 bg-[#FFD700]">
            Next
            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px" fill="#000000"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
        </a>
    </div>

    <div class="flex flex-col items-center w-full gap-8">
        <span class="flex flex-col item-center text-center text-white">
            <h2 class="text-sm font-semibold">What do you think about this chapter?</h2>
            <p class="text-[.55rem]">xxx reactions</p>
        </span>

        <div class="grid md:grid-cols-6 grid-cols-3 gap-y-4 w-full">
            <span class="flex flex-col items-center text-white gap-.5">
                <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#FFD700"><path d="M720-120H320v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h218q32 0 56 24t24 56v80q0 7-1.5 15t-4.5 15L794-168q-9 20-30 34t-44 14ZM240-640v520H80v-520h160Z"/></svg>
                <p class="text-sm">xxx</p>
                <label class="font-thin text-[.55rem]">Upvote</label>
            </span>
            
            <span class="flex flex-col items-center text-white gap-.5">
                <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#FFD700"><path d="M240-840h400v520L360-40l-50-50q-7-7-11.5-19t-4.5-23v-14l44-174H120q-32 0-56-24t-24-56v-80q0-7 1.5-15t4.5-15l120-282q9-20 30-34t44-14Zm480 520v-520h160v520H720Z"/></svg>
                <p class="text-sm">xxx</p>
                <label class="font-thin text-[.55rem]">Downvote</label>
            </span>

            <span class="flex flex-col items-center text-white gap-.5">
                <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#FFD700"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg>
                <p class="text-sm">xxx</p>
                <label class="font-thin text-[.55rem]">Love</label>
            </span>

            <span class="flex flex-col items-center text-white gap-.5">
                <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#FFD700"><path d="M160-400q0-105 50-187t110-138q60-56 110-85.5l50-29.5v132q0 37 25 58.5t56 21.5q17 0 32.5-7t28.5-23l18-22q72 42 116 116.5T800-400q0 88-43 160.5T644-125q17-24 26.5-52.5T680-238q0-40-15-75.5T622-377L480-516 339-377q-29 29-44 64t-15 75q0 32 9.5 60.5T316-125q-70-42-113-114.5T160-400Zm320-4 85 83q17 17 26 38t9 45q0 49-35 83.5T480-120q-50 0-85-34.5T360-238q0-23 9-44.5t26-38.5l85-83Z"/></svg>
                <p class="text-sm">xxx</p>
                <label class="font-thin text-[.55rem]">Fire</label>
            </span>

            <span class="flex flex-col items-center text-white gap-.5">
                <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#FFD700"><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm60-444 20-12q2 24 19 40t41 16q25 0 42.5-17.5T680-540q0-15-7-28.5T654-590l26-15-20-35-140 80 20 36Zm-120 0 20-36-140-80-20 35 26 15q-12 8-19 21.5t-7 28.5q0 25 17.5 42.5T340-480q24 0 41-16t19-40l20 12Zm60 84q-71 0-125 45.5T279-280h402q-22-69-76-114.5T480-440Z"/></svg>
                <p class="text-sm">xxx</p>
                <label class="font-thin text-[.55rem]">Angry</label>
            </span>

            <span class="flex flex-col items-center text-white gap-.5">
                <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#FFD700"><path d="M250-320h60v-10q0-71 49.5-120.5T480-500q71 0 120.5 49.5T650-330v10h60v-10q0-96-67-163t-163-67q-96 0-163 67t-67 163v10Zm34-270q41-6 86.5-32t72.5-59l-46-38q-20 24-55.5 44T276-650l8 60Zm392 0 8-60q-30-5-65.5-25T563-719l-46 38q27 33 72.5 59t86.5 32ZM324-111.5Q251-143 197-197t-85.5-127Q80-397 80-480t31.5-156Q143-709 197-763t127-85.5Q397-880 480-880t156 31.5Q709-817 763-763t85.5 127Q880-563 880-480t-31.5 156Q817-251 763-197t-127 85.5Q563-80 480-80t-156-31.5Z"/></svg>
                <p class="text-sm">xxx</p>
                <label class="font-thin text-[.55rem]">Sad</label>
            </span>
        </div>
    </div>

</div>