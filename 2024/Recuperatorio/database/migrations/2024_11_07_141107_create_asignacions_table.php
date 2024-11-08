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
        Schema::create('asignacions', function (Blueprint $table) {
            $table->increments("Asing_Id");
            $table->unsignedInteger("rrhh")->nullable(false);
            $table->unsignedInteger("areas")->nullable(false);
            $table->date("fecha");
            $table->boolean("habilitado");
            $table->timestamps();
            $table->foreign("rrhh")->references("RRHH_Id")->on("r_r_h_h_s");
            $table->foreign("areas")->references("AreasId")->on("areas");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacions');
    }
};
