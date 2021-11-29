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
                'google_maps_link' => 'https://goo.gl/maps/nwFwa9VbF5yV1qsG7',
                'latitude' => 37.2755783,
                'longitude' => -104.6571311
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
                'google_maps_link' => 'https://goo.gl/maps/3dmMKaJzyJVqvbA49',
                'latitude' => 26.844829,
                'longitude' => 26.3840401
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
                'language' => 'English'
            ],
            [
                'id' => 2,
                'country_id' => 1,
                'locale' => 'ar',
                'name' => 'الولايات المتحدة الأمريكية',
                'currency_short' => 'دولار',
                'currency_long' => 'دولار أمريكى',
                'language' => 'الإنجليزية'
            ],
            [
                'id' => 3,
                'country_id' => 2,
                'locale' => 'en',
                'name' => 'Egypt',
                'currency_short' => 'EGP',
                'currency_long' => 'Egyptian Pounds',
                'language' => 'Arabic'
            ],
            [
                'id' => 4,
                'country_id' => 2,
                'locale' => 'ar',
                'name' => 'مصر',
                'currency_short' => 'ج.م',
                'currency_long' => 'جنيه مصري',
                'language' => 'العربية'
            ]
        ]);
    }
}
