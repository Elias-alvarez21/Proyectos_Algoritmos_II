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
            $table->integerIncrements('ventaId');
            $table->unsignedBigInteger("libro_Id")->nullable(false);
            $table->dateTime('fecha')->nullable(false);
            $table->integer("total");
            $table->timestamps();
            $table->foreign("libro_Id")->references("libroId")->on("libros")->onDelete('cascade')//LE AGREGUE ESTO 
            ->onUpdate('cascade');
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
