<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Infante') }}
            </h2>

        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{auth()->user()->type}} --}}
                    <h1 class="text-2xl font-bold text-center mb-5">Datos de {{ $infante->name }}</h1>
                    <p>Nombre completo: {{ $infante->lastname_p . '  ' . $infante->lastname_m . '  ' . $infante->name }}
                    </p>
                    <p>Año de nacimiento: {{ $infante->date->format('d-n-Y') }}</p>
                    <p>Tutor:
                        {{ $infante->user->lastname_p . ' ' . $infante->user->lastname_m . ' ' . $infante->user->name }}</p>
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-bold text-center mb-5">Mis citas</h2>
                    @forelse ($citas as $cita)
                        <div class="mb-5 {{  $cita->asistio==1? 'bg-green-300':''}}{{$cita->cancelo==1? 'bg-red-500':''}} " >
                            <p>Fecha: {{ $cita->date->format('d/m/Y') }}</p>
                            <p>Horario: {{ $cita->horario->horario }}</p>
                        </div>
                    @empty
                        <p>No hay citas</p>
                    @endforelse
                </div>
            </div>
        </div>
      
    </div>
</x-app-layout>
