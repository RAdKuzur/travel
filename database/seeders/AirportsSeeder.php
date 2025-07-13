<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('airports')->insert([
            // Москва
            ['id' => 1, 'name' => 'Шереметьево', 'code' => 'SVO', 'city_id' => 1],
            ['id' => 2, 'name' => 'Домодедово', 'code' => 'DME', 'city_id' => 1],
            ['id' => 3, 'name' => 'Внуково', 'code' => 'VKO', 'city_id' => 1],

            // Санкт-Петербург
            ['id' => 4, 'name' => 'Пулково', 'code' => 'LED', 'city_id' => 2],

            // Новосибирск
            ['id' => 5, 'name' => 'Толмачёво', 'code' => 'OVB', 'city_id' => 3],

            // Екатеринбург
            ['id' => 6, 'name' => 'Кольцово', 'code' => 'SVX', 'city_id' => 4],

            // Нью-Йорк
            ['id' => 7, 'name' => 'Джон Ф. Кеннеди', 'code' => 'JFK', 'city_id' => 5],
            ['id' => 8, 'name' => 'Ла Гуардиа', 'code' => 'LGA', 'city_id' => 5],
            ['id' => 9, 'name' => 'Ньюарк', 'code' => 'EWR', 'city_id' => 5],

            // Лос-Анджелес
            ['id' => 10, 'name' => 'Лос-Анджелес', 'code' => 'LAX', 'city_id' => 6],

            // Чикаго
            ['id' => 11, 'name' => 'О\'Хара', 'code' => 'ORD', 'city_id' => 7],

            // Хьюстон
            ['id' => 12, 'name' => 'Хьюстон Интерконтинентал', 'code' => 'IAH', 'city_id' => 8],
            ['id' => 13, 'name' => 'Хобби', 'code' => 'HOU', 'city_id' => 8],

            // Берлин
            ['id' => 14, 'name' => 'Берлин-Бранденбург', 'code' => 'BER', 'city_id' => 9],

            // Мюнхен
            ['id' => 15, 'name' => 'Мюнхен', 'code' => 'MUC', 'city_id' => 10],

            // Франкфурт
            ['id' => 16, 'name' => 'Франкфурт-на-Майне', 'code' => 'FRA', 'city_id' => 11],

            // Гамбург
            ['id' => 17, 'name' => 'Гамбург', 'code' => 'HAM', 'city_id' => 12],

            // Токио
            ['id' => 18, 'name' => 'Нарита', 'code' => 'NRT', 'city_id' => 13],
            ['id' => 19, 'name' => 'Ханэда', 'code' => 'HND', 'city_id' => 13],

            // Осака
            ['id' => 20, 'name' => 'Кансай', 'code' => 'KIX', 'city_id' => 14],
            ['id' => 21, 'name' => 'Итами', 'code' => 'ITM', 'city_id' => 14],

            // Нагоя
            ['id' => 22, 'name' => 'Тюбу', 'code' => 'NGO', 'city_id' => 15],

            // Саппоро
            ['id' => 23, 'name' => 'Новый Читосе', 'code' => 'CTS', 'city_id' => 16],

            // Пекин
            ['id' => 24, 'name' => 'Пекин Столичный', 'code' => 'PEK', 'city_id' => 17],
            ['id' => 25, 'name' => 'Пекин Наньшань', 'code' => 'PKX', 'city_id' => 17],

            // Шанхай
            ['id' => 26, 'name' => 'Пудун', 'code' => 'PVG', 'city_id' => 18],
            ['id' => 27, 'name' => 'Хунцяо', 'code' => 'SHA', 'city_id' => 18],

            // Гуанчжоу
            ['id' => 28, 'name' => 'Байюнь', 'code' => 'CAN', 'city_id' => 19],

            // Шэньчжэнь
            ['id' => 29, 'name' => 'Шэньчжэнь', 'code' => 'SZX', 'city_id' => 20],

            // Париж
            ['id' => 30, 'name' => 'Шарль де Голль', 'code' => 'CDG', 'city_id' => 21],
            ['id' => 31, 'name' => 'Орли', 'code' => 'ORY', 'city_id' => 21],

            // Марсель
            ['id' => 32, 'name' => 'Марсель Прованс', 'code' => 'MRS', 'city_id' => 22],

            // Лион
            ['id' => 33, 'name' => 'Лион-Сен-Экзюпери', 'code' => 'LYS', 'city_id' => 23],

            // Тулуза
            ['id' => 34, 'name' => 'Тулуза-Бланьяк', 'code' => 'TLS', 'city_id' => 24],

            // Лондон
            ['id' => 35, 'name' => 'Хитроу', 'code' => 'LHR', 'city_id' => 25],
            ['id' => 36, 'name' => 'Гатвик', 'code' => 'LGW', 'city_id' => 25],
            ['id' => 37, 'name' => 'Станстед', 'code' => 'STN', 'city_id' => 25],

            // Манчестер
            ['id' => 38, 'name' => 'Манчестер', 'code' => 'MAN', 'city_id' => 26],

            // Бирмингем
            ['id' => 39, 'name' => 'Бирмингем', 'code' => 'BHX', 'city_id' => 27],

            // Глазго
            ['id' => 40, 'name' => 'Глазго', 'code' => 'GLA', 'city_id' => 28],

            // Рим
            ['id' => 41, 'name' => 'Фьюмичино', 'code' => 'FCO', 'city_id' => 29],
            ['id' => 42, 'name' => 'Чампино', 'code' => 'CIA', 'city_id' => 29],

            // Милан
            ['id' => 43, 'name' => 'Милан-Мальпенса', 'code' => 'MXP', 'city_id' => 30],
            ['id' => 44, 'name' => 'Линате', 'code' => 'LIN', 'city_id' => 30],

            // Неаполь
            ['id' => 45, 'name' => 'Неаполь', 'code' => 'NAP', 'city_id' => 31],

            // Турин
            ['id' => 46, 'name' => 'Турин', 'code' => 'TRN', 'city_id' => 32],

            // Торонто
            ['id' => 47, 'name' => 'Торонто Пирсон', 'code' => 'YYZ', 'city_id' => 33],
            ['id' => 48, 'name' => 'Билли Бишоп', 'code' => 'YTZ', 'city_id' => 33],

            // Ванкувер
            ['id' => 49, 'name' => 'Ванкувер', 'code' => 'YVR', 'city_id' => 34],

            // Монреаль
            ['id' => 50, 'name' => 'Монреаль Трюдо', 'code' => 'YUL', 'city_id' => 35],

            // Калгари
            ['id' => 51, 'name' => 'Калгари', 'code' => 'YYC', 'city_id' => 36],

            // Сан-Паулу
            ['id' => 52, 'name' => 'Гуарульос', 'code' => 'GRU', 'city_id' => 37],
            ['id' => 53, 'name' => 'Конгоньяс', 'code' => 'CGH', 'city_id' => 37],

            // Рио-де-Жанейро
            ['id' => 54, 'name' => 'Галеан', 'code' => 'GIG', 'city_id' => 38],

            // Бразилиа
            ['id' => 55, 'name' => 'Президент Жуселину Кубичек', 'code' => 'BSB', 'city_id' => 39],

            // Сальвадор
            ['id' => 56, 'name' => 'Деп. Луис Эдуардо Магалхаэс', 'code' => 'SSA', 'city_id' => 40],

            // Дели
            ['id' => 57, 'name' => 'Индира Ганди', 'code' => 'DEL', 'city_id' => 41],

            // Мумбаи
            ['id' => 58, 'name' => 'Чатрапати Шиваджи', 'code' => 'BOM', 'city_id' => 42],

            // Бангалор
            ['id' => 59, 'name' => 'Кемпегауда', 'code' => 'BLR', 'city_id' => 43],

            // Ченнаи
            ['id' => 60, 'name' => 'Ченнаи', 'code' => 'MAA', 'city_id' => 44],

            // Сидней
            ['id' => 61, 'name' => 'Кингсфорд Смит', 'code' => 'SYD', 'city_id' => 45],

            // Мельбурн
            ['id' => 62, 'name' => 'Тулламарин', 'code' => 'MEL', 'city_id' => 46],

            // Брисбен
            ['id' => 63, 'name' => 'Брисбен', 'code' => 'BNE', 'city_id' => 47],

            // Перт
            ['id' => 64, 'name' => 'Перта', 'code' => 'PER', 'city_id' => 48],

            // Мехико
            ['id' => 65, 'name' => 'Мехико', 'code' => 'MEX', 'city_id' => 49],

            // Гвадалахара
            ['id' => 66, 'name' => 'Гвадалахара', 'code' => 'GDL', 'city_id' => 50],

            // Монтеррей
            ['id' => 67, 'name' => 'Монтеррей', 'code' => 'MTY', 'city_id' => 51],

            // Канкун
            ['id' => 68, 'name' => 'Канкун', 'code' => 'CUN', 'city_id' => 52],

            // Мадрид
            ['id' => 69, 'name' => 'Мадрид-Барахас', 'code' => 'MAD', 'city_id' => 53],

            // Барселона
            ['id' => 70, 'name' => 'Барселона-Эль-Прат', 'code' => 'BCN', 'city_id' => 54],

            // Валенсия
            ['id' => 71, 'name' => 'Валенсия', 'code' => 'VLC', 'city_id' => 55],

            // Севилья
            ['id' => 72, 'name' => 'Севилья', 'code' => 'SVQ', 'city_id' => 56],

            // Сеул
            ['id' => 73, 'name' => 'Инчхон', 'code' => 'ICN', 'city_id' => 57],
            ['id' => 74, 'name' => 'Гимпхо', 'code' => 'GMP', 'city_id' => 57],

            // Пусан
            ['id' => 75, 'name' => 'Пусан', 'code' => 'PUS', 'city_id' => 58],

            // Инчхон
            ['id' => 76, 'name' => 'Инчхон', 'code' => 'ICN', 'city_id' => 59],

            // Тэгу
            ['id' => 77, 'name' => 'Тэгу', 'code' => 'TAE', 'city_id' => 60],
        ]);
    }
}
