<?php

namespace App\Http\Livewire;

use App\Models\Noticia;
use Livewire\Component;
use Illuminate\Support\Carbon;

class CrearNoticia extends Component
{ 
    public $title;
    public $autor;
    public $url;
    public $date;
    public $descripcion;
    public $descripcion_dos;

     // Reglas
     protected $rules=[
        'title'=>'required|string',
        'autor'=>'required|string',
        'url'=>'required|string',
        'descripcion'=>'required|string',
        'descripcion_dos'=>'string',
        'date'=>'required'
    ];
    public function crearNoticia(){
        $datos=$this->validate();
        Noticia::create([
            'title'=>$datos['title'],
            'autor'=>$datos['autor'],
            'url'=>$datos['url'],
            'date'=>$datos['date'],
            'descripcion'=>$datos['descripcion'],
            'descripcion_dos'=>$datos['descripcion_dos'],
            'user_id'=>auth()->user()->id
        ]);
        return redirect()->route('noticia.index');
    }

    public function render()
    {
        $fecha = Carbon::now()->format('Y-m-d');
        return view('livewire.crear-noticia',['fecha'=>$fecha]);
    }
}

