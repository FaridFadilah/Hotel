<?php

namespace Database\Factories;

use App\Models\Fkamar;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

class fkamarFactory extends Factory{
    public function definition(){
        return [
            "kamar_id" => 1,
            "fasilitas" => $this->faker->words(3, true)
        ];
    }
}