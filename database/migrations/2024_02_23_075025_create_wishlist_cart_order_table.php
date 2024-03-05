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
        Schema::create('tbl_wishlist', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('product_id')->references('id')->on('tbl_category')->cascadeOnUpdate();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate();
            $table->text('status')->nullable();
            $table->timestamps();
        });

        Schema::create('tbl_order', function (Blueprint $table) {
            $table->id();
            $table->text('order_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('product_id')->references('id')->on('tbl_category')->cascadeOnUpdate();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate();
            $table->text('quantity');
            $table->text('status')->nullable();
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
        Schema::dropIfExists('tbl_wishlist');
        Schema::dropIfExists('tbl_order');
    }
};
