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
    <form wire:submit.prevent='editarNoticia'  class="">
        @csrf
        <div class="mt-4">
            <x-input-label for="title" :value="__('Titulo de la noticia')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" wire:model="title" :value="old('title')" placeholder="Ingrese titulo del enlace"  />
            @error('title')
                <livewire:mostrar-alerta :message="$message">
            @enderror
        </div>
        <div class="mt-4">
            <x-input-label for="url" :value="__('URL de la noticia')" />
            <x-text-input id="url" class="block mt-1 w-full" type="text" wire:model="url" :value="old('url')" placeholder="Ingrese la url del enlace"  />
            {{-- <x-input-error :messages="$errors->get('empresa')" class="mt-2" /> --}}
            @error('url')
                <livewire:mostrar-alerta :message="$message">
            @enderror
        </div>
        <div class="mt-4">
            <x-input-label for="autor" :value="__('Fuente de la noticia')" />
            <x-text-input id="autor" class="block mt-1 w-full" type="text" wire:model="autor" :value="old('autor')" placeholder="Ingrese el autor"  />
            {{-- <x-input-error :messages="$errors->get('empresa')" class="mt-2" /> --}}
            @error('autor')
                <livewire:mostrar-alerta :message="$message">
            @enderror
        </div>
        <div class="mt-4">
            <x-input-label for="date" :value="__('Fecha de la noticia')" />
            <x-text-input id="date" class="block mt-1 w-full" type="date" wire:model="date" :value="old('date')" max="{{$fecha}}"/>
            @error('date')
                <livewire:mostrar-alerta :message="$message">
            @enderror
        </div>
        <div class="mt-4">
            <x-input-label for="descripcion" :value="__('Descripción:')" />
            <textarea id="descripcion" class="block mt-1 w-full" type="text" wire:model="descripcion"> {{old('descripcion')}}</textarea>
            @error('descripcion')
                <livewire:mostrar-alerta :message="$message">
            @enderror
        </div>
        <div class="mt-4">
            <x-input-label for="descripcion_dos" :value="__('Descripción opcional (extra):')" />
            <textarea id="descripcion_dos" class="block mt-1 w-full" type="text" wire:model="descripcion_dos"> {{old('descripcion_dos')}}</textarea>
            @error('descripcion_dos')
                <livewire:mostrar-alerta :message="$message">
            @enderror
        </div>
    
        <div class="mt-4 grid place-items-center">
            <x-primary-button class="bg-pink-700 actualizar">Actualizar noticia</x-primary-button>
    
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