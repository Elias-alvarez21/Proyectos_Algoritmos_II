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
        Schema::create('tareas', function (Blueprint $table) {
            $table->increments("TareaId");
            $table->unsignedBigInteger("usuario_Id")->nullable(false);
            $table->integer("prioridad");
            $table->string("descripcion",100);
            $table->date("vencimiento");
            $table->date("alta");
            $table->enum("estado",["pending","finished","expired"]);
            $table->timestamps();
            $table->foreign("usuario_Id")->references("id")->on("users")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
