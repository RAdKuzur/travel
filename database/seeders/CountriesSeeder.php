<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['id' => 1, 'name' => 'Россия'],
            ['id' => 2, 'name' => 'США'],
            ['id' => 3, 'name' => 'Германия'],
            ['id' => 4, 'name' => 'Япония'],
            ['id' => 5, 'name' => 'Китай'],
            ['id' => 6, 'name' => 'Франция'],
            ['id' => 7, 'name' => 'Великобритания'],
            ['id' => 8, 'name' => 'Италия'],
            ['id' => 9, 'name' => 'Канада'],
            ['id' => 10, 'name' => 'Бразилия'],
            ['id' => 11, 'name' => 'Индия'],
            ['id' => 12, 'name' => 'Австралия'],
            ['id' => 13, 'name' => 'Мексика'],
            ['id' => 14, 'name' => 'Испания'],
            ['id' => 15, 'name' => 'Южная Корея'],
        ]);
    }
}
