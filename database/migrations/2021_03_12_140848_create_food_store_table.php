<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_store', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('food_id');
            
            $table->foreign('food_id')->references('id')->on('foods');
            $table->unsignedBigInteger('store_id');
            $table->foreign('store_id')->references('id')->on('stores');
        });
    }

    /**
     * Reverse `the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_store');
    }
}
