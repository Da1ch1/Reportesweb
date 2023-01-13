<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->timestamp('Fecha_inicio');
            $table->date('Fecha_fin');
            $table->string('Hora_inicio');
            $table->string('Hora_fin');
            $table->string('Cliente');
            $table->string('Asunto');
            $table->string('Ejecutivo');
            $table->tinyInteger('Estatus')->comment('0: Pendiente, 1: En Proceso, 2: Hecho');
            $table->string('Evidencia')->nullable();
            $table->string('Post-Venta');
            $table->string('Comentarios');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportes');
    }
};
