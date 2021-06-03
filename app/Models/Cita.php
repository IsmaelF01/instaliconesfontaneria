<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion', 'estado', 'fecha', 'hora', 'direccion', 'ciudad'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function fontaneria(){
        return $this->belongsTo(Fontaneria::class);
    }
}
