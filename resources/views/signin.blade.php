<x-layout>
    <x-slot:pageName>Sign In</x-slot:pageName>
    <div class="container sticky top-0 z-sticky">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 flex-0">
                <!-- Navbar -->
                <nav
                    class="absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 mx-6 my-4 shadow-soft-2xl rounded-blur bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start">
                    <div class="flex items-center justify-between w-full p-0 pl-6 mx-auto flex-wrap-inherit">
                        <a class="py-2.375 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0"
                            href="/">Portfolio - Phuoc It 95 </a>
                        <button navbar-trigger
                            class="px-3 py-1 ml-2 leading-none transition-all bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg ease-soft-in-out lg:hidden"
                            type="button" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span
                                class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
                                <span bar1
                                    class="w-5.5 rounded-xs relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                                <span bar2
                                    class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                                <span bar3
                                    class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                            </span>
                        </button>
                        <div navbar-menu
                            class="items-center flex-grow overflow-hidden transition-all duration-500 ease-soft lg-max:max-h-0 basis-full lg:flex lg:basis-auto">
                            <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">
                                <li>
                                    <a class="flex items-center px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2"
                                        aria-current="page" href="/">
                                        <i class="mr-1 fa fa-chart-pie opacity-60"></i>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2"
                                        href="/profile">
                                        <i class="mr-1 fa fa-user opacity-60"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2"
                                        href="/signup">
                                        <i class="mr-1 fas fa-user-circle opacity-60"></i>
                                        Sign Up
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <main class="mt-0 transition-all duration-200 ease-soft-in-out">
        <section>
            <div class="relative flex items-center p-0 overflow-hidden bg-center bg-cover min-h-75-screen">
                <div class="container z-10">
                    <div class="flex flex-wrap mt-0 -mx-3">
                        <div
                            class="flex flex-col w-full max-w-full px-3 mx-auto md:flex-0 shrink-0 md:w-6/12 lg:w-5/12 xl:w-4/12">
                            <div
                                class="relative flex flex-col min-w-0 mt-32 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">

                                @error('signin')
                                    <div alert
                                        class="relative w-full p-4 mb-4 text-white border border-red-300 border-solid rounded-lg bg-gradient-to-tl from-red-600 to-rose-400">
                                        {{ $message }}</div>
                                @enderror

                                <div class="p-6 pb-0 mb-0 bg-transparent border-b-0 rounded-t-2xl">
                                    <h3
                                        class="relative z-10 font-bold text-transparent bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text">
                                        Welcome back</h3>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>

                                <div class="flex-auto p-6">

                                    <form role="form" action="/signin" method="POST">
                                        @csrf
                                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Email</label>
                                        <div class="mb-4">
                                            <input type="email" name="email" :value="old('email')"
                                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                                placeholder="Email" aria-label="Email" aria-describedby="email-addon" />
                                            @error('email')
                                                <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Password</label>
                                        <div class="mb-4">
                                            <input type="password" name="password"
                                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                                placeholder="Password" aria-label="Password"
                                                aria-describedby="password-addon" />
                                            @error('password')
                                                <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="min-h-6 mb-0.5 block pl-12">
                                            <input id="rememberMe"
                                                class="mt-0.54 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                                                type="checkbox" checked="" />
                                            <label
                                                class="mb-2 ml-1 font-normal cursor-pointer select-none text-sm text-slate-700"
                                                for="rememberMe">Remember me</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">Sign
                                                in</button>
                                        </div>
                                    </form>

                                </div>
                                <div
                                    class="p-6 px-1 pt-0 text-center bg-transparent border-t-0 border-t-solid rounded-b-2xl lg:px-2">
                                    <p class="mx-auto mb-6 leading-normal text-sm">
                                        Don't have an account?
                                        <a href="/signup"
                                            class="relative z-10 font-semibold text-transparent bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text">Sign
                                            up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 md:w-6/12">
                            <div
                                class="absolute top-0 hidden w-3/5 h-full -mr-32 overflow-hidden -skew-x-10 -right-40 rounded-bl-xl md:block">
                                <div class="absolute inset-x-0 top-0 z-0 h-full -ml-16 bg-cover skew-x-10"
                                    style="background-image: url('../assets/img/curved-images/curved6.jpg')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="py-12">
        <div class="container">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-shrink-0 w-full max-w-full mx-auto mb-6 text-center lg:flex-0 lg:w-8/12">
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"> Company
                    </a>
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"> About
                        Us </a>
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"> Team
                    </a>
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12">
                        Products </a>
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"> Blog
                    </a>
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"> Pricing
                    </a>
                </div>
                <div class="flex-shrink-0 w-full max-w-full mx-auto mt-2 mb-6 text-center lg:flex-0 lg:w-8/12">
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-dribbble"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-twitter"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-instagram"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-pinterest"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="text-lg fab fa-github"></span>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3">
                <div class="w-8/12 max-w-full px-3 mx-auto mt-1 text-center flex-0">
                    <p class="mb-0 text-slate-400">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        Soft by Creative Tim.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</x-layout>
