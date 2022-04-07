<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KamarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){
        return [
            "tipe_id" => $this->faker->unique()->numberBetween(1, 5),
            "no_kamar" => $this->faker->unique()->numberBetween(10, 100),
            "gambar" => "gambar-62454bb484772.jpg",
            "harga" => "Rp. 120.000",
            "deskripsi" => $this->faker->sentence(20)
        ];
    }
}