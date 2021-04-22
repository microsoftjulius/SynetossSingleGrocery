<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class About extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->longtext('about_content')->nullable();
            $table->string('image');
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->text('fb')->nullable();
            $table->text('twitter')->nullable();
            $table->text('insta')->nullable();
            $table->text('android')->nullable();
            $table->text('ios')->nullable();
            $table->text('copyright')->nullable();
            $table->string('title')->nullable();
            $table->string('short_title')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('about');
    }
}
