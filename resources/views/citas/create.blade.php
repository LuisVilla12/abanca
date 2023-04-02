

<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Agendar una cita') }}
            </h2>
        </div>
    </x-slot>


    <div class="py-3">
        <div class="max-w-7xl mx-auto">
            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-3 justify-around items-center">
                    <div class="px-6 grid place-items-center">
                        <img src="{{ asset('img/Globo Verde.png') }}" alt="" class="max-h-50 md:max-h-80">
                    </div>
                    <div class="px-2 text-gray-900">
                        <div class="px-6">
                            <livewire:crear-cita>
                        </div>
                    </div>
                    <div class="px-6 grid place-items-center">
                        <img src="{{ asset('img/Globo Rojo.png') }}" alt="" class="max-h-50 md:max-h-60">
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    
</x-app-layout>




