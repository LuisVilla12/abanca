<?php

namespace App\Http\Livewire;

use App\Models\Cita;
use Livewire\Component;

class MostarCitas extends Component
{

    // Declarar que debe escuchar ciertas funciones
    protected $listeners = ['cancelarCita','asistirCita'];
    
    public function cancelarCita(Cita $cita)
    {
        $cita->update(['cancelo'=>'1']);
    }

    public function asistirCita(Cita $cita)
    {
        $cita->update(['asistio'=>'1']);
    }



    public function render()
    {
        // $citas=Cita::where('cancelo','=','0')->orWhere('asistio','=','0')->get();
        $citas=Cita::where(['cancelo'=>0,'asistio'=>0])->get();
        return view('livewire.mostar-citas',['citas'=>$citas]);
    }
}
