<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservasiFactory extends Factory{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->unique(true)->numberBetween(1,5),
            "kamar_id" => $this->faker->unique()->numberBetween(1,5),
            "check_in" => $this->faker->date(),
            "check_out" => $this->faker->date(),
        ];
    }
}
