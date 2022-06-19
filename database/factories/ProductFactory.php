<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->realText,
            'weight' => $this->faker->randomFloat(2, 1, 40),
            'volume' => $this->faker->randomFloat(2, 2, 3)
        ];
    }
}
