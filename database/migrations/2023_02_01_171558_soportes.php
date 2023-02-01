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
        Schema::create('soportes', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('Fecha_inicio');
            $table->string('Fecha_fin');
            $table->string('Hora_inicio');
            $table->string('Hora_fin');
            $table->string('Cliente');
            $table->string('Asunto');
            $table->bigInteger('spejecutivo_id')->unsigned(); //select
            $table->bigInteger('stat_id')->unsigned(); //select
            $table->string('Evidencia')->nullable();
            $table->string('PostVenta');
            $table->string('Comentarios');
            $table->timestamps();

            $table->foreign('spejecutivo_id')->references('id')->on('spejecutivos')->onDelete("cascade");
            $table->foreign('stat_id')->references('id')->on('stats')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
