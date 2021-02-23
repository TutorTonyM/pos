<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identificacion extends Model
{
    public static function numerosAlAzar($min = 100000, $max = 999999)
    {
        $numero = mt_rand($min, $max);

        while(Empleado::where('numero', $numero)->exists()){
            $numero = mt_rand($min, $max);
        }

        return $numero;
    }

    public static function numeroDeEmpleado($min = 100000, $max = 999999)
    {
        return ['numero' => Identificacion::numerosAlAzar($min, $max)];
    }
}
