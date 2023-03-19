<div>
    <form wire:submit.prevent='leerDatosFormulario' class="md:w-1/2">
        @csrf
        <div class="mt-4">
            <x-input-label for="date" :value="__('Fecha de la cita')" />
            <x-text-input id="date" class="block mt-1 w-full date" type="date" min="{{ $fecha }}"
                wire:model="date" :value="old('date')" />
            @error('date')
                <livewire:mostrar-alerta :message="$message">
                @enderror
        </div>
        <div class="mt-4 grid place-items-center">
            <x-primary-button class="mt-2 buscar" id="submit">Buscar horarios disponibles</x-primary-button>
        </div>
</div>
