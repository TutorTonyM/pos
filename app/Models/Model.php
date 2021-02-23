<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    public $timestamps = false;

    public static function creadoPor()
    {
        return ['creado_por' => 0, 'actualizado_por' => 0];
    }
}
