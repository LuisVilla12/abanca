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
            <x-primary-button>Actualizar Video</x-primary-button>
    
        </div>
    </form>
    
    </div>
    