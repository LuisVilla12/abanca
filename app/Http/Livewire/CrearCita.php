<?php

namespace App\Http\Livewire;

use App\Models\Cita;
use App\Models\Horario;
use App\Models\Infante;
use Livewire\Component;
use Illuminate\Support\Carbon;

class CrearCita extends Component
{
    public $infante_id;
    public $horario_id;
    public $date;
    public $cancelo;
    public $asistio;

     // Reglas
     protected $rules=[
        'infante_id'=>'required',
        'horario_id'=>'required',
        'date'=>'required'
    ];

    public function crearCita(){
        $datos=$this->validate();
        Cita::create([
            'infante_id'=>$datos['infante_id'],
            'horario_id'=>$datos['horario_id'],
            'date'=>$datos['date'],
            'asistio'=>'0',
            'cancelo'=>'0',
            'user_id'=>auth()->user()->id
        ]);
        return redirect()->route('infante.index');
    }
    public function render()
    {
        $horarios=Horario::all();
        $infantes=Infante::all();
        $fecha = Carbon::now()->format('Y-m-d');
        return view('livewire.crear-cita',['horarios'=>$horarios,'infantes'=>$infantes,'fecha'=>$fecha]);
    }
}
