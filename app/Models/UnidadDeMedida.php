<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class UnidadDeMedida extends Model
{
    use HasFactory;

    protected $fillable = [
        'clave', 'nombre', 'tipo', 'descripcion'
    ];
}
