<?php

namespace App\Http\Livewire;

use App\Models\Tarea;
use Livewire\Component;
use Illuminate\Support\Carbon;

class EditarTarea extends Component
{
    public $tarea_id;
    public $title;
    public $descripcion;
    public $date;
    public $user_id;
    
     // Sincronizar atributos a traves de la funcion mount de la instancia  que se esta pasando
     public function mount(Tarea $tarea)
     {
         $this->tarea_id = $tarea->id;
         $this->title = $tarea->title;  
         $this->descripcion = $tarea->descripcion;  
         $this->date = $tarea->date;  
         $this->user_id = $tarea->user_id;  
         dd($tarea);
           }

            // Reglas
    protected $rules=[
        'title'=>'required|string',
        'user_id'=>'required|string',
        'descripcion'=>'required|string',
        'date'=>'required'
    ];
    public function editarTarea()
    {
        $datos = $this->validate();

        // Encontrar el video
        $tarea = Tarea::find($this->video_id);
        // Asignar valores
        $tarea->title = $datos['title'];
        $tarea->descripcion = $datos['descripcion'];
        $tarea->date = $datos['date'];
        $tarea->user_id = $datos['user_id'];
        // Guardar tarea
        $tarea->save();
        return redirect()->route('actividades.index');
    }

    public function render()
    {
        $fecha = Carbon::now()->format('Y-m-d');
        return view('livewire.editar-tarea',['fecha'=>$fecha]);
    }
}

