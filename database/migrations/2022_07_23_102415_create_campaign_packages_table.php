<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('campaign_id');
            $table->boolean('price_code');
            $table->unsignedInteger('price');
            $table->unsignedInteger('buyer_disc');
            $table->unsignedInteger('refer_comm');
            $table->unsignedInteger('referee_comm');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaign_packages');
    }
};
