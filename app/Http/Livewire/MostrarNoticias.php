<?php

namespace App\Http\Livewire;

use App\Models\Noticia;
use Livewire\Component;

class MostrarNoticias extends Component
{
    // Declarar que debe escuchar ciertas funciones
    protected $listeners = ['eliminarNoticia'];

    public function eliminarNoticia(Noticia $noticia)
    {
        // dd($video->id);
        $noticia->delete();
    }
    public function render()
    {
        $noticias = Noticia::all();
        return view('livewire.mostrar-noticias', [
            'noticias' => $noticias
        ]);
    }
}
