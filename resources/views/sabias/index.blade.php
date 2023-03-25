<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Enlaces publicados') }}
            </h2>
            <div class="md:flex md:justify-center">
                <a href="{{ route('sabia.create')}}" class="inline-flex items-center px-4 py-2 bg-pink-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-pink-500 focus:bg-pink-500 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Añadir Enlace</a>
             </div>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" p-6 text-gray-900">
                    <livewire:mostrar-sabias>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


