<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($infantes as $infante)
            <div class="md:flex md:justify-between md:items-center px-5">
                <div class="mb-5">
                    <a class="text-xl font-bold">{{ $infante->lastname_p . " " .$infante->lastname_m . " " . $infante->name }}</a>
                    <p class="text-sm text-gray-400 font-semibold">Genero:
                        {{ $infante->genero==1? 'HOMBRE':'MUJER'}}
                    </p>
                    <p class="text-sm text-gray-400 font-semibold">Fecha de nacimiento:
                        {{ $infante->date->format('d/m/Y')}}
                    </p>
                </div>
                <div class="flex flex-col md:flex-row items-stretch gap-3 md:items-center mt-5 md:mt-0 px-5">
                    <a href="{{ route('infante.show', $infante->id) }}"
                        class="text-white bg-pink-700 py-2 px-4  text-center rounded-lg text-xs  uppercase">Ver</a>
                    @if (Auth()->user()->type=='1' or Auth()->user()->type=='2')
                    <a href="{{ route('infante.edit', $infante->id) }}"
                        class="text-white bg-blue-600 py-2 px-4  text-center rounded-lg text-xs font-bold uppercase">Editar</a>
                    @endif
                    @if (Auth()->user()->type=='2')
                    <button wire:click="$emit('mostrarAlerta',{{$infante->id}})"
                        class="text-white bg-red-600 py-2 px-4 rounded-lg text-xs font-bold uppercase">Eliminar</button>
                    @endif
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-gray-500 text-sm">No hay infantes</p>
        @endforelse
    </div>
</div>
</div>


@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('mostrarAlerta', infante_id=>{
            Swal.fire({
                title: '¿Eliminar infante?',
                text: "Un infante eliminado no se puede revertir",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Si, eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Eliminar Vacante
                    Livewire.emit('eliminarInfante',infante_id);
                    Swal.fire(
                        'Se ha eliminado el infante',
                        'Eliminado correctamente',
                        'success'
                    )
                }
            })
        })
    </script>
@endpush
