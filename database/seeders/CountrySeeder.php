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
//            ['name'=>'АВСТРИЯ' ,'flag'=>'avstraliya.png','logo'=>'Austria-300x196.png'],
//            ['name'=>'Азербайджан' ,'flag'=>'ozarbayjon.png','logo'=>'Azerbaijan-300x146.png'],
//            ['name'=>'Англия' ,'flag'=>'angliya.png','logo'=>'Azerbaijan-300x146.png'],
//            ['name'=>'Болгария' ,'flag'=>'','logo'=>'Bulgaria-300x196.png'],
//            ['name'=>'Венгрия' ,'flag'=>'','logo'=>'Hungary-300x196.png'],
//            ['name'=>'Греция' ,'flag'=>'','logo'=>'Greece-300x198.png'],
//            ['name'=>'Доминикана' ,'flag'=>'','logo'=>'Dominican_Republic-300x196.png'],

            ['name'=>'Турция' ,'flag'=>'turkey-300x200.jpg','logo'=>'Turkey-300x199.png'],
            ['name'=>'Египет' ,'flag'=>'egypt-1-300x200.jpg','logo'=>'Egypt-300x199.png'],
            ['name'=>'Таиланд' ,'flag'=>'thailand-300x200.jpg','logo'=>'Thailand-300x198.png'],
            ['name'=>'ОАЭ' ,'flag'=>'uae-300x200.jpg','logo'=>'arab_emirates-300x150.jpg'],
            ['name'=>'Туры в Грузию' ,'flag'=>'gruziya-300x200.jpg','logo'=>'Georgia-300x223.png'],
            ['name'=>'Китай' ,'flag'=>'china-300x200.jpg','logo'=>'082.-Kitaj-300x200.jpg'],
            ['name'=>'Мальдивы' ,'flag'=>'maldives-1-300x200.jpg','logo'=>'Maldives-300x198.png'],
            ['name'=>'Малайзия' ,'flag'=>'malaiziya-300x200.jpg','logo'=>'Malaysia-300x148.png'],
            ['name'=>'Вьетнам' ,'flag'=>'vietnam.jpg','logo'=>'Vietnam-300x198.png'],
            ['name'=>'Индия' ,'flag'=>'vietnam.jpg','logo'=>'India-300x199.png'],
            ['name'=>'Чехия' ,'flag'=>'india-1-300x200.jpg','logo'=>'Czech_Republic-300x196.png'],
            ['name'=>'Шри ланка' ,'flag'=>'sri-lanka-1-300x200.jpg','logo'=>'Sri_Lanka-300x143.png'],
        ]);
    }
}
