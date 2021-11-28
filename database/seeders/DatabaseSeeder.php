<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AppLanguageSeeder::class);
        $this->call(ContinentSeeder::class);
        $this->call(CountrySeeder::class);
    }
}
