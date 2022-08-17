<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use MatanYadaev\EloquentSpatial\Objects\Point;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserLocation>
 */
class UserLocationFactory extends Factory
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
            'country' => $this->faker->country,
            'state' => $this->faker->stateAbbr,
            'address' => $this->faker->address,
            'zipcode' => $this->faker->postcode,
            'city' => $this->faker->city,
            'position' => new Point($this->faker->latitude($min = -90, $max = 90), $this->faker->longitude($min = -180, $max = 180)),
        ];

        // $table->unsignedBigInteger('user_id');
        // $table->string('address');
        // $table->string('zipcode');
        // $table->string('country');
        // $table->string('city');
        // $table->point('position');
    }
}
