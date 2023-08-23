<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::insert([
            ['name'=>'АВСТРИЯ' ,'flag'=>'avstraliya.png','logo'=>'avstrya.png'],
            ['name'=>'Азербайджан' ,'flag'=>'ozarbayjon.png','logo'=>'ozarbayjon.png'],
            ['name'=>'Англия' ,'flag'=>'angliya.png','logo'=>'angliya.png'],
        ]);
    }
}
