<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market_campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('campaign_name');
            $table->text('campaign_description');
            $table->string('campaign_code');
            $table->string('campaign_example1');
            $table->string('campaign_example2');
            $table->foreignId('created_by');
            $table->foreignId('updated_by')->nullable();
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
        Schema::dropIfExists('market_campaigns');
    }
}
