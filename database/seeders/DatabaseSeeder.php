<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    public function run(){
        $this->call(AppLanguageSeeder::class);
        $this->call(ContinentSeeder::class);
        $this->call(CountrySeeder::class);
    }
}
