<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sheep>
 */
class SheepFactory extends Factory
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
            'code' => $this->faker->unique()->word(),
            'foldtype_id' => $this->faker->numberBetween(1, 3),
            'sex' => $this->faker->numberBetween(0, 1),
            'status' => 'sehat',
            'weight' => $this->faker->randomFloat(1, 20, 100),
            'date_of_entry' => $this->faker->date(),
            'parent_id' => null,
        ];
    }
}
