<?php

namespace App\Http\Livewire;

use App\Models\Tarea;
use Livewire\Component;
use Illuminate\Support\Carbon;

class CrearTarea extends Component
{
    public $title;
    public $descripcion;
    public $date;
    
    // Reglas
    protected $rules=[
        'title'=>'required|string',
        'descripcion'=>'required|string',
        'date'=>'required'
    ];
    public function crearTarea(){
        $datos=$this->validate();
        Tarea::create([
            'title'=>$datos['title'],
            'date'=>$datos['date'],
            'descripcion'=>$datos['descripcion'],
            'user_id'=>auth()->user()->id
        ]);
        return redirect()->route('tareas.index');
    }

    
    public function render()
    {
        $fecha = Carbon::now()->format('Y-m-d');
        return view('livewire.crear-tarea',['fecha'=>$fecha]);
    }
}

