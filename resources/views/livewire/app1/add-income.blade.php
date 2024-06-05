<div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border p-6">
    <form wire:submit="add">
        @csrf
        <label for="Icon" class="mb-2">Category</label>
        <div x-data = "{category: @entangle('category')}">
            <div class="grid grid-cols-3 grid-rows-1 gap-4">
                <div>
                    <div x-on:click = "category = 'Salary'"
                        class="inline-block px-3 py-3 mr-3 font-bold text-center text-white align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
                        <span>Salary</span>
                        <svg x-show = "category == 'Salary'" class="h-8 w-8 text-white-900" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                    </div>
                </div>
                <div>
                    <div x-on:click = "category = 'Gift'"
                        class="inline-block px-3 py-3 mr-3 font-bold text-center text-white align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
                        <span>Gift</span>
                        <svg x-show = "category == 'Gift'" class="h-8 w-8 text-white-900" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                    </div>
                </div>
                <div>
                    <div x-on:click = "category = 'Social Insurance'"
                        class="inline-block px-3 py-3 mr-3 font-bold text-center text-white align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
                        <span>Social Insurance</span>
                        <svg x-show = "category == 'Social Insurance'" class="h-8 w-8 text-white-900" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                    </div>
                </div>
            </div>
            <input x-bind:value="category" wire:model="category" type="text" placeholder="Salary"
                class="mt-2 focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"></input>
            @error('category')
                <em>{{ $message }}</em>
            @enderror
        </div>

        <label for="Amount" class="mt-4 mb-2">Amount</label>
        <input wire:model="amount" type="text" placeholder="10000"
            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"></input>
        @error('amount')
            <em>{{ $message }}</em>
        @enderror

        <label for="Note" class="mt-4 mb-2">Note</label>
        <input wire:model="note" type="text" placeholder="Ăn sáng"
            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"></input>
        @error('note')
            <em>{{ $message }}</em>
        @enderror

        <div class="mt-4">
            <button type="submit"
                class="inline-block px-6 py-3 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-fuchsia-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Add</button>
        </div>
    </form>
</div>
