<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguimientosAlumnosPeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimientos_alumnos_periodos', function (Blueprint $table) {
            $table->increments('id_registro');
            $table->string('id_alumno');
            $table->string('id_carrera');
            $table->string('id_periodo');
            $table->string('estado_alumno_periodo');
            $table->string('comentarios');

            $table->timestamps();
            
            /**
            $table->foreign('id_alumno')->references('id_alumno')->on('alumnos');
            $table->foreign('id_carrera')->references('id_carrera')->on('carreras');
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
        Schema::dropIfExists('seguimientos_alumnos_periodos');
    }
}
