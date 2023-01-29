<?php

namespace App\Http\Livewire;

use App\Models\Noticia;
use Livewire\Component;

class CrearNoticia extends Component
{ 
    public $title;
    public $autor;
    public $url;
    public $date;

     // Reglas
     protected $rules=[
        'title'=>'required|string',
        'autor'=>'required|string',
        'url'=>'required|string',
        'date'=>'required'
    ];
    public function crearNoticia(){
        $datos=$this->validate();
        Noticia::create([
            'title'=>$datos['title'],
            'autor'=>$datos['autor'],
            'url'=>$datos['url'],
            'date'=>$datos['date'],
            'user_id'=>auth()->user()->id
        ]);
        return redirect()->route('noticia.index');
    }

    public function render()
    {
        return view('livewire.crear-noticia');
    }
}

