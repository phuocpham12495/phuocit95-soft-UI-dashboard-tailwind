<div>
    <form wire:submit="load">
        <button wire:loading.class="opacity-50" type="submit"
            class="mb-4 inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Load</button>
        <div wire:loading.block
            class="mb-4 animate-spin w-10 h-10 border-[3px] border-current border-t-transparent text-blue-600 rounded-full"
            role="status" aria-label="loading">
        </div>
        @if ($errorMsg)
            <div wire:loading.remove>
                <div class="mb-4 relative w-full p-4 text-white bg-red-500 rounded-lg">{{ $errorMsg }}</div>
            </div>
        @endif
    </form>

    <div wire:loading.remove class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6>Countries table</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Country</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Country Flag</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Country Id</th>
                                    {{-- <th
                                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    </th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($countries as $country)
                                    <tr x-data = "{isLastItem : {{ $country == end($countries) ? 'true' : 'false' }}}">
                                        <td class="p-2 align-middle
                                        bg-transparent whitespace-nowrap shadow-transparent"
                                            x-bind:class="isLastItem ? 'border-b-0' : 'border-b'">
                                            <span
                                                class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $country['country_name'] }}</span>
                                        </td>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent whitespace-nowrap shadow-transparent"
                                            x-bind:class="isLastItem ? 'border-b-0' : 'border-b'">
                                            <div>
                                                <img src="{{ $country['country_logo'] }}"
                                                    class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                    alt="NF"
                                                    onerror="this.onerror=null; this.src='/assets/img/no-img.jpg';" />
                                            </div>
                                        </td>
                                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent whitespace-nowrap shadow-transparent"
                                            x-bind:class="isLastItem ? 'border-b-0' : 'border-b'">
                                            <span
                                                class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $country['country_id'] }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
