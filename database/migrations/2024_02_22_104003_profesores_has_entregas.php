<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProfesoresHasEntregas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores_has_entregas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profesores_id')->unsigned();
            $table->bigInteger('entregas_id')->unsigned();
          
            $table->timestamps();

            $table->foreign('profesores_id')->references('id')->on('profesores');
            $table->foreign('entregas_id')->references('id')->on('entregas');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesores_has_entregas');
    }
}
