<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder{
    public function run(){
        DB::table('cities')->insert([
            [
                'id' => 1,
                'country_id' => 1
            ],
            [
                'id' => 2,
                'country_id' => 1
            ],
            [
                'id' => 3,
                'country_id' => 2
            ],
            [
                'id' => 4,
                'country_id' => 2
            ]
        ]);

        DB::table('cities_translations')->insert([
            [
                'id' => 1,
                'city_id' => 1,
                'locale' => 'en',
                'name' => 'New York'
            ],
            [
                'id' => 2,
                'city_id' => 1,
                'locale' => 'ar',
                'name' => 'نيويورك'
            ],
            [
                'id' => 3,
                'city_id' => 2,
                'locale' => 'en',
                'name' => 'Los Angeles'
            ],
            [
                'id' => 4,
                'city_id' => 2,
                'locale' => 'ar',
                'name' => 'لوس انجليس'
            ],
            [
                'id' => 5,
                'city_id' => 3,
                'locale' => 'en',
                'name' => 'Cairo'
            ],
            [
                'id' => 6,
                'city_id' => 3,
                'locale' => 'ar',
                'name' => 'القاهرة'
            ],
            [
                'id' => 7,
                'city_id' => 4,
                'locale' => 'en',
                'name' => 'Giza'
            ],
            [
                'id' => 8,
                'city_id' => 4,
                'locale' => 'ar',
                'name' => 'الجيزة'
            ]
        ]);
    }
}