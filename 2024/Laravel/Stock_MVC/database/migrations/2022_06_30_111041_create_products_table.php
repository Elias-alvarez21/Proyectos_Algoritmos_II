<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->integerIncrements('idproduct');
            $table->unsignedTinyInteger('idcategory')->nullable(false);
            $table->string('denomination', 50)->nullable(false);
            $table->string('additional_info', 100)->nullable(true);
            $table->decimal('price', $precision = 8, $scale = 2)->nullable(false);
            $table->unsignedInteger('stock')->nullable(false);
            $table->timestamps();
            $table->boolean('enabled')->default(1);
            $table->foreign('idcategory')->references('idcategory')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
