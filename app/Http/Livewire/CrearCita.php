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

    protected $listeners=['terminoBusqueda'=>'buscar'];

     // Reglas
     protected $rules=[
        'infante_id'=>'required',
        'horario_id'=>'required',
        'date'=>'required'
    ];

    public function buscar($date){
        $this->date=$date;
        // dd('buscando');
    }

    public function reservarCita(){
        // dd('enviado');
        $datos=$this->validate();
        Cita::create([
            'infante_id'=>$datos['infante_id'],
            'horario_id'=>$datos['horario_id'],
            'date'=>$datos['date'],
            'asistio'=>'0',
            'cancelo'=>'0',
            'user_id'=>auth()->user()->id
        ]);
        return redirect()->route('citas.index');
    }
    public function render()
    {
        $infantes=Infante::all();
        $fecha = Carbon::now()->format('Y-m-d');
        $horariosAll=Horario::all();
        // $horarios=Horario::when($this->date, function ($query){
        //   $query->where('date',$this->date);
        // })->orderBy('horarios.id','DESC')->get(); 
                
        $horarios=Horario::when($this->date, function ($query){
             $query->join('citas', 'horarios.id', '=', 'citas.horario_id');
             $query->where('date',$this->date);
         })->orderBy('horarios.id','DESC')->get(); 
        
        $horariosA=$horariosAll->diff($horarios);
        
        // }
        // $horarios=Horario::all()->;
        // SELECT horario_id FROM horarios h inner join citas c on h.id =c.horario_id WHERE c.`date` ='2023-02-07';
  
        
        
        return view('livewire.crear-cita',['horarios'=>$horariosA->all(),'infantes'=>$infantes,'fecha'=>$fecha,'horariosS'=>$horarios,'horariosA'=>$horariosAll]);
    }
}
