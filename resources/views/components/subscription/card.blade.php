<div id="join" class="mt-10 w-[90%] md:w-[80%] lg:w-[70%] flex flex-col gap-14 mx-auto bg-[#151515] rounded-xl items-center px-6 py-10 md:p-12">
    <h2 class="text-[#FFD700] text-xl md:text-3xl font-bold uppercase">Choose Your Plan</h2>

    <div class="w-full grid md:grid-cols-2 items-center justify-content-center gap-10">
        <div class="subs-card text-white relative flex flex-col py-10 px-4 rounded-lg items-center border-2 border-[#FFD700]">
            <span class="absolute -top-3 text-[#FFD700] font-bold uppercase bg-[#151515] rounded px-2">Monthly Enlightment</span>
            <div class="flex gap-1 items-end justify-center">
                <h3 class="text-4xl text-[#FFD700] font-semibold">$1.99</h3>
                <span class="text-sm">/ Month</span>
            </div>
            <a href="{{route('subscriptions.getSubs')}}" class="px-6 py-1 text-xs rounded absolute -bottom-4 bg-[#FFD700] text-black border-2 border-[#FFD700] hover:bg-[#151515] hover:text-[#FFD700] font-semibold">Get Monthly</a>
        </div>
    
        <div class="subs-card text-white relative flex flex-col py-10 px-4 rounded-lg items-center border-2 border-[#FFD700]">
            <span class="absolute -top-3 text-[#FFD700] font-bold uppercase bg-[#151515] rounded px-2">Yearly Enlightment</span>
            <div class="flex gap-1 items-end justify-center">
                <h3 class="text-4xl text-[#FFD700] font-semibold">$19.99</h3>
                <span class="text-sm">/ Year</span>
            </div>
            <a href="{{route('subscriptions.getSubs')}}" class="px-6 py-1 text-xs rounded absolute -bottom-4 bg-[#FFD700] text-black border-2 border-[#FFD700] hover:bg-[#151515] hover:text-[#FFD700] font-semibold">Get Yearly</a>
        </div>
    </div>
</div>