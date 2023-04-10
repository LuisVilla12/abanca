<?php

namespace App\Http\Livewire;

use App\Models\Infante;
use App\Models\Reporte;
use App\Models\Tarea;
use Livewire\Component;

class CrearReportes extends Component
{
    public $tarea_id;
    public $infante_id;
    public $url;
    public $descripcion;
    // Reglas
    protected $rules=[
    'tarea_id'=>'required',
    'infante_id'=>'required',
    'descripcion'=>'required|string',
    'url'=>'string',
];
public function crearReporte(){
    $datos=$this->validate();
    // dd($datos);
    Reporte::create([
        'tarea_id'=>$datos['tarea_id'],
        'infante_id'=>$datos['infante_id'],
        // 'url'=>$datos['url'],
        'date'=>date('Y-m-d'),
        'estatus'=>'1',
        'descripcion'=>$datos['descripcion'],
        'user_id'=>auth()->user()->id
    ]);
    return redirect()->route('reportes.index');
}

    public function render()
    {
        $tareas=Tarea::where('estatus',1)->get();
        // dd($tareas);
        $infantes=Infante::where('publicado',1)->get();
        return view('livewire.crear-reportes',['tareas'=>$tareas,'infantes'=>$infantes]);
    }
}
