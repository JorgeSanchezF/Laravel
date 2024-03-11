<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlumnosHasEntregas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_has_entregas', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_entrega');
            $table->integer('calificacion');
            $table->string('estado');
            $table->bigInteger('alumnos_id')->unsigned();
            $table->bigInteger('entregas_id')->unsigned();
            $table->timestamps();

            $table->foreign('entregas_id')->references('id')->on('entregas');
            $table->foreign('alumnos_id')->references('id')->on('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos_has_entregas');
    }
}
