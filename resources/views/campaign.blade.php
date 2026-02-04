<x-layout>
    <div class="w-full flex flex-col items-center">
        <div class="w-3/4 space-y-6">
            <a href="/" class="flex items-center gap-2 text-gray-500 hover:text-gray-700">
                <i class="bi bi-arrow-left"></i>
                <span class="text-base">Back to campaign list</span>
            </a>
            <div class="bg-white shadow rounded-lg p-8 space-y-6">
                <p class="text-2xl text-[#0A0A0A]">Create a New Donation Campaign</p>
                <div>
                    <div class="space-y-2">
                        <div class="flex gap-1">
                            <p class="text-[#364153] text-sm">Title</p>
                            <p class="text-[#FB2C36] text-sm">*</p>
                        </div>
                        <div class="w-full flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-3 py-1 outline-1 -outline-offset-1 outline-gray-300">
                            <input id="title" type="text" name="title" placeholder="Example: Support Education for Underprivileged Children" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex gap-1">
                            <p class="text-[#364153] text-sm">Description</p>
                            <p class="text-[#FB2C36] text-sm">*</p>
                        </div>
                        <div class="w-full flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-3 py-1 outline-1 -outline-offset-1 outline-gray-300">
                            <textarea 
                                id="desc" 
                                type="text" 
                                name="desc" 
                                rows="5"
                                placeholder="Explain the campaign’s purpose, how the funds will be used, and any other important information…" 
                                class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base placeholder:text-gray-400 focus:outline-none sm:text-sm/6"></textarea>
                        </div>
                    </div>
                    <div class="flex items-center gap-6 justify-between">
                        <div class="w-full space-y-2">
                            <div class="flex gap-1">
                                <p class="text-[#364153] text-sm">Donation Target</p>
                                <p class="text-[#FB2C36] text-sm">*</p>
                            </div>
                            <div class="w-full flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-3 py-1 outline-1 -outline-offset-1 outline-gray-300">
                                <div class="shrink-0 text-base select-none sm:text-sm/6 ">
                                    <p class="text-base font-medium text-[#6A7282]">Rp</p>
                                </div>
                                <input id="target" type="text" name="target" placeholder="5000000" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                            </div>
                        </div>
                        <div class="w-full space-y-2">
                            <label for="Category" class="flex gap-1">
                                <p class="text-[#364153] text-sm">Category</p>
                                <p class="text-[#FB2C36] text-sm">*</p>
                            </label>
                            <div 
                                x-data="{ val: '' }"
                                class="w-full flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-3 py-1 outline-1 -outline-offset-1 outline-gray-300"
                            >
                                <select 
                                        id="country" 
                                        name="country" 
                                        aria-placeholder="Select category.." 
                                        autocomplete="country-name" 
                                        x-model="val"
                                        :class="val === '' ? 'text-gray-400' : 'text-black'"
                                        class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base focus:outline-none sm:text-sm/6"
                                    >
                                    <option value="" disabled selected hidden>
                                        Select category...
                                    </option>
                                    <option value="1">Bencana</option>
                                    <option value="2">Pendidikan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex gap-1">
                            <p class="text-[#364153] text-sm">End Date</p>
                            <p class="text-[#FB2C36] text-sm">*</p>
                        </div>
                        <div class="w-full flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-3 py-1 outline-1 -outline-offset-1 outline-gray-300">
                            <input id="date" type="date" name="date" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base focus:outline-none sm:text-sm/6" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
