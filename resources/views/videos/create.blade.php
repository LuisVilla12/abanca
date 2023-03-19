<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Añadir video') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto ">
            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 text-gray-900">
                    <h1 class="text-2xl font-bold text-center mb-5">Añadir Video</h1>
                    <div class="md:flex md:justify-center p-2">
                        <livewire:crear-video/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
