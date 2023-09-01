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
            ['language_2' => 'Home', 'language_1' => 'Дом'],
            ['language_2' => 'Tours', 'language_1' => 'Туры'],
            ['language_2' => 'Hot Tours', 'language_1' => 'Горячие туры'],
            ['language_2' => 'Countries', 'language_1' => 'Страны'],
            ['language_2' => 'Visas', 'language_1' => 'Визы'],
            ['language_2' => 'Tickets', 'language_1' => 'Билеты'],
            ['language_2' => 'Contact', 'language_1' => 'Контакт'],
            ['language_1' => 'Контакты', 'language_2' => 'Contacts'],
            ['language_1' => 'Поиск горящих туров онлайн', 'language_2' => 'Search for hot tours online'],
            ['language_1' => 'Большое турагентство - маленькие цены', 'language_2' => 'Big travel agency - small prices'],
            ['language_1' => 'Организуйте себе отдых в теплой стране', 'language_2' => 'Organize your vacation in a warm country'],
            ['language_1' => 'Все хлопоты по выбору тура и комфортному пребыванию берем на себя', 'language_2' => 'We take care of all the hassle of choosing a tour and a comfortable stay'],
            ['language_1' => 'Больше туров', 'language_2' => 'More Tours'],
            ['language_1' => 'Популярные страны, где чаще всего отдыхают туристы из Кыргызстана', 'language_2' => 'Popular countries where tourists from Kyrgyzstan most often have a rest'],
            ['language_1' => 'Категории', 'language_2' => 'Categories'],
            ['language_1' => 'Фильтр туров', 'language_2' => 'Tour filter'],
            ['language_1' => 'Тип отдыха', 'language_2' => 'Type of holiday'],
            ['language_1' => 'Город вылета', 'language_2' => 'Departure city'],
            ['language_1' => 'Другие страны', 'language_2' => 'Other countries'],
            ['language_1' => 'Оставить заявку на подбор тура', 'language_2' => 'Leave a request for selection tour'],
            ['language_1' => 'Найти туры', 'language_2' => 'Find tours'],
            ['language_1' => 'Найдено туров', 'language_2' => 'Tours found'],
            ['language_1' => 'Популярные страны', 'language_2' => 'Popular countries'],
            ['language_1' => 'Все страны', 'language_2' => 'All countries'],
            ['language_1' => 'ОФОРМЛЕНИЕ ВИЗЫ', 'language_2' => 'VISA PROCESSING'],
            ['language_1' => 'Одним из самых сложных этапов подготовки к поездке за границу является получение визы.', 'language_2' => 'One of the most difficult stages in preparing for a trip abroad is obtaining a visa..'],
            ['language_1' => 'Когда дело доходит до получения визы, многие становятся перед выбором: получить визу самостоятельно или доверить это дело профессионалам?', 'language_2' => 'When it comes to obtaining a visa, many are faced with a choice: to get a visa on their own or to entrust this matter to professionals?'],
            ['language_1' => 'Если вам нужна помощь в получении визы, обращайтесь к нам. Вы просто предоставляете нам документы, а мы берем на себя все заботы. Квалифицированная визовая поддержка экономит ваше время и силы. При необходимости мы проконсультируем вас, поможем советом и найдем ответы на любые ваши вопросы.', 'language_2' => 'If you need help in obtaining a visa, please contact us. You simply provide us with the documents, and we take care of all the worries. Qualified visa support saves you time and effort. If necessary, we will advise you, help with advice and find answers to any of your questions.'],
            ['language_1' => 'Вы значительно сократите шаги к получению визы, увеличите шансы на ее получение, сэкономите время, получите все необходимое для поездки в одной компании.', 'language_2' => 'You will significantly reduce the steps to obtaining a visa, increase the chances of obtaining it, save time, get everything you need for your trip in one company.'],
            ['language_1' => 'Визовый сбор включает в себя:', 'language_2' => 'The visa fee includes:'],
            ['language_1' => 'Заполнение анкеты', 'language_2' => 'Filling out the questionnaire'],
            ['language_1' => 'Бронирование отеля', 'language_2' => 'Booking a hotel'],
            ['language_1' => 'Бронирование авиабилетов', 'language_2' => 'Flight booking'],
            ['language_1' => 'Отправка в ВК', 'language_2' => 'Submission to the VC'],
            ['language_1' => 'Оплата консульского сбора', 'language_2' => 'Consular fee payment'],
            ['language_1' => 'Оплата визового сбора', 'language_2' => 'Visa fee payment'],
            ['language_1' => 'курьерская служба', 'language_2' => 'Courier services'],
            ['language_1' => 'Сопровождение при снятии отпечатков пальцев', 'language_2' => 'Сaccompaniment for fingerprinting'],
            ['language_1' => 'Регистрация в ВК', 'language_2' => 'Registration in the VC'],
            ['language_1' => 'РЕЙСЫ', 'language_2' => 'FLIGHTS'],
            ['language_1' => 'Круглосуточное бронирование билетов через WhatsApp', 'language_2' => '24/7 ticket booking via WhatsApp'],
            ['language_1' => 'Напишите нам в приложении WhatsApp на номер', 'language_2' => 'Write to us in the WhatsApp application to the number'],
            ['language_1' => 'куда и когда хотите полететь. Мы найдем оптимальные маршруты для вас в любое время суток.', 'language_2' => 'where and when you want to fly. We will find the best routes for you at any time of the day.'],
            ['language_1' => 'Написать в WhatsApp', 'language_2' => 'Write to whatsapp'],
            ['language_1' => 'Рейсы от авиакомпаний-партнеров Турагенсво "ЧУДЕСНЫЙ МИР"', 'language_2' => 'Flights from partner airlines Travel agency "WONDER WORLD"'],
            ['language_1' => 'КОНТАКТЫ', 'language_2' => 'CONTACTS'],
            ['language_1' => 'ДАТА', 'language_2' => 'DATE'],
            ['language_1' => 'ДЛИТЕЛЬНОСТЬ', 'language_2' => 'DURATION'],
            ['language_1' => 'СТОИМОСТЬ', 'language_2' => 'PRICE'],
            ['language_1' => 'ГОРОД ВЫЛЕТА', 'language_2' => 'DEPARTURE CITY'],
            ['language_1' => 'Возможны изменения цен. Актуальные цены уточняйте у менеджеров.', 'language_2' => 'Price changes are possible. Check with managers for current prices.'],
            ['language_1' => 'Поделиться', 'language_2' => 'Share'],
            ['language_1' => 'Похожие туры', 'language_2' => 'Similar tours'],
            ['language_1' => 'ЭКСКУРСИОННЫЙ ТУР', 'language_2' => 'EXCURSION TOUR'],
        ]);

    }
}
