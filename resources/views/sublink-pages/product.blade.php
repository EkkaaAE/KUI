<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h1 class="text-3xl font-semibold leading-tight">
                {{ __('Product') }}
            </h1>
        </div>
    </x-slot>

    {{-- <p class="py-4 text-gray-600 dark:text-gray-400">Useless Pages to demo sidebar.</p> --}}

    <div class="py-6">










        {{-- @php
            $variants = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'black'];

            $sizes = ['sm', 'base', 'lg'];
        @endphp


        <div class="grid items-center gap-4">
            @foreach ($variants as $variant)
                <div class="grid items-start grid-cols-3 gap-4 justify-items-center">
                    @foreach ($sizes as $size)
                        <x-button :variant="$variant" size="{{ $size }}">
                            Button
                        </x-button>
                    @endforeach
                </div>
            @endforeach
        </div> --}}
    </div>
</x-app-layout>
