<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('pedidoId');
            $table->unsignedInteger('clienteId')->nullable(false);
            $table->date('fecha')->nullable(false);
            $table->decimal('total', 8, 2);
            $table->timestamps();
            $table->foreign('clienteId')->references('clienteId')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
