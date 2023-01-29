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
            <x-text-input id="date" class="block mt-1 w-full" type="date" wire:model="date" :value="old('date')"/>
            @error('date')
                <livewire:mostrar-alerta :message="$message">
            @enderror
        </div>
    
    
        <div class="mt-4 grid place-items-center">
            <x-primary-button>Actualizar noticia</x-primary-button>
    
        </div>
    </form>
    
    </div>
    