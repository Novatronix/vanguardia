<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosClasesPeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_clases_periodos', function (Blueprint $table) {
            $table->string('id_alumno');
            $table->string('id_clase');
            $table->string('id_periodo');
            $table->double('acumulativo');
            $table->double('nota_final');
            $table->string('estado_clase');
            $table->integer('faltas');
            $table->timestamps();

            /** 
            $table->foreign('id_alumno')->references('id_alumno')->on('alumnos');
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
        Schema::dropIfExists('alumno_clases_periodos');
    }
}
