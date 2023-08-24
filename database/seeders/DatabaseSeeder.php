<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Country;
use App\Models\Tour;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();

         \App\Models\User::create([
             'name' => 'admin',
             'username' => 'admin',
             'password' => bcrypt('password')
         ]);
        $this->call([
            AboutSeeder::class,
            CategorySeeder::class,
            CountrySeeder::class,
            TourSeeder::class,
            LenguageSeeder::class
        ]);
    }
}
