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

            ['name'=>'Турция' ,'image'=>'turkey-300x200.jpg','flag'=>'Turkey-300x199.png','type'=>1],
            ['name'=>'Египет' ,'image'=>'egypt-1-300x200.jpg','flag'=>'Egypt-300x199.png','type'=>1],
            ['name'=>'Таиланд' ,'image'=>'thailand-300x200.jpg','flag'=>'Thailand-300x198.png','type'=>1],
            ['name'=>'ОАЭ' ,'image'=>'uae-300x200.jpg','flag'=>'arab_emirates-300x150.jpg','type'=>1],
            ['name'=>'Туры в Грузию' ,'image'=>'gruziya-300x200.jpg','flag'=>'Georgia-300x223.png','type'=>1],
            ['name'=>'Китай' ,'image'=>'china-300x200.jpg','flag'=>'082.-Kitaj-300x200.jpg','type'=>1],
            ['name'=>'Мальдивы' ,'image'=>'maldives-1-300x200.jpg','flag'=>'Maldives-300x198.png','type'=>1],
            ['name'=>'Малайзия' ,'image'=>'malaiziya-300x200.jpg','flag'=>'Malaysia-300x148.png','type'=>1],
            ['name'=>'Вьетнам' ,'image'=>'vietnam.jpg','flag'=>'Vietnam-300x198.png','type'=>1],
            ['name'=>'Индия' ,'image'=>'vietnam.jpg','flag'=>'India-300x199.png','type'=>1],
            ['name'=>'Чехия' ,'image'=>'india-1-300x200.jpg','flag'=>'Czech_Republic-300x196.png','type'=>1],
            ['name'=>'Шри ланка' ,'image'=>'sri-lanka-1-300x200.jpg','flag'=>'Sri_Lanka-300x143.png','type'=>1],
        ]);
    }
}
