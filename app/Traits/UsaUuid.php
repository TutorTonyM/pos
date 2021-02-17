<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait UsaUuid
{
    protected static function bootUsaUuid()
    {
        static::creating(function ($model){
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}