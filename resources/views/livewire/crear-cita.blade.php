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
    <form wire:submit.prevent='crearCita' class="md:w-1/2">
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
        <div class="mt-4">
            <x-input-label for="date" :value="__('Fecha de la cita')" />
            <x-text-input id="date" class="block mt-1 w-full date" type="date" min="{{ $fecha }}"
                wire:model="date" :value="old('date')" />
            @error('date')
                <livewire:mostrar-alerta :message="$message">
                @enderror
        </div>
        <div class="mt-4">
            <x-input-label for="horario_id" :value="__('Horario de la cita')" />
            <select disabled wire:model="horario_id" id="horario_id"
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
            <x-primary-button class="mt-2" id="submit">Agendar cita</x-primary-button>
        </div>
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
    </form>
</div>

@push('scripts')
    <script>
        const inputFecha = document.querySelector('.date');
        const inputHorario = document.querySelector('.horario');
        const animacion = document.querySelector('.animacion');
        const btnEnviar = document.querySelector('#submit');

        btnEnviar.addEventListener('click', e => {
            btnEnviar.classList.add('hidden');
            animacion.classList.remove('hidden');
            setTimeout(() => {
                animacion.classList.add('hidden');
            }, 8000);
        })

        inputFecha.addEventListener('change', e => {
            if (e.target.value !=='') {
                inputHorario.disabled = false;
            }
        });

    </script>
@endpush
