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
            $table->string('logo');
            $table->string('name');
            $table->string('about');
            $table->string('email');
            $table->string('tax_id');
            $table->string('phone_no');
            $table->string('website_url');
            $table->string('address');
            $table->string('zipcode');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->point('position')->nullable();
            $table->boolean('is_license')->default(false);
            $table->boolean('is_home_based')->default(false);
            $table->boolean('is_bonded')->default(false);
            $table->boolean('is_insured')->default(false);
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
        Schema::dropIfExists('seller_profiles');
    }
};
