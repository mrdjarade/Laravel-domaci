<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StorageUnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'count' => $this->faker->numberBetween(1, 40),
            'product_id' => $this->faker->numberBetween(1, 10),
            'warehouse_id' => $this->faker->numberBetween(1, 5)
        ];
    }
}
