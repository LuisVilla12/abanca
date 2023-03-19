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

    public function horario(){
        return $this->belongsTo(Horario::class);
    }
    public function infante(){
        return $this->belongsTo(Infante::class);
    }
    // public function cantidatos(){
    //     return $this->hasMany(Candidato::class)->orderBy('created_at','DESC' );
    // }
    }
