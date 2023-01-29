<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Livewire\Component;
use App\Models\Categoria;

class CrearVideo extends Component
{
    public $title;
    public $url;
    public $categoria;

     // Reglas
     protected $rules=[
        'title'=>'required|string',
        'url'=>'required|string',
        'categoria'=>'required'
    ];

    public function crearVideo(){
        $datos=$this->validate();
      
        Video::create([
            'title'=>$datos['title'],
            'url'=>$datos['url'],
            'categoria_id'=>$datos['categoria'],
            'user_id'=>auth()->user()->id
        ]);
        // Crear mensaje
        session()->flash('mensaje','El video se publico correctamente');
        // Redireccionar
        return redirect()->route('video.index');
    }
    
   
    public function render()
    {
        $categorias=Categoria::all();
        return view('livewire.crear-video',[
            'categorias'=>$categorias
        ]);
        
    }
}
