<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketingHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketing_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaign_id'); 
            $table->string('campaign_name')->nullable(); 
            $table->string('send_id')->nullable(); 
            $table->string('customer_name'); 
            $table->string('customer_phone');
            $table->timestamp('send_date')->nullable(); 
            $table->timestamp('schedule_date')->nullable();
            $table->string('status')->default('pending'); 

            $table
                ->foreign('campaign_id')
                ->references('campaign_id')
                ->on('marketing_campaigns'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marketing_history');
    }
}