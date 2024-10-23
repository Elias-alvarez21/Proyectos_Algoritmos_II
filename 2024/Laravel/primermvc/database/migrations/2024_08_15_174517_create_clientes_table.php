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
        Schema::create('clientes', function (Blueprint $table) {
            $table->integerIncrements('clienteId');
            $table->string('nombre', 100)->nullable(false);
            $table->string('email', 100)->nullable(false);
            $table->string('telefono', 30)->nullable(true);
            $table->longText('direccion')->nullable(true);
            $table->unique('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
