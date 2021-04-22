<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->foreignId('user_id');
            $table->foreignId('driver_id');
            $table->string('order_total');
            $table->string('razorpay_payment_id')->nullable();
            $table->integer('payment_type');
            $table->enum('order_type',['Delivery','Pickup'])->default('Delivery');
            $table->string('address')->nullable();
            $table->string('pincode')->nullable();
            $table->text('lat')->nullable();
            $table->text('lang')->nullable();
            $table->string('building')->nullable();
            $table->string('landmark')->nullable();
            $table->string('promocode')->nullable();
            $table->string('discount_amount')->nullable();
            $table->string('discount_pr')->nullable();
            $table->string('tax')->nullable();
            $table->string('tax_amount')->nullable();
            $table->string('delivery_charge')->nullable();
            $table->text('ordered_date')->nullable();
            $table->string('order_from')->nullable();
            $table->text('order_notes')->nullable();
            $table->integer('status');
            $table->enum('is_notification',['unread','read'])->nullable('unread');
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
        Schema::dropIfExists('order');
    }
}
