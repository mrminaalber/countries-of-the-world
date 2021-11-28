<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('app_languages')->insert([
            [
                'id' => 1,
                'name' => 'English',
                'locale' => 'en'
            ],
            [
                'id' => 2,
                'name' => 'العربية',
                'locale' => 'ar',
            ]
        ]);
    }
}
