<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class MostrarDocentes extends Component
{
    public function render()
    {
        $docentes=User::where('type','=','3')->get();
        return view('livewire.mostrar-docentes',['docentes'=>$docentes]);
    }
}
