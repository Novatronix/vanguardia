<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasesPeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clase_periodos', function (Blueprint $table) {
            $table->string('id_clase');
            $table->string('id_periodo');
            $table->string('seccion');
            $table->timestamps();
/**  
            $table->foreign('id_clase')->references('id_clase')->on('clases');
            $table->foreign('id_periodo')->references('id_periodo')->on('periodos');
             */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clases_periodos');
    }
}
