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
        Schema::create('seller_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('profile_image');
            $table->string('business_name');
            $table->string('business_email');
            $table->string('phone_no');
            $table->string('website_url');
            $table->string('address');
            $table->string('zipcode');
            $table->string('country');
            $table->string('city');
            $table->boolean('is_license');
            $table->boolean('is_home_based');
            $table->boolean('is_bonded');
            $table->boolean('is_insured');

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
        Schema::dropIfExists('seller_profiles');
    }
};
