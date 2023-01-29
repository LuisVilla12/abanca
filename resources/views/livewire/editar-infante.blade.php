<div>
    
    <form wire:submit.prevent='editarInfante'  class="">
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
            <x-text-input id="date" class="block mt-1 w-full" type="date" wire:model="date"  :value="old('date')" />
            <x-input-error :messages="$errors->get('date')" class="mt-2" />

            {{-- @error('date')
                <livewire:mostrar-alerta :message="$message">
            @enderror --}}
        </div>
       
    
    
        <div class="mt-4 grid place-items-center">
            <x-primary-button  class="mt-2">Actulizar infante</x-primary-button>
        </div>
       
    </form>
    </div>

    