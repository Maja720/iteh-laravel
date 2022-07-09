<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $continents = ['Europe', 'Asia', 'North America', 'South Americaa', 'Australia', 'Africa'];
        return [
            'name' => $this->faker->country,
            'capital' => $this->faker->city,
            'continent' => $continents[$this->faker->numberBetween(0, 6)]
        ];
    }
}
