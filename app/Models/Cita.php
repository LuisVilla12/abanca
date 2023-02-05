<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $dates=['date']; 
    protected $fillable = [
        'user_id',
        'infante_id',
        'horario_id',
        'date',
        'asistio',
        'cancelo',
    ];
}


