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
        Schema::create('marketings', function (Blueprint $table) {
            $table->engine="InnoDB";
                $table->bigIncrements('id');
                $table->string('fecha');
                $table->string('actividad');
                $table->tinyInteger('red_social')->comment('0: whatsapp, 1:fb, 2:tiktok, 3:instagram, 4:youtube');
                $table->bigInteger('mkejecutivo_id')->unsigned(); //select
                $table->tinyInteger('estatus')->comment('0: Terminado, 1: Pendiente, 2:Hecho');
                $table->string('comentarios');
                $table->timestamps();
                
                $table->foreign('mkejecutivo_id')->references('id')->on('marketings')->onDelete("cascade");
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
