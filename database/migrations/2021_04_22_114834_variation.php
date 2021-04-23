<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Variation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id');
            $table->string('price');
            $table->string('weight');
            $table->integer('stock')->nullable();
            $table->integer('variation_id')->nullable();
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
        Schema::dropIfExists('variation');
    }
}
