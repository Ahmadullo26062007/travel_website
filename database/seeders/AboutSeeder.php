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
            'phone_number1'=>'941070524',
            'phone_number2'=>'941070524',
            'whats_up'=>'941070524',
            'email'=>'dfada@gmail.com',
            'instagram'=>'afafafaef',
            'facebook'=>'afafafaef',
            'telegram'=>'afafafaef',
            'description'=>'afafafaef SHDajsydasdu asuiawhd iawuhd',
            'image'=>'logo.png',
        ]);
    }
}
