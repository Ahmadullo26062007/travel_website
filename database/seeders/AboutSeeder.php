<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'phone_number1'=>'996222009155',
            'phone_number2'=>'996222009155',
            'whats_app'=>'996222009155',
            'email'=>'dfada@gmail.com',
            'instagram'=>'afafafaef',
            'facebook'=>'afafafaef',
            'telegram'=>'afafafaef',
            'description'=>'afafafaef SHDajsydasdu asuiawhd iawuhd',
            'image'=>'logo.png',
        ]);
    }
}
