<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('idmateria');
            $table->unsignedBigInteger('materia_idalumno');
            $table->string('Nombre_materia', 250);
            $table->foreign('materia_idalumno')->references('idalumno')->on('alumnos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
