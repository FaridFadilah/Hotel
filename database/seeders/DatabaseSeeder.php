<?php

namespace Database\Seeders;

use App\Models\Fkamar;
use App\Models\Kamar;
use App\Models\Reservasi;
use App\Models\tipe;
use App\Models\tipeKamar;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        Tipe::factory(5)->create();
        User::factory(5)->create();
        Kamar::factory(5)->create();
        Fkamar::factory(5)->create();
        Reservasi::factory(5)->create();
    }
}
