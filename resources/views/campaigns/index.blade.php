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
            @foreach ($campaigns as $campaign)
            <div class="bg-white rounded-xl">
                <div class="bg-cover bg-center">
                    <img class="w-full rounded-t-xl" src="{{ asset('storage/' . $campaign->image) }}" alt="img-campaign">
                </div>
                <div class="px-6 py-3 space-y-2">
                    <div class="space-y-2">
                        <p class="text-[#101828] text-lg hover:text-[#155DFC]">{{$campaign->title}}</p>
                        <p class="text-[#4A5565] text-sm line-clamp-3">{{$campaign->description}}</p>
                    </div>
                    <div class="space-y-4">
                        <div class="space-y-1">
                            <div class="flex items-center justify-between">
                                <p class="text-[#6A7282] text-sm">Fundraising Progress</p>
                                <p class="text-[#155DFC] text-sm">{{$campaign->fundraising_progress}}%</p>
                            </div>
                            <div class="h-2 w-full bg-[#F3F4F6] rounded-full">
                                <div 
                                    class="h-2 bg-clip-padding bg-gradient-to-r from-blue-800 to-violet-500 rounded-full"
                                    style="width: {{$campaign->fundraising_progress}}"
                                >
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="space-y-1">
                                <p class="text-xs text-[#6A7282]">Raised</p>
                                <p class="text-[#155DFC] text-sm font-semibold">Rp {{ number_format($campaign->current_amount, 0, ',', '.') }}</p>
                            </div>
                            <div class="space-y-1">
                                <p class="text-xs text-[#6A7282]">Target</p>
                                <p class="text-[#364153] text-sm font-semibold">Rp {{ number_format($campaign->target_amount, 0, ',', '.') }}</p>
                            </div>
                        </div>
                        <div class="py-2 flex items-center justify-between border-b">
                            <div class="flex items-center gap-2">
                                <i class="bi bi-person-heart text-gray-400"></i>
                                <p class="text-[#6A7282] text-sm">{{$campaign->donation_count}} donors</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="bi bi-calendar-fill text-gray-400"></i>
                                <p class="text-[#6A7282] text-sm">{{$campaign->days_left}} days left</p>
                            </div>
                        </div>
                        <a
                            href="/campaigns/{{$campaign->id}}"
                            class="block w-full py-3 bg-[#4F39F6] hover:bg-[#3B2AD9] active:bg-[#4F39F6] rounded-lg text-center"
                            >
                            <span class="text-base text-white">Donate Now</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>