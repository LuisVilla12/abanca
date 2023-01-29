<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class MostrarVideos extends Component
{
 // Declarar que debe escuchar ciertas funciones
 protected $listeners=['eliminarVideo'];

 public function eliminarVideo(Video $video){
    // dd($video->id);
    $video->delete(); 
 }
    public function render()
    {
        $videos=Video::all();
        // $videos=DB::all('videos')->paginate(3);
        return view('livewire.mostrar-videos',[
            'videos'=>$videos
        ]);
    }
}
