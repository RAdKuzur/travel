<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            // Россия
            ['id' => 1, 'name' => 'Москва', 'country_id' => 1],
            ['id' => 2, 'name' => 'Санкт-Петербург', 'country_id' => 1],
            ['id' => 3, 'name' => 'Новосибирск', 'country_id' => 1],
            ['id' => 4, 'name' => 'Екатеринбург', 'country_id' => 1],

            // США
            ['id' => 5, 'name' => 'Нью-Йорк', 'country_id' => 2],
            ['id' => 6, 'name' => 'Лос-Анджелес', 'country_id' => 2],
            ['id' => 7, 'name' => 'Чикаго', 'country_id' => 2],
            ['id' => 8, 'name' => 'Хьюстон', 'country_id' => 2],

            // Германия
            ['id' => 9, 'name' => 'Берлин', 'country_id' => 3],
            ['id' => 10, 'name' => 'Мюнхен', 'country_id' => 3],
            ['id' => 11, 'name' => 'Франкфурт', 'country_id' => 3],
            ['id' => 12, 'name' => 'Гамбург', 'country_id' => 3],

            // Япония
            ['id' => 13, 'name' => 'Токио', 'country_id' => 4],
            ['id' => 14, 'name' => 'Осака', 'country_id' => 4],
            ['id' => 15, 'name' => 'Нагоя', 'country_id' => 4],
            ['id' => 16, 'name' => 'Саппоро', 'country_id' => 4],

            // Китай
            ['id' => 17, 'name' => 'Пекин', 'country_id' => 5],
            ['id' => 18, 'name' => 'Шанхай', 'country_id' => 5],
            ['id' => 19, 'name' => 'Гуанчжоу', 'country_id' => 5],
            ['id' => 20, 'name' => 'Шэньчжэнь', 'country_id' => 5],

            // Франция
            ['id' => 21, 'name' => 'Париж', 'country_id' => 6],
            ['id' => 22, 'name' => 'Марсель', 'country_id' => 6],
            ['id' => 23, 'name' => 'Лион', 'country_id' => 6],
            ['id' => 24, 'name' => 'Тулуза', 'country_id' => 6],

            // Великобритания
            ['id' => 25, 'name' => 'Лондон', 'country_id' => 7],
            ['id' => 26, 'name' => 'Манчестер', 'country_id' => 7],
            ['id' => 27, 'name' => 'Бирмингем', 'country_id' => 7],
            ['id' => 28, 'name' => 'Глазго', 'country_id' => 7],

            // Италия
            ['id' => 29, 'name' => 'Рим', 'country_id' => 8],
            ['id' => 30, 'name' => 'Милан', 'country_id' => 8],
            ['id' => 31, 'name' => 'Неаполь', 'country_id' => 8],
            ['id' => 32, 'name' => 'Турин', 'country_id' => 8],

            // Канада
            ['id' => 33, 'name' => 'Торонто', 'country_id' => 9],
            ['id' => 34, 'name' => 'Ванкувер', 'country_id' => 9],
            ['id' => 35, 'name' => 'Монреаль', 'country_id' => 9],
            ['id' => 36, 'name' => 'Калгари', 'country_id' => 9],

            // Бразилия
            ['id' => 37, 'name' => 'Сан-Паулу', 'country_id' => 10],
            ['id' => 38, 'name' => 'Рио-де-Жанейро', 'country_id' => 10],
            ['id' => 39, 'name' => 'Бразилиа', 'country_id' => 10],
            ['id' => 40, 'name' => 'Сальвадор', 'country_id' => 10],

            // Индия
            ['id' => 41, 'name' => 'Дели', 'country_id' => 11],
            ['id' => 42, 'name' => 'Мумбаи', 'country_id' => 11],
            ['id' => 43, 'name' => 'Бангалор', 'country_id' => 11],
            ['id' => 44, 'name' => 'Ченнаи', 'country_id' => 11],

            // Австралия
            ['id' => 45, 'name' => 'Сидней', 'country_id' => 12],
            ['id' => 46, 'name' => 'Мельбурн', 'country_id' => 12],
            ['id' => 47, 'name' => 'Брисбен', 'country_id' => 12],
            ['id' => 48, 'name' => 'Перт', 'country_id' => 12],

            // Мексика
            ['id' => 49, 'name' => 'Мехико', 'country_id' => 13],
            ['id' => 50, 'name' => 'Гвадалахара', 'country_id' => 13],
            ['id' => 51, 'name' => 'Монтеррей', 'country_id' => 13],
            ['id' => 52, 'name' => 'Канкун', 'country_id' => 13],

            // Испания
            ['id' => 53, 'name' => 'Мадрид', 'country_id' => 14],
            ['id' => 54, 'name' => 'Барселона', 'country_id' => 14],
            ['id' => 55, 'name' => 'Валенсия', 'country_id' => 14],
            ['id' => 56, 'name' => 'Севилья', 'country_id' => 14],

            // Южная Корея
            ['id' => 57, 'name' => 'Сеул', 'country_id' => 15],
            ['id' => 58, 'name' => 'Пусан', 'country_id' => 15],
            ['id' => 59, 'name' => 'Инчхон', 'country_id' => 15],
            ['id' => 60, 'name' => 'Тэгу', 'country_id' => 15],
        ]);
    }
}
