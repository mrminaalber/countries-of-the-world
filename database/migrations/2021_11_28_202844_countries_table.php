<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CountriesTable extends Migration{
    public function up(){
        Schema::create('countries', function (Blueprint $table){
            $table->id();
            $table->bigInteger('continent_id')->index()->unsigned();
            $table->string('alpha_2_code')->unique();
            $table->string('alpha_3_code')->unique();
            $table->string('area_code')->unique();
            $table->string('currency_symbol');
            $table->string('flag_png');
            $table->string('flag_svg');
            $table->string('google_maps_link');
            $table->double('latitude', 8);
            $table->double('longitude', 8);
            $table->foreign('continent_id')->references('id')->on('continents')->cascadeOnDelete();
        });

        Schema::create('countries_translations', function (Blueprint $table){
            $table->id();
            $table->bigInteger('country_id')->index()->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->string('currency_short');
            $table->string('currency_long');
            $table->string('language');
            $table->unique(['country_id', 'locale']);
            $table->foreign('country_id')->references('id')->on('countries')->cascadeOnDelete();
            $table->foreign('locale')->references('locale')->on('app_languages')->cascadeOnDelete();
        });
    }

    public function down(){
        Schema::drop('countries_translations');
        Schema::drop('countries');
    }
}
