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
        Schema::create('menu_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade')->nullable();
            $table->enum('linked_by', ['category', 'product','brand','custom_link','route'])->nullable();
            $table->tinyInteger('order_by');
            $table->string('menu_title');
            $table->boolean('has_children')->default(false)->nullable();
            $table->boolean('status')->default(true);
            $table->foreignId('parent_menu')->references('id')->on('menu_links')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('menu_links');
    }
};
