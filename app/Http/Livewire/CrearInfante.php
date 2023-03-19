<?php

namespace App\Http\Livewire;

use App\Models\Infante;
use Livewire\Component;
use Illuminate\Support\Carbon;

class CrearInfante extends Component
{
    public $name;
    public $lastname_p;
    public $lastname_m;
    public $date;
    public $genero;

     // Reglas
     protected $rules=[
        'name'=>'required|string',
        'lastname_p'=>'required|string',
        'lastname_m'=>'required|string',
        'genero'=>'required',
        'date'=>'required'
    ];
    public function crearInfante(){
        $datos=$this->validate();
        Infante::create([
            'name'=>$datos['name'],
            'lastname_p'=>$datos['lastname_p'],
            'lastname_m'=>$datos['lastname_m'],
            'genero'=>$datos['genero'],
            'date'=>$datos['date'],
            'user_id'=>auth()->user()->id
        ]);
        return redirect()->route('infante.index');
    }
    public function render()
    {
        $fecha = Carbon::now()->format('Y-m-d');
        return view('livewire.crear-infante',['fecha'=>$fecha]);
    }
}




