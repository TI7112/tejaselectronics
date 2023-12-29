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
        Schema::create('tbl_category', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('slug')->unique();
            $table->text('img')->nullable();
            $table->text('video')->nullable();
            $table->timestamps();
        });

        Schema::create('tbl_product', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('slug')->unique();
            $table->text('price');
            $table->text('original_price');
            $table->text('size')->nullable();
            $table->text('color')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('id')->on('tbl_category')->cascadeOnUpdate();
            $table->text('img')->nullable();
            $table->text('video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_category');
        Schema::dropIfExists('tbl_product');
    }
};
