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
            $table->id();
            $table->string('name');
            $table->longText('desc')->nullable();
            $table->decimal('price', 10, 2);
            $table->decimal('tinggi', 10, 2)->nullable();
            $table->decimal('berat', 10, 2)->nullable();
            $table->string('warna')->nullable();
            $table->string('jenis')->nullable();
            $table->integer('catalog');
            $table->timestamps();
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
