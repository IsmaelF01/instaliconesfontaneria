<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fontaneria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'foto', 'descripcion', 'categoria', 'precio', 'tiempo'
    ];
}
