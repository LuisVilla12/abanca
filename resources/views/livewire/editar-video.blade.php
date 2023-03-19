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
    
    <form wire:submit.prevent='editarVideo'  class="">
        @csrf
        <div class="mt-4">
            <x-input-label for="title" :value="__('Titulo del video')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" wire:model="title" :value="old('title')" placeholder="Ingrese titulo del video"  />
            @error('title')
                <livewire:mostrar-alerta :message="$message">
            @enderror
        </div>
        <div class="mt-4">
            <x-input-label for="url" :value="__('URL del video')" />
            <x-text-input id="url" class="block mt-1 w-full" type="text" wire:model="url" :value="old('url')" placeholder="Ingrese la url del video"  />
            {{-- <x-input-error :messages="$errors->get('empresa')" class="mt-2" /> --}}
            @error('url')
                <livewire:mostrar-alerta :message="$message">
            @enderror
        </div>
        <div class="mt-4">
            <x-input-label for="autor" :value="__('Autor del video')" />
            <x-text-input id="autor" class="block mt-1 w-full" type="text" wire:model="autor" :value="old('autor')" placeholder="Ingrese la autor del video"  />
            {{-- <x-input-error :messages="$errors->get('empresa')" class="mt-2" /> --}}
            @error('autor')
                <livewire:mostrar-alerta :message="$message">
            @enderror
        </div>
        <div class="mt-4">
            <x-input-label for="categoria" :value="__('Categoria del video')" />
            
            <select wire:model="categoria" id="categoria" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full">
                <option value="" >--Sin seleccionar</option>
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}" >{{$categoria->categoria}}</option>
                @endforeach
            </select>
            @error('categoria')
                <livewire:mostrar-alerta :message="$message">
            @enderror
        </div>
    
    
        <div class="grid place-items-center mt-4 ">
            <x-primary-button class="bg-pink-700 my-6">Actualizar Video</x-primary-button>
    
        </div>
        <div class="grid place-items-center my-6">
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
    const btnEnviar = document.querySelector('#submit');
    btnEnviar.addEventListener('click',e=>{
        btnEnviar.classList.add('hidden');
        animacion.classList.remove('hidden');
        setTimeout(() => {
            animacion.classList.add('hidden');
        }, 8000);
    })
</script>
@endpush