<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($videos as $video)
            <div class="md:flex md:justify-between md:items-center px-5">
                <div class="mb-5">
                    <a class="text-xl font-bold">{{ $video->title }}</a>
                    <p class="text-sm text-gray-400 font-semibold">Categoria:
                        {{ $video->categoria_id? 'TUTOR':'INFANTE'}}
                    </p>
                </div>
                <div class="flex flex-col md:flex-row items-stretch gap-3 md:items-center mt-5 md:mt-0 px-5">
                    <a href="{{ route('video.edit',$video->id) }}"
                        class="text-white bg-blue-600 py-2  text-center px-4 rounded-lg text-xs font-bold uppercase">Editar</a>
                    <button wire:click="$emit('mostrarAlerta',{{$video->id}})"
                        class="text-white bg-red-600 py-2 px-4 rounded-lg text-xs font-bold uppercase">Eliminar</button>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-gray-500 text-sm">No hay videos</p>
        @endforelse
    </div>

</div>
</div>


@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('mostrarAlerta', video_id=>{
            Swal.fire({
                title: '¿Eliminar video?',
                text: "Un video eliminado no se puede revertir",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Si, eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Eliminar Vacante
                    Livewire.emit('eliminarVideo',video_id);
                    Swal.fire(
                        'Se ha Eliminado el video',
                        'Eliminado correctamente',
                        'success'
                    )
                }
            })
        })

        const btnEliminar=document.querySelector('')
    </script>
@endpush
