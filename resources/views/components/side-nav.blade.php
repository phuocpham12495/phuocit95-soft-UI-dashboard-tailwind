@props(['pageName' => ''])
<!-- sidenav  -->
<aside x-data="{ pageName: '{{ $pageName }}' }"
    class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
    <div class="h-19.5">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
            sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="/">
            <img src="../assets/img/logo.png"
                class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Portfolio - Phuoc It
                95</span>
        </a>
    </div>

    <hr class="h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">

            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                    x-bind:class="pageName == 'Dashboard' ? 'shadow-soft-xl rounded-lg bg-white  font-semibold text-slate-700' : ''"
                    href="/dashboard">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5"
                        x-bind:class="pageName == 'Dashboard' ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : ''">
                        <svg class="h-4 w-4 text-gray-900" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <polyline points="5 12 3 12 12 3 21 12 19 12" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                </a>
            </li>

            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Other pages</h6>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                    x-bind:class="pageName == 'App 1' ? 'shadow-soft-xl rounded-lg bg-white  font-semibold text-slate-700' :
                        ''"
                    href="/app1">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5"
                        x-bind:class="pageName == 'App 1' ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : ''">
                        <svg class="h-4 w-4 text-gray-900" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path
                                d="M12.971 3.54l6 3.333A2 2 0 0120 8.62v6.536a2 2 0 0 1 -1.029 1.748l-6 3.333a2 2 0 0 1 -1.942 0l-6-3.333A2 2 0 014 15.157V8.62a2 2 0 0 1 1.029 -1.748l6-3.333a2 2 0 0 1 1.942 0z" />
                        </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">App 1</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                    x-bind:class="pageName == 'App 2' ? 'shadow-soft-xl rounded-lg bg-white  font-semibold text-slate-700' :
                        ''"
                    href="/app2">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5"
                        x-bind:class="pageName == 'App 2' ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : ''">
                        <svg class="h-4 w-4 text-gray-900" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path
                                d="M12.971 3.54l6 3.333A2 2 0 0120 8.62v6.536a2 2 0 0 1 -1.029 1.748l-6 3.333a2 2 0 0 1 -1.942 0l-6-3.333A2 2 0 014 15.157V8.62a2 2 0 0 1 1.029 -1.748l6-3.333a2 2 0 0 1 1.942 0z" />
                        </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">App 2</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                    x-bind:class="pageName == 'App 3' ? 'shadow-soft-xl rounded-lg bg-white  font-semibold text-slate-700' :
                        ''"
                    href="/app3">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5"
                        x-bind:class="pageName == 'App 3' ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : ''">
                        <svg class="h-4 w-4 text-gray-900" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path
                                d="M12.971 3.54l6 3.333A2 2 0 0120 8.62v6.536a2 2 0 0 1 -1.029 1.748l-6 3.333a2 2 0 0 1 -1.942 0l-6-3.333A2 2 0 014 15.157V8.62a2 2 0 0 1 1.029 -1.748l6-3.333a2 2 0 0 1 1.942 0z" />
                        </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">App 3</span>
                </a>
            </li>

            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Football pages</h6>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                    x-bind:class="pageName == 'Countries' ? 'shadow-soft-xl rounded-lg bg-white  font-semibold text-slate-700' : ''"
                    href="/countries">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5"
                        x-bind:class="pageName == 'Countries' ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : ''">
                        <svg class="h-4 w-4 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Countries</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                    x-bind:class="pageName == 'Competitions' ? 'shadow-soft-xl rounded-lg bg-white  font-semibold text-slate-700' :
                        ''"
                    href="/competitions">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5"
                        x-bind:class="pageName == 'Competitions' ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : ''">
                        <svg class="h-4 w-4 text-gray-900" <svg width="24" height="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18" />
                        </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Competitions</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                    x-bind:class="pageName == 'Teams' ? 'shadow-soft-xl rounded-lg bg-white  font-semibold text-slate-700' :
                        ''"
                    href="/teams">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5"
                        x-bind:class="pageName == 'Teams' ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : ''">
                        <svg class="h-4 w-4 text-gray-900" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="4" y1="6" x2="20" y2="6" />
                            <line x1="4" y1="18" x2="9" y2="18" />
                            <path d="M4 12h13a3 3 0 0 1 0 6h-4l2 -2m0 4l-2 -2" />
                        </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Teams</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                    x-bind:class="pageName == 'Players' ? 'shadow-soft-xl rounded-lg bg-white  font-semibold text-slate-700' :
                        ''"
                    href="/players">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5"
                        x-bind:class="pageName == 'Players' ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : ''">
                        <svg class="h-4 w-4 text-gray-900" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                        </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Players</span>
                </a>
            </li>
        </ul>
    </div>

    <hr class="h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Account pages</h6>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                    x-bind:class="pageName == 'Profile' ? 'shadow-soft-xl rounded-lg bg-white  font-semibold text-slate-700' :
                        ''"
                    href="/profile">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5"
                        x-bind:class="pageName == 'Profile' ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : ''">
                        <svg class="h-4 w-4 text-gray-900" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <rect x="5" y="3" width="14" height="18" rx="2" />
                            <line x1="9" y1="7" x2="15" y2="7" />
                            <line x1="9" y1="11" x2="15" y2="11" />
                            <line x1="9" y1="15" x2="13" y2="15" />
                        </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Profile</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                    href="/signin">
                    <div
                        class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <svg class="h-4 w-4 text-gray-900" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <rect x="3" y="4" width="18" height="16" rx="3" />
                            <circle cx="9" cy="10" r="2" />
                            <line x1="15" y1="8" x2="17" y2="8" />
                            <line x1="15" y1="12" x2="17" y2="12" />
                            <line x1="7" y1="16" x2="17" y2="16" />
                        </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Sign In</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                    href="/signup">
                    <div
                        class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <svg class="h-6 w-6 text-gray-900" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <g transform="rotate(-45 12 18)">
                                <line x1="12" y1="18" x2="12.01" y2="18" />
                                <path d="M12 14a4 4 0 0 1 4 4" />
                                <path d="M12 10a8 8 0 0 1 8 8" />
                            </g>
                        </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Sign Up</span>
                </a>
            </li>
        </ul>

        <div class="flex flex-col pl-0 mt-2 mb-6 items-center">
            <a href="https://www.testdome.com/certificates/0d232c9d593a4793bd6950da045cda8c"
                class="testdome-certificate-stamp silver">
                <span class="testdome-certificate-name">Pham Huu Phuoc</span>
                <span class="testdome-certificate-test-name">Laravel</span>
                <span class="testdome-certificate-card-logo">TestDome<br>Certificate</span>
            </a>
            <script>
                var stylesheet = "https://www.testdome.com/content/source/stylesheets/embed.css";
                link = document.createElement("link");
                link.href = stylesheet;
                link.type = "text/css";
                link.rel = "stylesheet";
                link.media = "screen,print";
                document.getElementsByTagName("head")[0].appendChild(link);
            </script>
        </div>
    </div>
</aside>
<!-- end sidenav -->
