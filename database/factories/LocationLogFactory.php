<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LocationLog>
 */
class LocationLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bus_id' => \App\Models\Bus::factory(),
            'latitude' => $this->faker->word,
            'longitude' => $this->faker->word,
            'speed' => $this->faker->word,
            'battery' => $this->faker->word,
        ];
    }
}
