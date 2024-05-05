<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bus>
 */
class BusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'plate_number' => $this->faker->word,
            'starting_point' => $this->faker->word,
            'starting_point_latitude' => $this->faker->word,
            'starting_point_longitude' => $this->faker->word,
            'destination' => $this->faker->word,
            'status' => $this->faker->word,
        ];
    }
}
