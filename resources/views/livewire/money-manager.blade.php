<div>
    <div x-data = "{tabId: $wire.entangle('currentTabId')}">
        <!-- tab -->
        <div class="relative">
            <ul class="relative flex flex-wrap p-1 list-none bg-transparent rounded-xl" nav-pills role="tablist">
                <li class="z-30 flex-auto text-center">
                    <a x-on:click = "tabId = 0"
                        class="z-30 block w-full px-0 py-1 mb-0 transition-all border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700"
                        nav-link active href="javascript:;" role="tab" aria-selected="true">
                        <svg class="h-5 w-5 text-gray-900" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <rect x="3" y="12" width="6" height="8" rx="1" />
                            <rect x="9" y="8" width="6" height="12" rx="1" />
                            <rect x="15" y="4" width="6" height="16" rx="1" />
                            <line x1="4" y1="20" x2="18" y2="20" />
                        </svg>
                        <span class="ml-1">Cash Flow Statement</span>
                    </a>
                </li>
                <li class="z-30 flex-auto text-center">
                    <a x-on:click = "tabId = 1"
                        class="z-30 block w-full px-0 py-1 mb-0 transition-all border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700"
                        nav-link href="javascript:;" role="tab" aria-selected="false">
                        <svg class="h-5 w-5 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="ml-1">Add Income</span>
                    </a>
                </li>
                <li class="z-30 flex-auto text-center">
                    <a x-on:click = "tabId = 2"
                        class="z-30 block w-full px-0 py-1 mb-0 transition-colors border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700"
                        nav-link href="javascript:;" role="tab" aria-selected="false">
                        <svg class="h-5 w-5 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="ml-1">Add Expense</span>
                    </a>
                </li>
            </ul>
        </div>

        {{-- <ul class="list-reset flex border-b">
            <li class="mr-1">
                <a x-on:click = "tabId = 0" x-bind:class="tabId == 0 ? 'border-l border-t border-r rounded-t' : ''"
                    class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"
                    href="#">Add Income</a>
            </li>
            <li class="mr-1">
                <a x-on:click = "tabId = 1" x-bind:class="tabId == 1 ? 'border-l border-t border-r rounded-t' : ''"
                    class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"
                    href="#">Add Expense</a>
            </li>
            <li class="mr-1">
                <a x-on:click = "tabId = 2" x-bind:class="tabId == 2 ? 'border-l border-t border-r rounded-t' : ''"
                    class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"
                    href="#">Cash Flow Statement</a>
            </li>
        </ul> --}}

        <div class="mt-4">
            <!-- Add income -->
            <div x-show = "tabId == 0" x-transition.duration.600ms>
                <livewire:money-manager.cash-flow-statement />
            </div>

            <!-- Add income -->
            <div x-show = "tabId == 1" x-transition.duration.600ms>
                <livewire:money-manager.add-income />
            </div>

            <!-- Add income -->
            <div x-show = "tabId == 2" x-transition.duration.600ms>
                <livewire:money-manager.add-expense />
            </div>
        </div>
    </div>
</div>
