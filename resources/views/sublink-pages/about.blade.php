<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <p class="text-3xl font-semibold leading-tight">
                {{ __('Our Teams ') }}
            </p>
        </div>
    </x-slot>

    <h2 class="py-4 text-gray-600 dark:text-gray-400">Kelompok 4 TI-4A</h2>

    <div class="py-6">










        {{-- @php
            $variants = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'black'];

            $sizes = ['sm', 'base', 'lg'];
        @endphp

        <div class="grid items-center gap-4">
            @foreach ($variants as $variant)
                <div class="grid items-start grid-cols-3 gap-4 justify-items-center">
                    @foreach ($sizes as $size)
                        <x-button icon-only :variant="$variant" :size="$size" :sr-text="$variant">
                            <x-heroicon-o-home
                                class="{{ $size == 'sm' ? 'w-4 h-4' : ($size == 'base' ? 'w-6 h-6' : 'w-7 h-7') }}" />
                        </x-button>
                    @endforeach
                </div>
            @endforeach
        </div> --}}
    </div>
</x-app-layout>
