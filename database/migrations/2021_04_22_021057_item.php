<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Item extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->foreignId('category_id');
            $table->string('item_name');
            $table->text('item_description');
            $table->string('brand');
            $table->string('manufacturer');
            $table->string('country_origin');
            $table->string('ingredient_type');
            $table->string('delivery_time');
            $table->enum('item_status',['available','not available'])->default('available');
            $table->enum('is_deleted',['true','false'])->default('false');
            $table->string('slug');
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
        Schema::dropIfExists('item');
    }
}
