<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Perfil de ' . $infante->name ) }}
            </h2>

        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                 {{-- DATOS GENERALES --}}
                 <div class="px-6 py-3 text-gray-900">
                    {{-- {{auth()->user()->type}} --}}
                    <h1 class="text-2xl font-bold text-center mb-5">Datos generales</h1>
                    <p class="font-semibold">Nombre: <span>{{ $infante->lastname_p . '  ' . $infante->lastname_m . '  ' . $infante->name }}</span> 
                    </p>
                    <p class="font-semibold">Fecha de nacimiento: <span>{{ $infante->date->format('d-n-Y') }}</span> </p>
                    <p class="font-semibold">Tutor: <span>{{ $infante->user->lastname_p . ' ' . $infante->user->lastname_m . ' ' . $infante->user->name }} </span>
                        </p>
                </div>
                <div class="grid md:grid-cols-3 gap-3">
                   
                    {{-- CITAS --}}
                    <div class="p-3">
                        <h2 class="text-xl font-bold text-center mb-5 flex  gap-3"> <img src="{{ asset('img/Logos/appointment-black.svggt') }}" class="w-6 h-6" alt="logo"> Mis citas</h2>
                        {{-- <div class="grid grid-cols-2 gap-3"> --}}
                        <div class="gap-3">
                            @forelse ($citas as $cita)
                                <div class="{{  $cita->asistio==1? 'bg-green-300':''}}{{$cita->cancelo==1? 'bg-red-500':''}} {{$cita->cancelo==0 && $cita->asistio==0? 'bg-yellow-200':''}} py-2 px-2" >
                                   <div class="flex items-center justify-center gap-4">
                                       @if ($cita->asistio==1)
                                       <img class="h-6 w-6" src="{{ asset('img/check.png') }}" alt="check">
                                       @elseif ($cita->cancelo==1)
                                       <img class="h-6 w-6" src="{{ asset('img/close.png') }}" alt="close">
                                       @else()
                                       <img class="h-6 w-6" src="{{ asset('img/menos.png') }}" alt="close">
                                       @endif
                                       <p class="{{$cita->cancelo==1? 'text-white':''}}">  Fecha de la cita: {{ $cita->date->format('d/m/Y') }}</p> <p  class="{{$cita->cancelo==1? 'text-white':''}}">Horario de la cita: {{ $cita->horario->horario }}</p>
                                   </div>
                                </div>
                            @empty
                                <p>No hay citas</p>
                            @endforelse
                        </div>
                    </div>
                    {{-- Reportes --}}
                    <div class="p-3 col-span-2 ">
                        <h2 class="text-xl font-bold text-center mb-5 flex gap-3 items-center">  <img src="{{ asset('img/Logos/report.svg') }}" class="w-6 h-6" alt="logo"> Mis reportes</h2>
                        <div class="grid grid-cols-2 gap-3">
                            @forelse ($reportes as $reporte)
                            <div class="text-gray-900">
                                <p class="font-semibold">Actividad: <span class="font-normal">{{ $reporte->tarea->title}}</span>
                                </p>
                                <p class="font-semibold">Comentarios: <span class="font-normal">  {{ $reporte->descripcion}}</span>
                                  
                                </span>
                                <p class="font-semibold">Realizado por: <span class="font-normal"> {{ $reporte->user->name}}</span>
                                   
                                </p>
                                <p class="font-semibold">Fecha del reporte: <span class="font-normal"> {{ $reporte->tarea->date->format('d-n-Y')}}</span>
                                   
                                </p>
                            </div>
                            @empty
                                <p>No hay reportes</p>
                            @endforelse
                        </div>
                    </div>
                </div>
                
               
                
            </div>
        </div>
      
    </div>
</x-app-layout>
