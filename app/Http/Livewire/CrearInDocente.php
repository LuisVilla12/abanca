<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Docente;
use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class CrearInDocente extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $lastname_p;
    public $lastname_m;
    public $type;

     // Reglas
     protected $rules=[
        'name'=>'required|string',
        'lastname_p'=>'required|string',
        'lastname_m'=>'required|string',
        // 'genero'=>'required',
        'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        'password' => ['required', 'confirmed']
    ];

    public function crearDocente(){
        $datos=$this->validate();
        User::create([
            'name'=>$datos['name'],
            'lastname_p'=>$datos['lastname_p'],
            'lastname_m'=>$datos['lastname_m'],
            // 'genero'=>$datos['genero'],
            'email' => $datos['email'],
            'type' => '3',
            'password' => Hash::make($datos['password']),
        ]);
        return redirect()->route('docentes.index');
    }
    public function render(){
        $fecha = Carbon::now()->format('Y-m-d');
        return view('livewire.crear-in-docente',['fecha'=>$fecha]);
    }
}
