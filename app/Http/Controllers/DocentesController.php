<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocentesController extends Controller
{
    //
    public function index(){
        return view('docentes.index');
    }
    public function create(){
        // return view('auth.register');
        return view('docentes.create');
    }
    public function edit(){
        return view('docentes.edit');
    }
}

