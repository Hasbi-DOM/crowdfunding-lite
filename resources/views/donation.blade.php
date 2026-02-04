<x-layout>
    <div class="w-full space-y-6">
        <a href="/" class="flex items-center gap-2 text-gray-500 hover:text-gray-700">
            <i class="bi bi-arrow-left"></i>
            <span class="text-base">Back to campaign list</span>
        </a>
        <div class="relative w-full flex justify-between gap-6">
            <div class="w-2/3 space-y-6">
                <div class="bg-white rounded-lg space-y-2 pb-6 shadow">
                    <div>
                        <img class="w-full rounded-t-lg" src="/img/Image1.svg" alt="">
                    </div>
                    <div class="py-2 px-4 space-y-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-base">Bantu Pendidikan Anak Dhuafa</p>
                                <div class="flex items-center gap-2">
                                    <i class="bi bi-calendar-fill text-gray-400"></i>
                                    <p class="text-[#6A7282] text-sm">39 hari lagi</p>
                                </div>
                            </div>
                            <div class="w-fit py-2 px-4 bg-green-500 flex items-center gap-2 rounded-full">
                                <i class="bi bi-check-circle text-white"></i>
                                <p class="text-white text-sm">Target Tercapai</p>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <p class="text-[#364153] text-base">Fundraising Progress</p>
                                <p class="text-[#155DFC] text-lg">100%</p>
                            </div>
                            <div class="h-3 w-full bg-[#F3F4F6] rounded-full">
                                <div class="h-3 w-full bg-clip-padding bg-gradient-to-r from-[#00C950] to-[#00BC7D] rounded-full"></div>
                            </div>
                        </div>
                        <div class="w-full flex items-center justify-between gap-4">
                            <div class="space-y-1 w-1/2 p-5 bg-clip-padding bg-gradient-to-r from-[#EFF6FF] to-[#DBEAFE] rounded-lg">
                                <p class="text-[#4A5565] text-sm font-medium">Funds Raised</p>
                                <p class="text-[#155DFC] text-2xl font-bold">Rp 75.000.000</p>
                            </div>
                            <div class="space-y-1 w-1/2 p-5 bg-clip-padding bg-gradient-to-r from-[#F9FAFB] to-[#F3F4F6] rounded-lg">
                                <p class="text-[#4A5565] text-sm font-medium">Funding Goal</p>
                                <p class="text-[#364153] text-2xl font-bold">Rp 75.000.000</p>
                            </div>
                        </div>
                        <div class="w-full border-t pt-6 space-y-2">
                            <p class="text-[#0A0A0A] text-base">Description</p>
                            <p class="text-[#364153] text-sm">Dana untuk merenovasi panti asuhan yang sudah tidak layak huni. Meliputi perbaikan atap, kamar mandi, dan ruang belajar anak-anak.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-6 space-y-6 shadow">
                    <p class="text-[#0A0A0A] text-base">Donation Account Details</p>
                    <div class="space-y-3">
                        <div class="p-4 bg-[#F9FAFB] flex items-start gap-3 rounded-lg">
                            <i class="bi bi-bank text-blue-500"></i>
                            <div class="space-y-1">
                                <p class="text-[#4A5565] text-sm">Bank Name</p>
                                <p class="text-[#101828] text-base font-semibold">BRI</p>
                            </div>
                        </div>
                        <div class="p-4 bg-[#F9FAFB] flex items-start gap-3 rounded-lg">
                            <i class="bi bi-credit-card text-blue-500"></i>
                            <div class="space-y-1">
                                <p class="text-[#4A5565] text-sm">Account Number</p>
                                <p class="text-[#101828] text-base font-semibold">5555666677</p>
                            </div>
                        </div>
                        <div class="p-4 bg-[#F9FAFB] flex items-start gap-3 rounded-lg">
                            <i class="bi bi-credit-card text-blue-500"></i>
                            <div class="space-y-1">
                                <p class="text-[#4A5565] text-sm">Account Holder</p>
                                <p class="text-[#101828] text-base font-semibold">Ahmad Yusuf</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 border border-[#FFF085] bg-clip-padding bg-gradient-to-r from-[#FEFCE8] to-[#FFF7ED] rounded-lg">
                        <div class="space-y-2">
                            <p class="text-[#1E2939] text-sm font-bold">💡 How to Donate:</p>
                            <p class="text-[#1E2939] text-sm">Please transfer to the bank account above, then complete the donation form.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky top-0 w-1/3 bg-white rounded-lg p-6 space-y-6 h-fit shadow">
                <p class="text-lg text-[#0A0A0A] font-semibold">Donation Form</p>
                <div class="space-y-6">
                    <div class="space-y-2">
                        <p class="text-[#364153] text-sm">Name (Optional)</p>
                        <div class="w-full flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-3 py-1 outline-1 -outline-offset-1 outline-gray-300">
                            <div class="shrink-0 text-base select-none sm:text-sm/6 ">
                                <i class="bi bi-person text-gray-400 text-base"></i>
                            </div>
                            <input id="name" type="text" name="namse" placeholder="Anonymous" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                        </div>
                        <p class="text-xs text-[#6A7282]">Leave blank if you wish to donate anonymously.</p>
                    </div>
                    <div class="space-y-2">
                        <div class="flex gap-1">
                            <p class="text-[#364153] text-sm">Donation Amount</p>
                            <p class="text-[#FB2C36] text-sm">*</p>
                        </div>
                        <div class="w-full flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-3 py-1 outline-1 -outline-offset-1 outline-gray-300">
                            <div class="shrink-0 text-base select-none sm:text-sm/6 ">
                                <p class="text-base font-medium text-[#6A7282]">Rp</p>
                            </div>
                            <input id="amount" type="text" name="amount" placeholder="0" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                        </div>
                    </div>
                    <div class="space-y-2">
                        <p class="text-[#364153] text-sm">Message or Prayer (Optional)</p>
                        <div class="w-full flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-3 py-1 outline-1 -outline-offset-1 outline-gray-300">
                            <textarea id="message" type="text" name="message" placeholder="Write a message of support or a prayer…" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base placeholder:text-gray-400 focus:outline-none sm:text-sm/6" ></textarea>
                        </div>
                    </div>
                </div>
                <button
                    class="block w-full py-3 bg-[#4F39F6] hover:bg-[#3B2AD9] active:bg-[#4F39F6] rounded-lg text-center"
                    >
                        <p class="text-base text-white">Donate Now</p>
                </button>
            </div>
        </div>
    </div>
</x-layout>