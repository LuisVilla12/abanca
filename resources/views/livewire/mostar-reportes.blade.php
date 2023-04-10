<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($reportes as $reporte)
            <div class="md:flex md:justify-between md:items-center px-5">
                <div class="mb-5">
                    <a class="text-xl font-bold">{{ $reporte->infante->name . " " . $reporte->infante->lastname_p . " " . $reporte->infante->lastname_m  }}</a>
                    <p class="text-sm text-gray-400 font-semibold">Actividad:
                        {{ $reporte->tarea->title}}
                    </p>
                    <p class="text-sm text-gray-400 font-semibold">Realizado por:
                        {{ $reporte->user->name}}
                    </p>
                    <p class="text-sm text-gray-400 font-semibold">Fecha del reporte:
                        {{ $reporte->tarea->date->format('d-n-Y')}}
                    </p>
                </div>
                <div class="flex flex-col md:flex-row items-stretch gap-3 md:items-center mt-5 md:mt-0 px-5">
                    <a href="{{ route('noticia.edit', $reporte->id) }}"
                        class="text-white bg-blue-600 py-2 px-4  text-center rounded-lg text-xs font-bold uppercase">Editar</a>
                    <button wire:click="$emit('mostrarAlerta',{{$reporte->id}})"
                        class="text-white bg-red-600 py-2 px-4 rounded-lg text-xs font-bold uppercase">Eliminar</button>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-gray-500 text-sm">No hay reportes</p>
        @endforelse
    </div>

</div>
</div>


@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('mostrarAlerta', noticia_id=>{
            Swal.fire({
                title: '¿Eliminar noticia?',
                text: "Una noticia eliminada no se puede revertir",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Si, eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Eliminar Vacante
                    Livewire.emit('eliminarNoticia',noticia_id);
                    Swal.fire(
                        'Se ha eliminado la noticia',
                        'Eliminado correctamente',
                        'success'
                    )
                }
            })
        })
    </script>
@endpush
