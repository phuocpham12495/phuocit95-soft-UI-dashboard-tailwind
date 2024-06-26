<div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-3/4 max-w-full px-3">
                    <div>
                        <p class="mb-0 font-sans font-semibold leading-normal text-sm">
                            Top 1 {{ $teamTop['league_name'] }}
                        </p>
                        <h5 class="mb-0 font-bold">
                            {{ $teamTop['team_name'] }}
                            <span
                                class="leading-normal text-sm font-weight-bolder text-lime-500">{{ $teamTop['overall_league_PTS'] }}Pts</span>
                        </h5>
                    </div>
                </div>
                <div class="px-3 text-right basis-1/4">
                    <div
                        class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500 flex items-center justify-center">
                        <p class="text-white">Top 1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
