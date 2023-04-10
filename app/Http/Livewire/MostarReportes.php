<?php

namespace App\Http\Livewire;

use App\Models\Reporte;
use Livewire\Component;

class MostarReportes extends Component
{
    public function render()
    {
        $reportes=Reporte::all();

        return view('livewire.mostar-reportes',['reportes'=>$reportes]);
    }
}
