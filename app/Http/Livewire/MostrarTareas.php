<?php

namespace App\Http\Livewire;

use App\Models\Tarea;
use Livewire\Component;

class MostrarTareas extends Component
{
    public function render()
    {
        $tareas=Tarea::all();
        return view('livewire.mostrar-tareas',['tareas'=>$tareas]);
    }
}
