<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero', 'primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido', 'direccion', 'ciudad', 'estado', 'codigo_postal', 'telefono', 'telefono2', 'activo'
    ];

    // ACCESORES
    public function getFechaDeContratacionAttribute()
    {
        return Carbon::parse($this->contratado_el)->translatedFormat('d/m/Y');
    }

    public function getNombreCompletoAttribute()
    {
        return "$this->primer_nombre $this->segundo_nombre $this->primer_apellido $this->segundo_apellido";
    }
}
