<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUnidadDeMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_de_medidas', function (Blueprint $table) {
            $table->id();
            $table->string('clave');
            $table->string('nombre');
            $table->string('tipo');
            $table->text('descripcion')->nullable();
            $table->timestamp('creado_el')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedInteger('creado_por');
            $table->timestamp('actualizado_el')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->unsignedInteger('actualizado_por');
            $table->timestamp('eliminado_el')->nullable();
            $table->unsignedInteger('eliminado_por')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidad_de_medidas');
    }
}
