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
          ['language_2'=>'Contact','language_1'=>'Контакт'],
           ['language_1'=>'Контакты','language_2'=>'Contacts'],
           ['language_1'=>'Поиск горящих туров онлайн','language_2'=>'Search for hot tours online'],
           ['language_1'=>'Большое турагентство - маленькие цены','language_2'=>'Big travel agency - small prices'],
           ['language_1'=>'Организуйте себе отдых в теплой стране','language_2'=>'Organize your vacation in a warm country'],
           ['language_1'=>'Все хлопоты по выбору тура и комфортному пребыванию берем на себя','language_2'=>'We take care of all the hassle of choosing a tour and a comfortable stay'],
           ['language_1'=>'Больше туров','language_2'=>'More Tours'],
           ['language_1'=>'Популярные страны, где чаще всего отдыхают туристы из Кыргызстана','language_2'=>'Popular countries where tourists from Kyrgyzstan most often have a rest'],
           ['language_1'=>'Категории','language_2'=>'Categories'],
           ['language_1'=>'Фильтр туров','language_2'=>'Tour filter'],
           ['language_1'=>'Тип отдыха','language_2'=>'Type of holiday'],
           ['language_1'=>'Город вылета','language_2'=>'Departure city'],
           ['language_1'=>'Другие страны','language_2'=>'Other countries'],
           ['language_1'=>'Оставить заявку на подбор тура','language_2'=>'Leave a request for selection tour'],
        ]);

    }
}
