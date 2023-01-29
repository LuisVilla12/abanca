<?php

namespace App\Http\Livewire;

use App\Models\Infante;
use Livewire\Component;
use Illuminate\Support\Carbon;

class EditarInfante extends Component
{
    public $infante_id;
    public $name;
    public $lastname_p;
    public $lastname_m;
    public $date;
    public $genero;

    public function mount(Infante $infante){
        $this->infante_id = $infante->id;
        $this->name = $infante->name;
        $this->lastname_p = $infante->lastname_p;
        $this->lastname_m = $infante->lastname_m;
        // $this->date = $infante->date;
        $this->date=Carbon::parse($infante->date)->format('Y-m-d');
        $this->genero=$infante->genero;
    }
     // Reglas
     protected $rules=[
        'name'=>'required|string',
        'lastname_p'=>'required|string',
        'lastname_m'=>'required|string',
        'genero'=>'required',
        'date'=>'required'
    ];
    public function editarInfante(){
        $datos=$this->validate();
        // Encontrar el infante
        $infante = Infante::find($this->infante_id);
        $infante->name=$datos['name'];
        $infante->lastname_p=$datos['lastname_p'];
        $infante->lastname_m=$datos['lastname_m'];
        $infante->genero=$datos['genero'];
        $infante->date=$datos['date'];

        $infante->save();

        return redirect()->route('infante.index');
    }
    public function render()
    {
        return view('livewire.editar-infante');
    }
}
