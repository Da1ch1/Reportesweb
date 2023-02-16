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
        Schema::create('prospectos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('Nombre');
            $table->string('Contacto');
            $table->string('Servicio');
            $table->string('Medio_contacto');
            $table->bigInteger('seguimiento_id')->unsigned(); //select
            $table->bigInteger('agente_id')->unsigned(); //select
            $table->string('Fecha');
            $table->timestamps();

            $table->foreign('seguimiento_id')->references('id')->on('seguimientos')->onDelete("cascade");
            $table->foreign('agente_id')->references('id')->on('agentes')->onDelete("cascade");
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
