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
                    <div class="grid grid-cols-2 gap-3">
                        @forelse ($citas as $cita)
                            <div class="{{  $cita->asistio==1? 'bg-green-300':''}}{{$cita->cancelo==1? 'bg-red-500':''}} {{$cita->cancelo==0 && $cita->asistio==0? 'bg-yellow-200':''}} py-2 px-2" >
                               <div class="flex items-center gap-4">
                                   @if ($cita->asistio==1)
                                   <img class="h-6 w-6" src="{{ asset('img/check.png') }}" alt="check">
                                   @elseif ($cita->cancelo==1)
                                   <img class="h-6 w-6" src="{{ asset('img/close.png') }}" alt="close">
                                   @else()
                                   <img class="h-6 w-6" src="{{ asset('img/menos.png') }}" alt="close">
                                   @endif
                                   <p class="{{$cita->cancelo==1? 'text-white':''}}">  Fecha de la cita: {{ $cita->date->format('d/m/Y') }} <span>y Horario de la cita: {{ $cita->horario->horario }}</span></p>
                               </div>
                            </div>
                        @empty
                            <p>No hay citas</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
      
    </div>
</x-app-layout>
