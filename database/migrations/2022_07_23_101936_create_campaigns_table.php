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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('campaign_type_id');
            $table->string('content');
            $table->unsignedInteger('user_share');
            $table->unsignedInteger('friend_share');
            // $table->unsignedInteger('user_share');
            $table->longText('terms_and_condition');
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
        Schema::dropIfExists('campaigns');
    }
};
