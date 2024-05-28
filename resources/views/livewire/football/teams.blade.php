<div>
    <form wire:submit="load">
        <label>Competition Id</label>
        <input type="text" placeholder="Default input"
            class="mb-4 focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
            wire:model="leagueId"></input>
        @error('leagueId')
            <div><em>{{ $message }}</em></div>
        @enderror
        <button type="submit"
            class="mb-4 inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs"
            wire:loading.class="opacity-50" class="mt-4">Load</button>
        <div wire:loading.block class="mb-4" aria-label="loading">
            <em>Loading...</em>
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
                    <h6>Teams table</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Team</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Team Logo</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Country</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Coach</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Team Id</th>
                                    {{-- <th
                                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    </th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teams as $team)
                                    <tr x-data = "{isLastItem : {{ $team == end($teams) ? 'true' : 'false' }}}">
                                        <td class="p-2 align-middle
                                        bg-transparent whitespace-nowrap shadow-transparent"
                                            x-bind:class="isLastItem ? 'border-b-0' : 'border-b'">
                                            <span
                                                class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $team['team_name'] }}</span>
                                        </td>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent whitespace-nowrap shadow-transparent"
                                            x-bind:class="isLastItem ? 'border-b-0' : 'border-b'">
                                            <div>
                                                <img src="{{ $team['team_badge'] }}"
                                                    class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                    alt="NF"
                                                    onerror="this.onerror=null; this.src='/assets/img/no-img.jpg';" />
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent whitespace-nowrap shadow-transparent"
                                            x-bind:class="isLastItem ? 'border-b-0' : 'border-b'">
                                            <p class="mb-0 text-xs leading-tight text-slate-400">
                                                {{ $team['team_country'] }}</p>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent whitespace-nowrap shadow-transparent"
                                            x-bind:class="isLastItem ? 'border-b-0' : 'border-b'">
                                            @if (isset($team['coaches'][0]['coach_name']))
                                                <p class="mb-0 text-xs leading-tight text-slate-400">
                                                    {{ $team['coaches'][0]['coach_name'] }}</p>
                                            @else
                                                <p class="mb-0 text-xs leading-tight text-slate-400">No info</p>
                                            @endforelse
                                        </td>
                                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent whitespace-nowrap shadow-transparent"
                                            x-bind:class="isLastItem ? 'border-b-0' : 'border-b'">
                                            <span
                                                class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $team['team_key'] }}</span>
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
