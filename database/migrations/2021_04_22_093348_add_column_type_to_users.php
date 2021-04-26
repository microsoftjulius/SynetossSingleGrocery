<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnTypeToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('mobile')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('login_type')->nullable();
            $table->text('google_id')->nullable();
            $table->text('facebook_id')->nullable();
            $table->integer('type')->default(2); //1 for Admin, 2 for Customer
            $table->string('tax')->nullable();
            $table->string('delivery_charge')->nullable();
            $table->string('currency')->nullable();
            $table->integer('max_order_qty')->nullable();
            $table->integer('min_order_amount')->nullable();
            $table->integer('max_order_amount')->nullable();
            $table->text('lat')->nullable();
            $table->text('lang')->nullable();
            $table->text('map')->nullable();
            $table->text('firebase')->nullable();
            $table->string('timezone')->nullable();
            $table->longtext('token')->nullable();
            $table->string('referral_amount')->nullable();
            $table->string('wallet')->nullable();
            $table->string('referral_code')->nullable();
            $table->enum('is_available',['yes','no'])->default('yes');
            $table->enum('otp',['yes','no'])->default('no');
            $table->integer('is_verified')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
