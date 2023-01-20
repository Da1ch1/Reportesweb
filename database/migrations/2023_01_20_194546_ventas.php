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
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->engine="InnoDB";
        $table->bigIncrements('id');
        $table->bigInteger('cliente_id')->unsigned();
        $table->string('Dia');
        $table->string('Contacto');
        $table->string('Actividad');
        $table->string('Procesoactividad');
        $table->string('Atendio');
        $table->string('Sincosto');
        $table->string('Nfactura');
        $table->string('Poliza');
        $table->string('Horario');
        $table->string('Sistemas');
        $table->string('Soporte');
        $table->string('Sistema2');
        $table->string('Soporte2');
        $table->string('Contabilidad');
        $table->string('Programacion');
        $table->string('Diseño');
        $table->string('MKT');
        $table->string('Nom');
        $table->string('Equipos');
        $table->string('Antivirus');
        $table->string('Cursos');
        $table->timestamps();
        
        $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete("cascade");
    }
};
