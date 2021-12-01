<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CitiesTable extends Migration{
    public function up(){
        Schema::create('cities', function (Blueprint $table){
            $table->id();
            $table->bigInteger('country_id')->index()->unsigned();
            $table->boolean('is_capital')->nullable();
            $table->unique(['country_id', 'is_capital']);
            $table->foreign('country_id')->references('id')->on('countries')->cascadeOnDelete();
        });

        Schema::create('cities_translations', function (Blueprint $table){
            $table->id();
            $table->bigInteger('city_id')->index()->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->unique(['city_id', 'locale']);
            $table->foreign('city_id')->references('id')->on('cities')->cascadeOnDelete();
            $table->foreign('locale')->references('locale')->on('app_languages')->cascadeOnDelete();
        });
    }

    public function down(){
        Schema::drop('cities_translations');
        Schema::drop('cities');
    }
}
