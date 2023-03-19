<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sabia extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'autor',
        'url',
        'categoria_id',
        'descripcion',
        'user_id'
    ];
    
}

