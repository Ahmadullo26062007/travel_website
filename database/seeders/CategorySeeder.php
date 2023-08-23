<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     Category::insert([
         ['name'=>'Аквапарк'],
         ['name'=>'Огонь Горящие туры'],
         ['name'=>'Комбинированные туры'],
         ['name'=>'Молодежные туры'],
         ['name'=>'молодежный отдых'],
         ['name'=>'Морские круизы'],
         ['name'=>'На праздничные даты'],
         ['name'=>'Пляж Пляжный отдых'],
         ['name'=>'Читающий человек Раннее бронирование'],
         ['name'=>'Свадебный тур'],
         ['name'=>'Семейные туры'],
         ['name'=>'Стоковый тур'],
         ['name'=>'шоппинг тур'],
         ['name'=>'Экскурсионный тур'],
     ]);
    }
}
