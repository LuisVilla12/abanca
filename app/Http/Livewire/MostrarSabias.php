<?php

namespace App\Http\Livewire;

use App\Models\Sabia;
use Livewire\Component;

class MostrarSabias extends Component
{
    // Declarar que debe escuchar ciertas funciones
    protected $listeners = ['eliminarEnlace'];

    public function eliminarEnlace(Sabia $sabia)
    {
        // dd($video->id);
        $sabia->delete();
    }
    public function render()
    {
        $sabias = Sabia::all();
        return view('livewire.mostrar-sabias', [
            'sabias' => $sabias
        ]);
    }
}
