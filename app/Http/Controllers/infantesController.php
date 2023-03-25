<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Infante;
use Illuminate\Http\Request;

class infantesController extends Controller
{

    public function index(){
        //
        return view('infante.index');
    }

    public function create(){
        //
        return view('infante.create');

    }

    public function store(Request $request){
        //
    }

    public function show(Infante $infante){
        //
        $citas=Cita::all()->where('infante_id',$infante->id);
        return view('infante.show',['infante'=>$infante,'citas'=>$citas]);
    }

    public function edit(Infante $infante){
        //
        return view('infante.edit',[
            'infante'=>$infante
        ]);
    }

   
    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}
