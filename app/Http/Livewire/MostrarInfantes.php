<?php

namespace App\Http\Livewire;

use App\Models\Infante;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class MostrarInfantes extends Component
{
     // Declarar que debe escuchar ciertas funciones
     protected $listeners = ['eliminarInfante','guardarInfante'];

    

     public function eliminarInfante(Infante $infante)
     {
         // dd($video->id);
         $infante->delete();
     }

    public function render()
    {
        $infantes = Infante::all();
        return view('livewire.mostrar-infantes',[
            'infantes'=>$infantes
        ]);
    }
}
