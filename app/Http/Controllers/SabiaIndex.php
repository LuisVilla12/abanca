<?php

namespace App\Http\Controllers;

use App\Models\Sabia;
use Illuminate\Http\Request;

class SabiaIndex extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $sabias=Sabia::all();
        return view('sabias.catalogue',['sabias'=>$sabias]);
    }
}
