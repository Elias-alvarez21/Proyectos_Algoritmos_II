<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('personas', function (Blueprint $table) {
        $table->Increments("personasId");
        $table->integer('legajo');
        $table->unsignedInteger('area_id');
        $table->string('apellido');
        $table->string('nombre');
        $table->date('fecha_ingreso');
        $table->enum('estado',['Activo', 'Baja', 'Jubilado']);
        $table->timestamps();
        $table->foreign('area_id')->references("area_Id")->on("areas");
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
