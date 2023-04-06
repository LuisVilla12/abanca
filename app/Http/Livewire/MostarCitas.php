<?php

namespace App\Http\Livewire;

use App\Models\Cita;
use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Database\Query\Builder;

class MostarCitas extends Component
{

    public $termino; 
    public $fecha; 
    // Declarar que debe escuchar ciertas funciones
    protected $listeners = ['cancelarCita','asistirCita','terminosBusqueda'=>'buscar'];
    
    public function cancelarCita(Cita $cita)
    {
        $cita->update(['cancelo'=>'1']);
    }

    public function asistirCita(Cita $cita)
    {
        $cita->update(['asistio'=>'1']);
    }

    public function buscar($termino){
        $this->termino=$termino;
    }

    public function render()
    {
        // $citas=Cita::when($this->termino, function ($query){
        //     $query->where('date', $this->termino)->where('cancelo',0)->where('asistio',0);
        // })->get();

        $citas=Cita::when($this->termino, function ($query){
            $query->where('date', $this->termino)->where('cancelo',0)->where('asistio',0);
        }, function ($query) {
            $query->where('cancelo',0)->where('asistio',0)->where('date','>',Carbon::now()->format('Y-m-d'));
        })->get();
        return view('livewire.mostar-citas',['citas'=>$citas]);
    }
}
