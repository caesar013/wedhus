<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SheepCare>
 */
class SheepCareFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'sheep_id' => $this->faker->numberBetween(1, 10),
            'care_id' => $this->faker->numberBetween(1, 5),
            'date' => $this->faker->date(),
        ];
    }
}
