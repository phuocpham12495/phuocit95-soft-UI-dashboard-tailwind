<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                <h6>Cash Flow Statement</h6>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                        <thead class="align-bottom">
                            <tr>
                                <th
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Category</th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Amount</th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Note</th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Date</th>
                                <th
                                    class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                </th>
                            </tr>
                        </thead>
                        @foreach ($cashflows as $cashflow)
                            <tr x-data = "{isLastItem: {{ $cashflow == $cashflows->last() ? 'true' : 'false' }}}"
                                x-effect="console.log('isLastItem: ' + isLastItem)">
                                <td x-bind:class="isLastItem ? 'border-b0' : 'border-b'"
                                    class="p-2 align-middle bg-transparent whitespace-nowrap shadow-transparent">
                                    <div class="flex px-2 py-1">
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-0 leading-normal text-sm">{{ $cashflow->category }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td x-bind:class="isLastItem ? 'border-b0' : 'border-b'"
                                    class="p-2 align-middle bg-transparent whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 leading-tight text-xs text-slate-400">{{ $cashflow->amount }}</p>
                                </td>
                                <td x-bind:class="isLastItem ? 'border-b0' : 'border-b'"
                                    class="p-2 leading-normal text-center align-middle bg-transparent text-sm whitespace-nowrap shadow-transparent text-wrap">
                                    <p class="mb-0 leading-tight text-xs text-slate-400">{{ $cashflow->note }}</p>
                                </td>
                                <td x-bind:class="isLastItem ? 'border-b0' : 'border-b'"
                                    class="p-2 text-center align-middle bg-transparent whitespace-nowrap shadow-transparent">
                                    <span
                                        class="font-semibold leading-tight text-xs text-slate-400">{{ $cashflow->arise_date }}</span>
                                </td>
                                <td x-bind:class="isLastItem ? 'border-b0' : 'border-b'"
                                    class="p-2 align-middle bg-transparent whitespace-nowrap shadow-transparent">
                                    <button wire:click="deleteCashFlow({{ $cashflow->id }})"
                                        wire:confirm="Are you sure you want to delete this cash flow?"
                                        class="font-semibold leading-tight text-xs text-slate-400">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        @if ($cashflows->isEmpty())
                            <tr>
                                <td
                                    class="border-b0 p-2 align-middle bg-transparent whitespace-nowrap shadow-transparent">
                                    <div class="flex px-2 py-1">
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-0 leading-normal text-sm">No data</h6>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
