<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'start' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'end' => $this->faker->optional()->dateTimeBetween('+1 week', '+2 weeks'),
            'description' => $this->faker->optional()->paragraph(),
        ];
    }
}
