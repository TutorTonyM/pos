<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'primer_nomber', 'segundo_nombre', 'primer_apellido', 'segundo_apellido', 'direccion', 'ciudad', 'estado', 'codigo_postal', 'telefono', 'telefono2', 'activo'
    ];
}
