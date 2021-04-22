<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_cart', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignid('item_id');
            $table->string('item_name');
            $table->string('image_name');
            $table->foreignId('addons_id');
            $table->integer('qty');
            $table->float('amount')->default(0.00);
            $table->float('weight')->default(0.00);
            $table->foreignId('variation_id');
            $table->enum('is_available',['true','false'])->default('true');
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
        Schema::dropIfExists('shopping_cart');
    }
}
