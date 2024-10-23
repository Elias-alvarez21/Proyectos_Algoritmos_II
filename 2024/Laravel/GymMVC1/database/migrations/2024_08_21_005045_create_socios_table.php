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
        Schema::create('socios', function (Blueprint $table) {
            $table->smallIncrements('socioId');
            $table->string('apellido', 100)->nullable(false);
            $table->string('nombre', 100)->nullable(false);
            $table->string('DNI', 10)->nullable(false);
            $table->date('fechaNacimiento');
            $table->enum('genero', ['Femenino','Masculino', 'Otro']);
            $table->unsignedSmallInteger('actividadId')->nullable(false);
            $table->timestamps();
            $table->foreign('actividadId')->references('actividadId')->on('actividades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socios');
    }
};
