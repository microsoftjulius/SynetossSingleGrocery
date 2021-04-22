<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Payment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->string('payment_name');
            $table->enum('is_available',['yes','no'])->default('yes');
            $table->text('test_public_key');
            $table->text('test_secret_key');
            $table->text('live_public_key')->nullable();
            $table->text('live_secret_key')->nullable();
            $table->string('environment');
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
        Schema::dropIfExists('payment');
    }
}
