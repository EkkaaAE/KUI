<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    {{-- <x-sidebar.dropdown title="pages" :active="Str::startsWith(request()->route()->uri(), 'pages')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Text button" href="{{ route('pages.text') }}" :active="request()->routeIs('pages.text')" />
        <x-sidebar.sublink title="Icon button" href="{{ route('pages.icon') }}" :active="request()->routeIs('pages.icon')" />
        <x-sidebar.sublink title="Text with icon" href="{{ route('pages.text-icon') }}" :active="request()->routeIs('pages.text-icon')" />
    </x-sidebar.dropdown> --}}

    <div x-transition x-show="isSidebarOpen || isSidebarHovered" class="text-sm text-gray-500">
        Menu
    </div>

    @php
        $links = array_fill(0, 1, '');
    @endphp

    @foreach ($links as $index => $link)
        {{-- <x-sidebar.link title="Product {{ $index + 1 }}" href="#" /> --}}
        <x-sidebar.sublink title="Product" href="{{ route('pages.product') }}" :active="request()->routeIs('pages.product')" />
        <x-sidebar.sublink title="About" href="{{ route('pages.about') }}" :active="request()->routeIs('pages.about')" />
    @endforeach

</x-perfect-scrollbar>
