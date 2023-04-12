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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('idalumno');
            $table->timestamps();
            $table->string('Nombre', 250);
            $table->bigInteger('edad');
            $table->dateTime('fecha_cumpleanios', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       // Schema::dropIfExists('alumnos');
    }
};
