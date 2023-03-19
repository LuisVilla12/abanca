<?php

namespace App\Http\Livewire;

use App\Models\Sabia;
use Livewire\Component;
use App\Models\Categoria;

class CrearSabia extends Component
{
    public $title;
    public $autor;
    public $url;
    public $categoria;
    public $descripcion;

     // Reglas
     protected $rules=[
        'title'=>'required|string',
        'autor'=>'required|string',
        'url'=>'required|string',
        'descripcion'=>'required|string',
        'categoria'=>'required'
    ];
    public function crearSabia(){
        $datos=$this->validate();
      
        Sabia::create([
            'title'=>$datos['title'],
            'autor'=>$datos['autor'],
            'url'=>$datos['url'],
            'descripcion'=>$datos['descripcion'],
            'categoria_id'=>$datos['categoria'],
            'user_id'=>auth()->user()->id
        ]);
        // Crear mensaje
        // session()->flash('mensaje','El video se publico correctamente');
        // Redireccionar
        return redirect()->route('sabia.index');
    }

    public function render()
    {
        $categorias=Categoria::all();
        return view('livewire.crear-sabia',[
            'categorias'=>$categorias
        ]);
    }
}
