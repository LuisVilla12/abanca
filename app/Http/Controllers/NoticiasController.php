<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    //
    public function index(){
        return view('news.index');
    }
    public function create(){
        return view('news.create');
    }
    public function edit(Noticia $noticia){
        return view('news.edit',['noticia'=>$noticia]);
    }
}
