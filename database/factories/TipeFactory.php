<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TipeFactory extends Factory{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){
        return [
            "name" => $this->faker->randomElement([$this->faker->word(1, true),$this->faker->word(1, true),$this->faker->word(1, true)]),
            "slug" => $this->faker->paragraph(1)
        ];
    }
}
