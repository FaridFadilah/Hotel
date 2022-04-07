<?php

namespace Database\Seeders;

use App\Models\Reservasi;
use Illuminate\Database\Seeder;

class ReservasiSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Reservasi::factory(5)->create();
    }
}
