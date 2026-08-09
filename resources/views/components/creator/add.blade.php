<div class="flex flex-col lg:flex-row w-[95%] gap-4 m-auto mt-[1.5rem]">
    <div class="w-full md:w-[60%] lg:w-[30%] bg-[#252525] mx-auto p-4 rounded-lg flex flex-col gap-4">       
        <div class="flex justify-between items-end gap-2">
            <span class="flex flex-col">
                <h2 class="text-[#FFD700] text-sm font-semibold uppercase">Comic Cover</h2>
                <p class="text-[#8c8c8c] text-[.6rem]">
                    Upload an image for your comic cover
                </p>
            </span>
            
            <button id="clear-btn" class="hidden px-4 py-1 bg-red-600 text-white rounded text-[.6rem]">
                Clear
            </button>
        </div>

        <label id="drop-zone">
            <div id="placeholder" class="text-center text-[#8c8c8c] text-[.6rem]">
                <p>Drop image here</p>
                <p>or click to upload</p>
            </div>

            <img id="preview-image" class="hidden w-full h-full object-cover"/>

            <input type="file" id="file-input" accept="image/*" class="hidden"/>
        </label>
    </div>


    <form method="POST" action="{{route('creator.addComic')}}" class="w-full lg:w-[70%] flex flex-col justify-between p-4 rounded-lg bg-[#252525] gap-4">
        @csrf
        <span class="flex flex-col">
            <h2 class="text-[#FFD700] text-sm font-semibold uppercase">Comic Details</h2>
            <p class="text-[#8c8c8c] text-[.6rem]">
                Fill in the details of your comic
            </p>
        </span>

        <div class="flex flex-col gap-2">
            <div class="flex flex-col gap-2 md:flex-row md:gap-4 lg:flex-col">
                <span class="input-label">
                    <label for="comic-title">Title<small class="text-red-500">*</small></label>
                    <input name="title" type="text" placeholder="Enter comic title" required/>   
                </span>
    
                <span class="input-label">
                    <label for="artist-name">Artist<small class="text-red-500">*</small></label>
                    <input name="artist" type="text" placeholder="Enter author or artist name" required/>   
                </span>
            </div>

            <span class="input-label">
                <label for="comic-description">Description <small class="text-red-500">*</small></label>
                <textarea class="resize-none" maxlength="400" name="description" id="comic-description" cols="30" rows="5" placeholder="Enter comic description" required></textarea>   
            </span>

            <div class="grid md:grid-cols-2 md:gap-4 gap-2">
                <span class="input-label relative">
                    <label for="select-genre">Genre<small class="text-red-500">*</small></label>
                    <div id="select-genre" class="input-trigger relative flex justify-between items-center cursor-pointer">
                        <span id="selected-genres-text", class="comic-title text-left">
                            Select Comic Genre
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#FFFFFF"><path d="m480-360 160-160H320l160 160Zm0 280q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                    </div>
                    <x-creator.select-genre :genres='$genres'/>
                </span>

                <span class="input-label relative">
                    <label for="select-day">Day Updated<small class="text-red-500">*</small></label>
                    <div id="select-day" class="input-trigger relative flex justify-between items-center cursor-pointer">
                        <span id="selected-day-text">
                            Select Comic Updated Day
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#FFFFFF"><path d="m480-360 160-160H320l160 160Zm0 280q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                    </div>
                    <x-creator.select-day/>
                </span>
            </div>

        </div>
        <div class="flex justify-end items-center gap-2">
            <a href="{{ route('creator.view') }}" class="px-6 py-1 text-xs border-[2px] border-white text-white rounded hover:bg-white hover:text-black">Cancel</a>
            <button type="submit" class="px-6 py-1 text-xs border-[2px] border-[#FFD700] text-[#FFD700] rounded hover:bg-[#FFD700] hover:text-black">Submit</button>
        </div>

    </form>
</div>