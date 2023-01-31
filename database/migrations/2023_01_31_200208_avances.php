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
        Schema::create('avances', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('contribuyente_id')->unsigned(); //select
            $table->tinyInteger('mes')->comment('0: Enero, 1: Febrero, 2: Marzo, 3: Abril, 4: Mayo, 5: Junio, 6: Julio, 7: Agosto, 8: Septiembre, 9: Octubre, 10: Noviembre, 11: Diciembre');
            $table->tinyInteger('estatus')->comment('0: Terminado, 1: Pendiente');
            $table->string('fecha');
            $table->string('pendientes');
            $table->timestamps();
            
            $table->foreign('contribuyente_id')->references('id')->on('contribuyentes')->onDelete("cascade");
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
