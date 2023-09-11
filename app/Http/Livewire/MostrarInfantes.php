<?php

namespace App\Http\Livewire;

use App\Models\Infante;
use Livewire\Component;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;


class MostrarInfantes extends Component
{
    public $tipo;
     // Declarar que debe escuchar ciertas funciones
     protected $listeners = ['eliminarInfante','guardarInfante'];

    

     public function eliminarInfante(Infante $infante)
     {
         // dd($video->id);
         $infante->delete();
     }

    public function render()
    {
        // dd();
        
        $infantes = Infante::where('user_id', Auth::id())->orderBy('lastname_p')->get();
        // $this->authorize('viewAny',Infante: :class);
        // $infantes = Infante::where('user_id', Auth::id())->get();
        if($this->tipo==2){
            $infantes = Infante::all();
        }
        if($this->tipo==3){
            $infantes = Infante::all();
        }
        return view('livewire.mostrar-infantes',[
            'infantes'=>$infantes,'tipo'=>$this->tipo
        ]);
    }
}
