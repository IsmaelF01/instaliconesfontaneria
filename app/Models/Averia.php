<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Averia extends Model
{
    use HasFactory;

    protected $fillable = [
        'estado', 'descripcion', 'fecha', 'hora', 'direccion', 'ciudad'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function fontaneria(){
        return $this->belongsTo(Fontaneria::class);
    }
}
