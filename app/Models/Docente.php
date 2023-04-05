<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $dates=['date'];
    protected $fillable = [
        'name',
        'lastname_p',
        'lastname_m',
        'date',
        'genero',
        'user_id'
    ];
}

