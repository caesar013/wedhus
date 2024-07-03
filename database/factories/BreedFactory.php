<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Breed>
 */
class BreedFactory extends Factory
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
            'male_sheep_id' => $this->faker->numberBetween(1, 5),
            'female_sheep_id' => $this->faker->numberBetween(6, 10),
            'mating_date' => $this->faker->date(),
            'estimated_birth_date' => $this->faker->date(),
            'note' => $this->faker->word(),
        ];
    }
}
