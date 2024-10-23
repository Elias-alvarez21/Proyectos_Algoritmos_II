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
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('pagoId');
            $table->unsignedSmallInteger('actividadId')->nullable(false);
            $table->unsignedSmallInteger('socioId')->nullable(false);
            $table->enum('modalidad', ['Efectivo','Débito', 'Crédito', 'Transferencia', 'Billetera Virtual']);
            $table->float("precio", 8, 2);
            $table->boolean('anulado')->nullable(false)->default(0);
            $table->timestamps();
            $table->foreign('actividadId')->references('actividadId')->on('actividades');
            $table->foreign('socioId')->references('socioId')->on('socios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
