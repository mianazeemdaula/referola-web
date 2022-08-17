<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use MatanYadaev\EloquentSpatial\Objects\Point;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SellerProfile>
 */
class SellerProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 20),
            'logo' => $this->faker->imageUrl(640, 480, 'animals', true),
            'name' => $this->faker->name,
            'about' => $this->faker->realText(250),
            'email' => $this->faker->safeEmail,
            'tax_id' => $this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'phone_no' => $this->faker->phoneNumber,
            'website_url' => $this->faker->url,
            'country' => $this->faker->country,
            'zipcode' => $this->faker->postcode,
            'state' => $this->faker->stateAbbr,
            'city' => $this->faker->city,
            'address' => $this->faker->address,
            'position' => new Point($this->faker->latitude($min = 30, $max = 31), $this->faker->longitude($min = 72, $max = 73)),
            'is_license' => $this->faker->boolean,
            'is_home_based' => $this->faker->boolean,
            'is_bonded' => $this->faker->boolean,
            'is_insured' => $this->faker->boolean,
        ];
    }
}
