<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;

class FiltarCitas extends Component
{
    public $date;

    public function leerDatosFormulario(){
        $this->emit('terminoBusqueda',$this->date);    
    }
    

    public function render()
    {
        $fecha = Carbon::now()->format('Y-m-d');
        return view('livewire.filtar-citas',['fecha'=>$fecha]);
    }
}
