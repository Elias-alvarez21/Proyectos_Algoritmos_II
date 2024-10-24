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
            $table->Increments("tareasId");
            $table->unsignedBigInteger("User_Id");
            $table->string("descripcion",100);
            $table->dateTime("alta");
            $table->integer("prioridad");//SETEADO ENTRE 1 Y 10 
            $table->dateTime("vencimiento");
            $table->enum("estado",["pending","finished","expired"]);
            $table->timestamps();
            $table->foreign("User_Id")->references("id")->on("users");
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
