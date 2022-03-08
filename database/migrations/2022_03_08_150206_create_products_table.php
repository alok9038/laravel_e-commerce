<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('title');
            $table->string('meta_title')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('slug')->nullable();
            $table->text('summary')->nullable();
            $table->text('description')->nullable();
            $table->string('sku')->nullable();
            $table->float('price')->nullable();
            $table->float('discount')->nullable();
            $table->tinyInteger('qty')->nullable();
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade')->nullable();
            $table->foreignId('sub_category_id')->references('id')->on('categories')->onDelete('cascade')->nullable();
            $table->foreignId('brand_id')->references('id')->on('brands')->onDelete('cascade')->nullable();
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
};
