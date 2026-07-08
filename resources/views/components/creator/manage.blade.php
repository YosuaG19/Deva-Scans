<div class="flex flex-col lg:flex-row w-[95%] gap-4 m-auto mt-[1.5rem]">
    <div class="w-full  lg:w-[40%] flex flex-col md:flex-row lg:flex-col gap-4 mx-auto">
        
        <div class="bg-[#252525] p-4 rounded-lg flex flex-col gap-4">
            <h2 class="text-[#FFD700] text-sm font-semibold uppercase">Comic Details</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex mx-auto w-[70%] md:w-full aspect-[3/4]">
                    @include('components.series.cardCover')
                </div>

                <div class="flex w-full flex-col gap-2">
                    <span class="input-label">
                        <label for="comic-title">Title<small class="text-red-500">*</small></label>
                        <input name="title" type="text" placeholder="Enter comic title" required/>   
                    </span>

                    <span class="input-label">
                        <label for="author-name">Author/Artist<small class="text-red-500">*</small></label>
                        <input name="author" type="text" placeholder="Enter author or artist name" required/>   
                    </span>

                    <span class="input-label relative">
                        <label for="select-genre">Genre<small class="text-red-500">*</small></label>
                        <button id="select-genre" class="relative flex justify-between items-center cursor-pointer">
                            <span id="selected-genres-text", class="comic-title text-left">
                                Select Comic Genre
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#FFFFFF"><path d="m480-360 160-160H320l160 160Zm0 280q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                        </button>
                        <x-creator.select-genre :genres='$genres'/>
                    </span>

                    <span class="input-label relative">
                        <label for="select-language">Language<small class="text-red-500">*</small></label>
                        <button id="select-language" class="relative flex justify-between items-center cursor-pointer">
                            <span id="selected-language-text">
                                Select Comic Language
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#FFFFFF"><path d="m480-360 160-160H320l160 160Zm0 280q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                        </button>
                        <x-creator.select-language/>
                    </span>
                </div>
            </div>

            <span class="input-label">
                <label for="comic-description">Description <small class="text-red-500">*</small></label>
                <textarea name="description" id="comic-description" cols="30" rows="5" placeholder="Enter comic description" required></textarea>   
            </span>
        </div>

        <div class="bg-[#252525] p-4 rounded-lg flex h-fit flex-col gap-4">
            <h2 class="text-red-500 text-sm font-semibold uppercase">Danger Zone</h2>

            <span class="flex items-center justify-center gap-4 px-8 py-4 border-[1px] border-[#FF0000] bg-[#FF000030] rounded-lg">
                <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.1606 1.03991C13.347 0.723736 13.6151 0.461183 13.938 0.278641C14.2609 0.0960995 14.6272 0 15 0C15.3728 0 15.7391 0.0960995 16.062 0.278641C16.3849 0.461183 16.653 0.723736 16.8394 1.03991L29.7154 22.88C29.9019 23.1962 30 23.5549 30 23.92C30 24.2851 29.9019 24.6438 29.7154 24.96C29.529 25.2762 29.2609 25.5387 28.938 25.7213C28.6151 25.9039 28.2488 26 27.876 26H2.124C1.75115 26 1.38488 25.9039 1.06199 25.7213C0.739102 25.5387 0.470973 25.2762 0.284555 24.96C0.0981373 24.6438 -2.36796e-06 24.2851 0 23.92C2.36804e-06 23.5549 0.0981468 23.1962 0.284569 22.88L13.1606 1.03991ZM15 18.72C14.4367 18.72 13.8964 18.9391 13.4981 19.3292C13.0997 19.7193 12.8759 20.2483 12.8759 20.8C12.8759 21.3516 13.0997 21.8807 13.4981 22.2708C13.8964 22.6608 14.4367 22.88 15 22.88C15.5633 22.88 16.1036 22.6608 16.5019 22.2708C16.9003 21.8807 17.1241 21.3516 17.1241 20.8C17.1241 20.2483 16.9003 19.7193 16.5019 19.3292C16.1036 18.9391 15.5633 18.72 15 18.72ZM15 6.23993C14.4367 6.23993 13.8964 6.45907 13.4981 6.84915C13.0997 7.23923 12.8759 7.76829 12.8759 8.31994V14.56C12.8759 15.1116 13.0997 15.6407 13.4981 16.0307C13.8964 16.4208 14.4367 16.64 15 16.64C15.5633 16.64 16.1036 16.4208 16.5019 16.0307C16.9003 15.6407 17.1241 15.1116 17.1241 14.56V8.31994C17.1241 7.76829 16.9003 7.23923 16.5019 6.84915C16.1036 6.45907 15.5633 6.23993 15 6.23993Z" fill="white"/>
                </svg>

                <p class="text-[.65rem] text-white">
                    Deleting a comic will permanently delete all its data and chapters. This action can not be undone.
                </p>

            </span>

            <button class="border-[1px] border-[#FF0000] text-[#FF0000] px-4 py-2 rounded-lg text-xs cursor-pointer hover:bg-[#FF000030] hover:text-white transition-all">
                Delete Comic
            </button>
        </div>

    </div>


    <div class="w-full lg:w-[60%] flex flex-col overflow-y-auto h-fit p-4 rounded-lg bg-[#252525] gap-4">
        <div class="flex items-end gap-4"">
            <span class="input-label">
                <label for="comic-title">Chapter Title (Optional)</label>
                <input name="title" type="text" placeholder="Enter chapter title" required/>   
            </span>

            <button type="submit" class="h-fit px-8 py-1.5 text-xs border-[2px] border-[#FFD700] text-[#FFD700] rounded hover:bg-[#FFD700] hover:text-black">Submit</button>
        </div>

        <div id="preview" class="panel-layout">
            <label id="panel-zone" class="h-fit items-center justify-center aspect-[3/4] relative">
                <div id="placeholder" class="absolute text-center text-[#8c8c8c] text-[.6rem]">
                    <p>Drop image here</p>
                    <p>or click to upload</p>
                </div>

                <input type="file" id="file-input" class="hidden" multiple accept="image/*" />
            </label>

            
            {{-- @for ($i = 12; $i > 0; $i--)
                <div class="flex w-full h-fit aspect-[3/4] relative">
                    @include('components.series.cardCover')
                    
                    <span class="absolute top-2 right-2 h-[25px] w-[25px] flex items-center gap-1 justify-center text-xs font-bold uppercase text-black p-1 bg-[#FFD700] rounded">
                        {{$i}}
                    </span>
                </div>
            @endfor --}}
        </div>
    </div>
</div>