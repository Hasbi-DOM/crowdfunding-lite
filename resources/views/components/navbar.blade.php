<div class="shadow w-full px-8 py-4 bg-white flex items-center justify-between">
    <div class="flex items-center gap-3">
        <div class="w-fit py-1 px-2 rounded-lg bg-clip-padding bg-gradient-to-r from-blue-800 to-violet-500">
            <i class="bi bi-chat-heart text-white text-xl"></i>
        </div>
        <p class="font-extrabold text-xl bg-clip-text text-transparent bg-gradient-to-r from-blue-800 to-violet-500">
            CrowdfundingLite
        </p>
    </div>
    <a 
        href="/campaign" 
        x-data
        x-show="window.location.pathname !== '/campaign'"
        class="px-4 py-2 bg-[#4F39F6] hover:bg-[#3B2AD9] active:bg-[#4F39F6] rounded-lg"
    >
        <p class="text-sm text-white">
            + New Campaign
        </p>
    </a>
</div>