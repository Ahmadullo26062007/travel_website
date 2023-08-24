<?php

namespace Database\Seeders;

use App\Models\Lenguage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LenguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lenguage::insert([
            ['type'=>'1'],
            ['type'=>'2'],
        ]);
    }
}
