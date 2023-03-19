<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;
    protected $dates=['date'];
    protected $fillable = [
        'title',
        'autor',
        'date',
        'descripcion',
        'descripcion_dos',
        'urlimg',
        'url',
        'user_id'
    ];
}
