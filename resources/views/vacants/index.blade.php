<x-app-layout>
    <x-slot name="header">
        <h2
            class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Vacantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            @if (session()->has('message'))
                <div
                    class="mb-6 rounded-lg bg-green-500 p-4 text-center text-white">
                    {{ session('message') }}
                </div>
            @endif
            <div
                class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Mis vacantes
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
