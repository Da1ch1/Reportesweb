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
        Schema::create('ventas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('cliente_id')->unsigned(); //select
            $table->string('Fecha');
            $table->bigInteger('contacto_id')->unsigned();
            $table->bigInteger('actividad_id')->unsigned();
            $table->string('Procesoactividad');
            $table->string('Vendedor');
            $table->string('Atendio');   //select
            $table->bigInteger('costo_id')->unsigned();//select
            $table->string('Nfactura');
            $table->string('Poliza')->nullable();//bloques
            $table->string('Horario');
            $table->string('Sistemas')->nullable();
            $table->string('Soporte')->nullable();
            $table->string('Contabilidad')->nullable();
            $table->string('Programacion')->nullable();
            $table->string('Diseño')->nullable();
            $table->string('MKT')->nullable();
            $table->string('Nom')->nullable();
            $table->string('Equipos')->nullable();
            $table->string('Antivirus')->nullable();
            $table->string('Cursos')->nullable();
            $table->timestamps();
            
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete("cascade");
            $table->foreign('contacto_id')->references('id')->on('contactos')->onDelete("cascade");
            $table->foreign('actividad_id')->references('id')->on('actividades')->onDelete("cascade");
            $table->foreign('costo_id')->references('id')->on('costos')->onDelete("cascade");
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
