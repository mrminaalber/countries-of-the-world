<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder{
    public function run(){
        DB::table('countries')->insert([
            [
                'id' => 1,
                'continent_id' => 3,
                'alpha_2_code' => 'US',
                'alpha_3_code' => 'USA',
                'area_code' => '+1',
                'currency_symbol' => '$',
                'flag_png' => 'https://flagcdn.com/w320/us.png',
                'flag_svg' => 'https://flagcdn.com/us.svg',
                'capital_id' => 5
            ],
            [
                'id' => 2,
                'continent_id' => 2,
                'alpha_2_code' => 'EG',
                'alpha_3_code' => 'EGY',
                'area_code' => '+20',
                'currency_symbol' => '£',
                'flag_png' => 'https://flagcdn.com/w320/eg.png',
                'flag_svg' => 'https://flagcdn.com/eg.svg',
                'capital_id' => 3
            ]
        ]);

        DB::table('countries_translations')->insert([
            [
                'id' => 1,
                'country_id' => 1,
                'locale' => 'en',
                'name' => 'United States',
                'currency_short' => 'USD',
                'currency_long' => 'US Dollars',
            ],
            [
                'id' => 2,
                'country_id' => 1,
                'locale' => 'ar',
                'name' => 'الولايات المتحدة الأمريكية',
                'currency_short' => 'دولار',
                'currency_long' => 'دولار أمريكى',
            ],
            [
                'id' => 3,
                'country_id' => 2,
                'locale' => 'en',
                'name' => 'Egypt',
                'currency_short' => 'EGP',
                'currency_long' => 'Egyptian Pounds',
            ],
            [
                'id' => 4,
                'country_id' => 2,
                'locale' => 'ar',
                'name' => 'مصر',
                'currency_short' => 'ج.م',
                'currency_long' => 'جنيه مصري',
            ]
        ]);
    }
}
