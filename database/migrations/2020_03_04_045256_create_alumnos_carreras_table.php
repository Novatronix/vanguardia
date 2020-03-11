<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_carreras', function (Blueprint $table) {
            $table->string('id_alumno');
            $table->string('id_carrera');
            $table->timestamps();

       /**
          $table->foreign('id_alumno')->references('id_alumno')->on('alumnos');
            $table->foreign('id_carrera')->references('id_carrera')->on('carreras');
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
        Schema::dropIfExists('alumnos_carreras');
    }
}
