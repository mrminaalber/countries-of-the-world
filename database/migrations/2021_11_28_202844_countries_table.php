<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('continent_id')->index()->unsigned();
            $table->string('alpha_2_code')->unique();
            $table->string('alpha_3_code')->unique();
            $table->string('area_code')->unique();
            $table->foreign('continent_id')->references('id')->on('continents')->cascadeOnDelete();
        });

        Schema::create('countries_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('country_id')->index()->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->unique(['country_id', 'locale']);
            $table->foreign('country_id')->references('id')->on('countries')->cascadeOnDelete();
            $table->foreign('locale')->references('locale')->on('app_languages')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('countries_translations');
        Schema::drop('countries');
    }
}