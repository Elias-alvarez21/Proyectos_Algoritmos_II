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
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements("ventaId");
            $table->date("fecha_realizada");
            $table->decimal("precio_total",8,2);
            $table->unsignedInteger("auto_Id")->nullable(false);
            $table->unsignedInteger("cliente_Id")->nullable(false);
            $table->timestamps();
            $table->foreign("auto_Id")->references("autoId")->on("autos")->onDelete('cascade')->onUpdate('cascade');
            $table->foreign("cliente_Id")->references("clienteId")->on("clientes")->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
