<x-layout-page>
    <x-slot:pageName>Home</x-slot:pageName>
    <!-- content -->
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <livewire:football.team-top-sample :teamId="1" />
        <!-- card2 -->
        <livewire:football.team-top-sample :teamId="2" />
    </div>
    <!-- row 2 -->
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap -mx-3">
                        <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                            <div class="flex flex-col h-full">
                                <p class="pt-2 mb-1 font-semibold">APIFootball.com</p>
                                <h5 class="font-bold">Portfolio - Phuoc It 95</h5>
                                <p class="mb-12">Your one-stop solution for all football data feeds!</p>
                                <a class="mt-auto mb-0 font-semibold leading-normal text-sm group text-slate-500"
                                    href="https://apifootball.com">
                                    Read More
                                    <i
                                        class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                                </a>
                            </div>
                        </div>
                        <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
                            <div class="h-full bg-gradient-to-tl from-purple-700 to-pink-500 rounded-xl">
                                <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-dashboard/assets/img/shapes/waves-white.svg"
                                    class="absolute top-0 hidden w-1/2 h-full lg:block" alt="waves" />
                                <div class="relative flex items-center justify-center h-full">
                                    <img class="relative z-20 w-full pt-6"
                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-dashboard/assets/img/illustrations/rocket-white.png"
                                        alt="rocket" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- row 3 -->
    <div class="flex flex-wrap mt-6 -mx-3">
        <!-- card1 -->
        <livewire:football.team-top-sample :teamId="3" />
        <!-- card2 -->
        <livewire:football.team-top-sample :teamId="4" />
        <!-- card3 -->
        <livewire:football.team-top-sample :teamId="5" />
    </div>
    <!-- end content -->
</x-layout-page>
