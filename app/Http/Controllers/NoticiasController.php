<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    //
    public function index(){
        $this->authorize('viewAny',Noticia::class);
        return view('news.index');
    }
    
    public function create(){
        $this->authorize('create',Noticia::class);
        return view('news.create');
    }
    public function edit(Noticia $noticia){
        $this->authorize('update',$noticia);
        return view('news.edit',['noticia'=>$noticia]);
    }
}
