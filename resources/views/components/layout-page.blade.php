<x-layout>
    <x-side-nav pageName="{{ $pageName }}" />
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <x-nav-bar pageName="{{ $pageName }}" />
        <!-- cards -->
        <div class="w-full px-6 py-6 mx-auto">
            {{ $slot }}
            <x-footer />
        </div>
        <x-fixed-plugin />
    </main>
</x-layout>
