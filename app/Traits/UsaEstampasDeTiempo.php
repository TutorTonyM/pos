<?php
namespace App\Traits;

trait UsaEstampasDeTiempo
{
    public function initializeUsaEstampasDeTiempo()
    {
        $this->fillable[] = 'creado_por';
        $this->fillable[] = 'actualizado_por';
    }
}

