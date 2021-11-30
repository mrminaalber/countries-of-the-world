<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder{
    public function run(){
        DB::table('continents')->insert([
            [
                'id' => 1,
                'code' => 'AS'
            ],
            [
                'id' => 2,
                'code' => 'AF'
            ],
            [
                'id' => 3,
                'code' => 'NA'
            ],
            [
                'id' => 4,
                'code' => 'SA'
            ],
            [
                'id' => 5,
                'code' => 'AN'
            ],
            [
                'id' => 6,
                'code' => 'EU'
            ],
            [
                'id' => 7,
                'code' => 'OC'
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
