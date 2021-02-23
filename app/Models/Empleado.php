<?php

namespace App\Models;

use App\Traits\UsaEstampasDeTiempo;
use App\Traits\UsaUuid;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Empleado extends Model
{
    use HasFactory, UsaUuid, UsaEstampasDeTiempo;

    protected $fillable = [
        'numero', 'primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido', 'direccion', 'ciudad', 'estado', 'codigo_postal', 'telefono', 'telefono2', 'activo', 'contratado_el'
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

    // MUTADORES
    public function setPrimerNombreAttribute($value)
    {
        $this->attributes['primer_nombre'] = Str::title($value);
    }

    public function setSegundoNombreAttribute($value)
    {
        $this->attributes['segundo_nombre'] = Str::title($value);
    }

    public function setPrimerApellidoAttribute($value)
    {
        $this->attributes['primer_apellido'] = Str::title($value);
    }

    public function setSegundoApellidoAttribute($value)
    {
        $this->attributes['segundo_apellido'] = Str::title($value);
    }
}
