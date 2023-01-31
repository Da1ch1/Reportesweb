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
        Schema::create('contribuyentes', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('rfc');
            $table->string('nombre');
            $table->bigInteger('regimen_id')->unsigned(); //Select
            $table->string('email');
            $table->string('telefono');
            $table->string('factura_contraseña');
            $table->string('nomina_contraseña');
            $table->string('vencimiento_csd');
            $table->string('ciec_contraseña')->comment('SAT');
            $table->string('fiel_contraseña')->comment('SAT');
            $table->string('vencimiento_fiel')->comment('SAT');
            $table->string('ev_imss_usuario')-> comment('IMSS');
            $table->string('ev_imss_contraseña')-> comment('IMSS');
            $table->string('idse_usuario')->comment('IDSE');
            $table->string('idse_contraseña')->comment('IDSE');
            $table->string('sipare_usuario')->comment('SIPARE');
            $table->string('sipare_contraseña')->comment('SIPARE');
            $table->string('usuario_2')->commet('2% Nom');
            $table->string('contraseña_2')->commet('2% Nom');
            $table->string('infonavit_usuario')->comment('INFONAVIT');
            $table->string('infonavit_contraseña')->comment('INFONAVIT');
            $table->string('citas_jal_usuario')->comment('CITAS JAL');
            $table->string('citas_jal_contraseña')->comment('CITAS JAL');
            $table->string('sas_usuario')->comment('SAS');
            $table->string('sas_contraseña')->comment('SAS');
            $table->string('extra')->nullable();
            $table->timestamps();

            $table->foreign('regimen_id')->references('id')->on('regimens')->onDelete("cascade");
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
