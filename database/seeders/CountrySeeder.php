<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'id' => 1,
                'continent_id' => 3,
                'alpha_2_code' => 'US',
                'alpha_3_code' => 'USA',
                'area_code' => '+1'
            ],
            [
                'id' => 2,
                'continent_id' => 2,
                'alpha_2_code' => 'EG',
                'alpha_3_code' => 'EGY',
                'area_code' => '+20'
            ]
        ]);

        DB::table('countries_translations')->insert([
            [
                'id' => 1,
                'country_id' => 1,
                'locale' => 'en',
                'name' => 'United States'
            ],
            [
                'id' => 2,
                'country_id' => 1,
                'locale' => 'ar',
                'name' => 'الولايات المتحدة الأمريكية'
            ],
            [
                'id' => 3,
                'country_id' => 2,
                'locale' => 'en',
                'name' => 'Egypt'
            ],
            [
                'id' => 4,
                'country_id' => 2,
                'locale' => 'ar',
                'name' => 'مصر'
            ]
        ]);
    }
}
