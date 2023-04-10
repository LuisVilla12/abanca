<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;
    protected $dates=['date'];
    protected $fillable = [
        'infante_id',
        'tarea_id',
        'estatus',
        'date',
        'descripcion',
        // 'url',
        'user_id'
    ];
    public function infante(){
        return $this->belongsTo(Infante::class);
    }
    public function tarea(){
        return $this->belongsTo(Tarea::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}

