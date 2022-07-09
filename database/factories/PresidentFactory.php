<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PresidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'country_id' => $this->faker->numberBetween(1, 10),
            'politician_id' => $this->faker->numberBetween(1, 10),
            'from' => $this->faker->date(),
            'to' => $this->faker->date()
        ];
    }
}
