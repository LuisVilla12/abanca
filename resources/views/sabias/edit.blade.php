<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar enlace') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" p-6 text-gray-900">
                    <div class="md:flex md:justify-center p-5">
                        <livewire:editar-sabia :sabia="$sabia"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
