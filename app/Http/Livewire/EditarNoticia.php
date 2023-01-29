<?php

namespace App\Http\Livewire;

use App\Models\Noticia;
use Carbon\Carbon;
use Livewire\Component;

class EditarNoticia extends Component
{
    public $noticia_id;
    public $title;
    public $autor;
    public $url;
    public $date;

    public function mount(Noticia $noticia){
        $this->noticia_id=$noticia->id;
        $this->title=$noticia->title;
        $this->autor=$noticia->autor;
        $this->url=$noticia->url;
        $this->date=Carbon::parse($noticia->date)->format('Y-m-d');
    }

     // Reglas
     protected $rules=[
        'title'=>'required|string',
        'autor'=>'required|string',
        'url'=>'required|string',
        'date'=>'required'
    ];
    
    public function editarNoticia(){
        $datos=$this->validate();
        $noticia=Noticia::find($this->noticia_id);
        $noticia->title=$datos['title'];
        $noticia->autor=$datos['autor'];
        $noticia->url=$datos['url'];
        $noticia->date=$datos['date'];
        $noticia->save();
        return redirect()->route('noticia.index');
    }
    public function render()
    {

        return view('livewire.editar-noticia');
    }
}
