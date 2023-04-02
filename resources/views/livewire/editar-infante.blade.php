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

<div>
    
    <form wire:submit.prevent='editarInfante'  class="px-6 pt-6 ">
        @csrf
        <div class="mt-4">
            <x-input-label for="name" :value="__('Nombre del infante')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" wire:model="name" :value="old('name')" placeholder="Ingrese el nombre del infante"  />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

           
        </div>
        <div class="mt-4">
            <x-input-label for="lastname_p" :value="__('Apellido paterno')" />
            <x-text-input id="lastname_p" class="block mt-1 w-full" type="text" wire:model="lastname_p" :value="old('lastname_p')" placeholder="Ingrese el apellido paterno"  />
            <x-input-error :messages="$errors->get('lastname_p')" class="mt-2" />
            {{-- @error('lastname_p')
                <livewire:mostrar-alerta :message="$message">
            @enderror  --}}
        </div>
        <div class="mt-4">
            <x-input-label for="lastname_m" :value="__('Apellido materno')" />
            <x-text-input id="lastname_m" class="block mt-1 w-full" type="text" wire:model="lastname_m" :value="old('lastname_m')" placeholder="Ingrese el apellido paterno"  />
            <x-input-error :messages="$errors->get('lastname_m')" class="mt-2" />

            {{-- @error('lastname_m')
                <livewire:mostrar-alerta :message="$message">
            @enderror --}}
        </div>

        <div class="mt-4">
            <x-input-label for="genero" :value="__('Género del niño')" />
            
            <select wire:model="genero" id="genero" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full">
                <option value="" selected disabled>--Sin seleccionar</option>
                <option value="1" >Hombre</option>
                <option value="2" >Mujer</option>
            </select>
            <x-input-error :messages="$errors->get('genero')" class="mt-2" />

            {{-- @error('genero')
                <livewire:mostrar-alerta :message="$message">
            @enderror --}}
        </div>
    
        <div class="mt-4">
            <x-input-label for="date" :value="__('Fecha de nacimiento')" />
            <x-text-input id="date" max="{{$fecha}}" class="block mt-1 w-full" type="date" wire:model="date"  :value="old('date')" />
            <x-input-error :messages="$errors->get('date')" class="mt-2" />

            {{-- @error('date')
                <livewire:mostrar-alerta :message="$message">
            @enderror --}}
        </div>
       
    
    
        <div class="mt-4 grid place-items-center">
            <x-primary-button  class="my-6 bg-pink-700 actualizar">Actualizar infante</x-primary-button>
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
    const animacion = document.querySelector('.animacion');
    const btnEnviar = document.querySelector('.actualizar');
    btnEnviar.addEventListener('click',e=>{
        btnEnviar.classList.add('hidden');
        animacion.classList.remove('hidden');
        setTimeout(() => {
            animacion.classList.add('hidden');
        }, 8000);
    })
</script>
@endpush
