<div>
    @forelse ($citas as $cita )
    <div class="md:flex md:justify-between md:items-center px-5">
        <div class="mb-5">
            <p>Nombre del infante: {{$cita->infante->name}}</p>
            <p>Fecha: {{$cita->date->format('d/m/Y')}}</p>
            <p>Horario: {{$cita->horario->horario}}</p>
        </div>
        <div class="flex flex-col md:flex-row items-stretch gap-3 md:items-center mt-5 md:mt-0 px-5">
            <a href="{{ route('infante.show', $cita->infante->id) }}"
                class="text-white bg-pink-700 py-2 px-4  text-center rounded-lg text-xs font-bold uppercase">Ver</a>
            <button wire:click="$emit('mostrarAlertaDos',{{$cita->id}})"
                class="text-white bg-blue-600 py-2 px-4 rounded-lg text-xs font-bold uppercase">Asistio</button>
            <button wire:click="$emit('mostrarAlerta',{{$cita->id}})"
                class="text-white bg-red-600 py-2 px-4 rounded-lg text-xs font-bold uppercase">Cancelar</button>
        </div>
    </div>
    @empty
        <p>No hay citas</p>
    @endforelse
</div>

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('mostrarAlerta', cita_id=>{
            Swal.fire({
                title: '¿Cancelar cita?',
                text: "Una cita cancelada no se puede revertir",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Si, cancelar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Eliminar Vacante
                    Livewire.emit('cancelarCita',cita_id);
                    Swal.fire(
                        'Se ha cancelado la cita',
                        'cancelada correctamente',
                        'success'
                    )
                }
            })
        })
        Livewire.on('mostrarAlertaDos', cita_id=>{
            Swal.fire({
                title: '¿Confirmar asistencia a la cita?',
                text: "Una cita confirmada no se puede revertir",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Si, confirmar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Eliminar Vacante
                    Livewire.emit('asistirCita',cita_id);
                    Swal.fire(
                        'Se ha confirmado la cita',
                        'confirmada correctamente',
                        'success'
                    )
                }
            })
        })
    </script>
@endpush 