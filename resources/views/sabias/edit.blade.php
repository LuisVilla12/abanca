<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar enlace') }}
        </h2>
    </x-slot>
    
    <div class="py-3">
        <div class="max-w-7xl mx-auto">
            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-3 justify-center items-center">
                    <div class="px-6 grid place-items-center">
                        <img src="{{ asset('img/PersonaHombreR.png') }}" alt="" class="max-h-50 md:max-h-60">
                    </div>
                    <div class="px-2 text-gray-900">
                        <div class="px-6">
                            <livewire:editar-sabia :sabia="$sabia"/>
                        </div>
                    </div>
                    <div class="px-6 grid place-items-center">
                        <img src="{{ asset('img/PersonaMujerR.png') }}" alt="" class="max-h-50 md:max-h-60">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
