<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WarehouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city' => $this->faker->city,
            'address' => $this->faker->streetAddress,
            'capacity' => $this->faker->randomFloat(2, 50, 250),
            'manager' => $this->faker->name,
            'phone' => $this->faker->phoneNumber
        ];
    }
}
