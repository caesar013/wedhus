<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SheepTreatment>
 */
class SheepTreatmentFactory extends Factory
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
            'disease_id' => $this->faker->numberBetween(1, 5),
            'treatment_id' => $this->faker->numberBetween(1, 10),
            'date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
        ];
    }
}
