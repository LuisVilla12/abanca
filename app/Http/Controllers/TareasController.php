<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareasController extends Controller
{
    //
    public function index(){
        return view('actividades.index');
    }
    public function create(){
        return view('actividades.create');
    }

    public function edit(Tarea $tarea){
        return view('actividades.edit',[ 'tarea'=>$tarea]);
    }

}
