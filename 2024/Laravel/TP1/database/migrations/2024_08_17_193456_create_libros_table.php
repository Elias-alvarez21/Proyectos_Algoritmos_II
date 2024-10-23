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
        Schema::create('libros', function (Blueprint $table) {
            $table->bigIncrements('libroId');
            $table->string('titulo', 100)->nullable(false);
            $table->unsignedInteger('autor_Id')->nullable(false);
            $table->unsignedInteger('categoria_Id')->nullable(false);
            $table->decimal('precio', 8, 2);
            $table->timestamps();
            $table->foreign('autor_Id')->references('autorId')->on('autores');
            $table->foreign('categoria_Id')->references('categoriaId')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
