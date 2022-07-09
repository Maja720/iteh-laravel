<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PoliticianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'birth_place' => $this->faker->city,
            'birth_date' => $this->faker->date()
        ];
    }
}
