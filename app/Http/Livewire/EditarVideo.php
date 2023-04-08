<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Livewire\Component;
use App\Models\Categoria;


class EditarVideo extends Component
{
    public $video_id;
    public $title;
    public $url;
    public $categoria;
    public $autor;

    // Sincronizar atributos a traves de la funcion mount de la instancia  que se esta pasando
    public function mount(Video $video)
    {
        $this->video_id = $video->id;
        $this->title = $video->title;
        $this->url = $video->url;
        $this->autor = $video->autor;
        $this->categoria = $video->categoria_id;
    }

    // Reglas
    protected $rules = [
        'title' => 'required|string',
        'url' => 'required|string',
        'categoria' => 'required',
        'autor' => 'required'
    ];


    public function editarVideo()
    {
        $datos = $this->validate();

        // Encontrar el video
        $video = Video::find($this->video_id);
        // Asignar valores
        $video->title = $datos['title'];
        $video->categoria_id = $datos['categoria'];
        $video->url = $datos['url'];
        $video->autor = $datos['autor'];
        // Guardar video
        $video->save();
        return redirect()->route('video.index');
    }

    public function render()
    {
        $categorias = Categoria::all();
        return view('livewire.editar-video', [
            'categorias' => $categorias
        ]);
    }
}
