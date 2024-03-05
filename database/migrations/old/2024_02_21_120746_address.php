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
        Schema::create('tbl_address', function (Blueprint $table) {
            $table->id();
            $table->text('user_id');
            $table->text('address_line_1')->nullable();
            $table->text('address_line_2')->nullable();
            $table->text('landmark')->nullable();
            $table->text('city')->nullable();
            $table->text('landmark')->nullable();
            $table->text('pincode')->nullable();
            $table->text('state')->nullable();
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
        Schema::dropIfExists('tbl_address');
    }
};
