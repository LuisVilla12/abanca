@push('styles')
    <style>
        .sk-chase {
            width: 40px;
            height: 40px;
            position: relative;
            animation: sk-chase 2.5s infinite linear both;
        }

        .sk-chase-dot {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            animation: sk-chase-dot 2.0s infinite ease-in-out both;
        }

        .sk-chase-dot:before {
            content: '';
            display: block;
            width: 25%;
            height: 25%;
            background-color: blue;
            border-radius: 100%;
            animation: sk-chase-dot-before 2.0s infinite ease-in-out both;
        }

        .sk-chase-dot:nth-child(1) {
            animation-delay: -1.1s;
        }

        .sk-chase-dot:nth-child(2) {
            animation-delay: -1.0s;
        }

        .sk-chase-dot:nth-child(3) {
            animation-delay: -0.9s;
        }

        .sk-chase-dot:nth-child(4) {
            animation-delay: -0.8s;
        }

        .sk-chase-dot:nth-child(5) {
            animation-delay: -0.7s;
        }

        .sk-chase-dot:nth-child(6) {
            animation-delay: -0.6s;
        }

        .sk-chase-dot:nth-child(1):before {
            animation-delay: -1.1s;
        }

        .sk-chase-dot:nth-child(2):before {
            animation-delay: -1.0s;
        }

        .sk-chase-dot:nth-child(3):before {
            animation-delay: -0.9s;
        }

        .sk-chase-dot:nth-child(4):before {
            animation-delay: -0.8s;
        }

        .sk-chase-dot:nth-child(5):before {
            animation-delay: -0.7s;
        }

        .sk-chase-dot:nth-child(6):before {
            animation-delay: -0.6s;
        }

        @keyframes sk-chase {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes sk-chase-dot {

            80%,
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes sk-chase-dot-before {
            50% {
                transform: scale(0.4);
            }

            100%,
            0% {
                transform: scale(1.0);
            }
        }
    </style>
@endpush

<div class="">

    <div>
        <livewire:filtar-citas :fecha="$fecha">
            <div class="grid place-items-center mt-6">
                <div class=" hidden animacion ">
                    <div class="sk-chase">
                        <div class="sk-chase-dot"></div>
                        <div class="sk-chase-dot"></div>
                        <div class="sk-chase-dot"></div>
                        <div class="sk-chase-dot"></div>
                        <div class="sk-chase-dot"></div>
                        <div class="sk-chase-dot"></div>
                    </div>
                </div>
            </div>
    </div>
    <div class="" id="formulario">

        <form wire:submit.prevent='reservarCita' class="md:w-1/2" id="formulario">
            @csrf
            <div class="mt-4">
                <x-input-label for="infante_id" :value="__('Infante de la cita')" />
                <select wire:model="infante_id" id="infante_id"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full">
                    <option value="" selected>--Sin seleccionar</option>
                    @foreach ($infantes as $infante)
                        <option value="{{ $infante->id }}">
                            {{ $infante->name . ' ' . $infante->lastname_p . ' ' . $infante->lastname_m }}</option>
                    @endforeach
                </select>
                @error('infante')
                    <livewire:mostrar-alerta :message="$message">
                    @enderror
            </div>
            <div>
                {{-- <p>Horarios Select</p>
                @foreach ($horariosS as $hs)
                    <p>{{$hs->id}}</p>
                @endforeach --}}
            </div>
            <div class="mt-4">
                <x-input-label for="horario_id" :value="__('Horario de la cita')" />
                <select wire:model="horario_id" id="horario_id"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full horario">
                    <option value="" selected>--Sin seleccionar</option>
                    
                    @foreach ($horarios as $horario)
                        <option value="{{ $horario->id }}">{{ $horario->horario }}</option>
                    @endforeach
                </select>
                @error('horario')
                    <livewire:mostrar-alerta :message="$message">
                    @enderror
            </div>
    
    
            <div class="mt-4 grid place-items-center">
                <x-primary-button class="mt-2" id="submit">Reservar cita</x-primary-button>
            </div>
           
        </form>
        
    </div>
</div>

@push('scripts')
    <script>
        const inputDate = document.querySelector('.date');
        const animacion = document.querySelector('.animacion');
        const btnBuscar = document.querySelector('.buscar');
        const formulario = document.querySelector('#formulario');
       

        btnBuscar.addEventListener('click', e => {
            btnBuscar.classList.add('hidden');
            // formulario.classList.remove('hidden');
            animacion.classList.remove('hidden');
            setTimeout(() => {
                animacion.classList.add('hidden');
            }, 8000);
        })

    </script>
@endpush 
