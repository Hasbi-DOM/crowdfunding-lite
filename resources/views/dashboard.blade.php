<x-layout>
    <div class="w-full flex flex-col items-center gap-8">
        <div class="w-1/2 flex flex-col items-center">
            <div class="w-fit mb-3 py-2 px-4 rounded-lg bg-clip-padding text-transparent bg-gradient-to-r from-blue-800 to-violet-500">
                <i class="bi bi-chat-heart text-white text-4xl"></i>
            </div>
            <p class="mb-3 text-base bg-clip-text text-transparent bg-gradient-to-r from-blue-800 to-violet-500">Donation Campaign</p>
            <p class="mb-6 text-lg text-[#4A5565]">Together, let’s make a difference by helping those in need</p>
            <div class="w-full flex items-center gap-2 rounded-xl bg-white px-3 py-1 outline-1 -outline-offset-1 outline-gray-300">
              <div class="shrink-0 text-base select-none sm:text-sm/6 ">
                <i class="bi bi-search text-gray-400"></i>
              </div>
              <input id="campaign" type="search" name="campaign" placeholder="Search campaign title..." class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
            </div>
        </div>
        <div class="w-full grid grid-cols-3 gap-6">
            <div class="bg-white rounded-xl">
                <div class="bg-cover bg-center">
                    <img class="w-full rounded-t-xl" src="/img/Image1.svg" alt="img-campaign">
                </div>
                <div class="px-6 py-3 space-y-2">
                    <div class="space-y-2">
                        <p class="text-[#101828] text-lg hover:text-[#155DFC]">Bantu Korban Banjir Jakarta</p>
                        <p class="text-[#4A5565] text-sm line-clamp-3">Kampanye untuk membantu korban banjir di Jakarta. Dana akan digunakan untuk membeli makanan, pakaian, dan kebutuhan sehari-hari bagi para korban yang kehilangan tempat tinggal.</p>
                    </div>
                    <div class="space-y-4">
                        <div class="space-y-1">
                            <div class="flex items-center justify-between">
                                <p class="text-[#6A7282] text-sm">Dana Terkumpul</p>
                                <p class="text-[#155DFC] text-sm">70%</p>
                            </div>
                            <div class="h-2 w-full bg-[#F3F4F6] rounded-full">
                                <div class="h-2 w-8 bg-clip-padding bg-gradient-to-r from-blue-800 to-violet-500 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="space-y-1">
                                <p class="text-xs text-[#6A7282]">Terkumpul</p>
                                <p class="text-[#155DFC] text-sm font-semibold">Rp 35.000.000</p>
                            </div>
                            <div class="space-y-1">
                                <p class="text-xs text-[#6A7282]">Target</p>
                                <p class="text-[#364153] text-sm font-semibold">Rp 35.000.000</p>
                            </div>
                        </div>
                        <div class="py-2 flex items-center justify-between border-b">
                            <div class="flex items-center gap-2">
                                <i class="bi bi-person-heart text-gray-400"></i>
                                <p class="text-[#6A7282] text-sm">2 donatur</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="bi bi-calendar-fill text-gray-400"></i>
                                <p class="text-[#6A7282] text-sm">39 hari lagi</p>
                            </div>
                        </div>
                        <button class="w-full py-3 bg-[#4F39F6] hover:bg-[#3B2AD9] active:bg-[#4F39F6] rounded-lg">
                            <p class="text-base text-white">Donasi Sekarang</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>