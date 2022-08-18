<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 30),
            'title' => $this->faker->jobTitle,
            'body' => $this->faker->realText(50),
            'is_read' => $this->faker->boolean(),
            'payload' => '{"name": "aslfjsd", "type" : "campain"}',
        ];
    }
}
