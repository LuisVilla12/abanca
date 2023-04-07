<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
    protected $dates=['date'];
    protected $fillable = [
        'title',
        'descripcion',
        'date',
        'user_id'
    ];
}
