<div>
    
    <form wire:submit.prevent='editarSabia'  class="md:w-1/2">
        @csrf
        <div class="mt-4">
            <x-input-label for="title" :value="__('Titulo del enlace')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" wire:model="title" :value="old('title')" placeholder="Ingrese titulo del enlace"  />
            @error('title')
                <livewire:mostrar-alerta :message="$message">
            @enderror
        </div>
        <div class="mt-4">
            <x-input-label for="url" :value="__('URL del enlace')" />
            <x-text-input id="url" class="block mt-1 w-full" type="text" wire:model="url" :value="old('url')" placeholder="Ingrese la url del enlace"  />
            {{-- <x-input-error :messages="$errors->get('empresa')" class="mt-2" /> --}}
            @error('url')
                <livewire:mostrar-alerta :message="$message">
            @enderror
        </div>
        <div class="mt-4">
            <x-input-label for="autor" :value="__('Author del enlace')" />
            <x-text-input id="autor" class="block mt-1 w-full" type="text" wire:model="autor" :value="old('autor')" placeholder="Ingrese el autor"  />
            {{-- <x-input-error :messages="$errors->get('empresa')" class="mt-2" /> --}}
            @error('autor')
                <livewire:mostrar-alerta :message="$message">
            @enderror
        </div>
        <div class="mt-4">
            <x-input-label for="categoria" :value="__('Categoria del enlace')" />
            
            <select wire:model="categoria" id="categoria" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block w-full">
                <option value="" selected>--Sin seleccionar</option>
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}" >{{$categoria->categoria}}</option>
                @endforeach
            </select>
            @error('categoria')
                <livewire:mostrar-alerta :message="$message">
            @enderror
        </div>
    
    
        <div class="mt-4 grid place-items-center">
            <x-primary-button class="mt-2">Registrar enlace</x-primary-button>
    
        </div>
    </form>
    </div>
