<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CleintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->words($nb = 1, $asText = true);
        $family = $this->faker->unique()->words($nb = 1, $asText = true);
        $phone = $this->faker->numberBetween(9, 1000000000); 
        return [
            'name' => $name,
            'family' => $family,
            'phone' => $phone
        ];
    }
}
