<x-layout>
    <div class="w-full flex flex-col items-center">
        <div class="w-3/4 space-y-6">
            <a href="/" class="flex items-center gap-2 text-gray-500 hover:text-gray-700">
                <i class="bi bi-arrow-left"></i>
                <span class="text-base">Back to campaign list</span>
            </a>
            <div class="bg-white shadow rounded-lg p-8 space-y-6">
                <p class="text-2xl text-[#0A0A0A]">Create a New Donation Campaign</p>
                <form
                    action="{{ route('campaigns.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                    class="space-y-4"
                >
                    @csrf
                    <div class="space-y-2">
                        <label for="cover-photo" class="block flex gap-1">
                            <p class="text-[#364153] text-sm">Cover Photo</p>
                            <p class="text-[#FB2C36] text-sm">*</p>
                        </label>
                        <div 
                            x-data="{ imagePreview: null }"
                            class="mt-2 flex justify-center rounded-xl border border-gray-200 px-6 py-10"
                        >
                            <div class="w-full">
                                <!-- BEFORE UPLOAD -->
                                <div class="text-center" x-show="!imagePreview">
                                    <svg viewBox="0 0 24 24" fill="currentColor" data-slot="icon" aria-hidden="true" class="mx-auto size-12 text-gray-300"> 
                                        <path d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" fill-rule="evenodd" /> 
                                    </svg>
                                    <div class="mt-4 flex text-sm text-gray-600 justify-center">
                                        <label class="cursor-pointer font-semibold text-indigo-600 hover:text-indigo-500">
                                            <span>Upload a file</span>
                                            <input 
                                                type="file" 
                                                name="image"
                                                class="sr-only"
                                                accept="image/*"
                                                @change="
                                                    const file = $event.target.files[0];
                                                    if (file) imagePreview = URL.createObjectURL(file);
                                                "
                                            >
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>

                                    <p class="text-xs text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                </div>

                                <!-- AFTER UPLOAD -->
                                <div x-show="imagePreview" class="relative">
                                    <img 
                                        :src="imagePreview" 
                                        class="mx-auto max-h-64 rounded-lg object-cover"
                                    >
                                    <button
                                        type="button"
                                        @click="imagePreview = null"
                                        class="absolute top-2 right-2 bg-black/60 text-white rounded-full px-3 py-1 text-xs"
                                    >
                                        Change
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                id="description" 
                                type="text" 
                                name="description" 
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
                                <input id="target_amount" type="text" name="target_amount" placeholder="5000000" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
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
                                        id="category" 
                                        name="category" 
                                        aria-placeholder="Select category.." 
                                        autocomplete="country-name" 
                                        x-model="val"
                                        :class="val === '' ? 'text-gray-400' : 'text-black'"
                                        class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base focus:outline-none sm:text-sm/6"
                                    >
                                    <option value="" disabled selected hidden>
                                        Select category...
                                    </option>
                                    <option value="Bencana">Bencana</option>
                                    <option value="Pendidikan">Pendidikan</option>
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
                            <input id="end_date" type="date" name="end_date" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base focus:outline-none sm:text-sm/6" />
                        </div>
                    </div>
                    <div class="border-t space-y-4 pt-4">
                        <p class="text-[#0A0A0A] text-base font-medium">Recipient Bank Account Information</p>
                        <div class="space-y-2">
                            <div class="flex gap-1">
                                <p class="text-[#364153] text-sm">Bank Name</p>
                                <p class="text-[#FB2C36] text-sm">*</p>
                            </div>
                            <div class="w-full flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-3 py-1 outline-1 -outline-offset-1 outline-gray-300">
                                <input id="bank_name" type="text" name="bank_name" placeholder="Example: Bank Mandiri, BCA, BRI" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex gap-1">
                                <p class="text-[#364153] text-sm">Account Number</p>
                                <p class="text-[#FB2C36] text-sm">*</p>
                            </div>
                            <div class="w-full flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-3 py-1 outline-1 -outline-offset-1 outline-gray-300">
                                <input id="account_number" type="text" name="account_number" placeholder="Example: 55555555" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex gap-1">
                                <p class="text-[#364153] text-sm">Account Holder</p>
                                <p class="text-[#FB2C36] text-sm">*</p>
                            </div>
                            <div class="w-full flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-3 py-1 outline-1 -outline-offset-1 outline-gray-300">
                                <input id="account_holder" type="text" name="account_holder" placeholder="Example: John Doe" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                            </div>
                        </div>
                    </div>
                    <button
                        type="submit"
                        class="block w-full py-3 bg-[#4F39F6] hover:bg-[#3B2AD9] active:bg-[#4F39F6] rounded-lg text-center"
                        >
                            <p class="text-base text-white">Create Campaign</p>
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
