<?php

namespace Database\Seeders;

use App\Models\Word;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Word::insert([
            ['language_2'=>'Home','language_1'=>'Дом'],
           ['language_2'=>'Tours','language_1'=>'Туры'],
           ['language_2'=>'Hot Tours','language_1'=>'Горячие туры'],
           ['language_2'=>'Countries','language_1'=>'Страны'],
           ['language_2'=>'Visas','language_1'=>'Визы'],
           ['language_2'=>'Tickets','language_1'=>'Билеты'],
          ['language_2'=>'Contact','language_1'=>'Контакт']

        ]);

    }
}
