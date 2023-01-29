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
        'url',
        'user_id'
    ];
}
