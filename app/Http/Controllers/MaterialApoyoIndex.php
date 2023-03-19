<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaterialApoyoIndex extends Controller
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
        $videosI=DB::table('videos')->where('categoria_id', '=', 2)->get();
        $videosP=DB::table('videos')->where('categoria_id', '=', 1)->get();
     
        return view('material',[
            'videosI'=>$videosI,
            'videosP'=>$videosP,
        ]);
    }
}
