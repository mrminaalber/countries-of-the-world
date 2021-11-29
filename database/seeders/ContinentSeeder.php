<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder{
    public function run(){
        DB::table('continents')->insert([
            [
                'id' => 1,
                'code' => 'AS',
                'area_square_kilometers' => '44,614,000',
                'area_square_miles' => '17,226,000'
            ],
            [
                'id' => 2,
                'code' => 'AF',
                'area_square_kilometers' => '30,365,000',
                'area_square_miles' => '11,724,000'
            ],
            [
                'id' => 3,
                'code' => 'NA',
                'area_square_kilometers' => '24,230,000',
                'area_square_miles' => '9,360,000'
            ],
            [
                'id' => 4,
                'code' => 'SA',
                'area_square_kilometers' => '17,814,000',
                'area_square_miles' => '6,878,000'
            ],
            [
                'id' => 5,
                'code' => 'AN',
                'area_square_kilometers' => '14,200,000',
                'area_square_miles' => '5,500,000'
            ],
            [
                'id' => 6,
                'code' => 'EU',
                'area_square_kilometers' => '10,000,000',
                'area_square_miles' => '3,900,000'
            ],
            [
                'id' => 7,
                'code' => 'OC',
                'area_square_kilometers' => '8,510,900',
                'area_square_miles' => '3,286,100'
            ]
        ]);

        DB::table('continents_translations')->insert([
            [
                'id' => 1,
                'continent_id' => 1,
                'locale' => 'en',
                'name' => 'Asia'
            ],
            [
                'id' => 2,
                'continent_id' => 1,
                'locale' => 'ar',
                'name' => 'آسيا'
            ],
            [
                'id' => 3,
                'continent_id' => 2,
                'locale' => 'en',
                'name' => 'Africa'
            ],
            [
                'id' => 4,
                'continent_id' => 2,
                'locale' => 'ar',
                'name' => 'أفريقيا'
            ],
            [
                'id' => 5,
                'continent_id' => 3,
                'locale' => 'en',
                'name' => 'North America'
            ],
            [
                'id' => 6,
                'continent_id' => 3,
                'locale' => 'ar',
                'name' => 'أمريكا الشمالية'
            ],
            [
                'id' => 7,
                'continent_id' => 4,
                'locale' => 'en',
                'name' => 'South America'
            ],
            [
                'id' => 8,
                'continent_id' => 4,
                'locale' => 'ar',
                'name' => 'امريكا الجنوبية'
            ],
            [
                'id' => 9,
                'continent_id' => 5,
                'locale' => 'en',
                'name' => 'Antarctica'
            ],
            [
                'id' => 10,
                'continent_id' => 5,
                'locale' => 'ar',
                'name' => 'أنتاركتيكا'
            ],
            [
                'id' => 11,
                'continent_id' => 6,
                'locale' => 'en',
                'name' => 'Europe'
            ],
            [
                'id' => 12,
                'continent_id' => 6,
                'locale' => 'ar',
                'name' => 'أوروبا'
            ],
            [
                'id' => 13,
                'continent_id' => 7,
                'locale' => 'en',
                'name' => 'Oceania'
            ],
            [
                'id' => 14,
                'continent_id' => 7,
                'locale' => 'ar',
                'name' => 'أوقيانوسيا'
            ]
        ]);
    }
}
