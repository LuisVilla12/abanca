<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Sabia;
use Livewire\Component;


class EditarSabia extends Component
{
    public $sabia_id;
    public $title;
    public $autor;
    public $url;
    public $categoria;
    public $descripcion;

    public function mount(Sabia $sabia){
        $this->sabia_id= $sabia->id;
        $this->title= $sabia->title;
        $this->autor= $sabia->autor;
        $this->url= $sabia->url;
        $this->descripcion= $sabia->descripcion;
        $this->categoria= $sabia->categoria_id;
    }
     // Reglas
     protected $rules=[
        'title'=>'required|string',
        'autor'=>'required|string',
        'url'=>'required|string',
        'categoria'=>'required',
        'descripcion'=>'required'
    ];
    public function editarSabia(){
        $datos=$this->validate();
        // Encontrar
        $sabia = Sabia::find($this->sabia_id);
        $sabia->title=$datos['title'];
        $sabia->autor=$datos['autor'];
        $sabia->url=$datos['url'];
        $sabia->categoria_id=$datos['categoria'];
        $sabia->descripcion=$datos['descripcion'];
        $sabia->save();

        return redirect()->route('sabia.index');

    }
    public function render()
    {
        $categorias=Categoria::all();
        return view('livewire.editar-sabia',['categorias'=>$categorias]);
    }
}
