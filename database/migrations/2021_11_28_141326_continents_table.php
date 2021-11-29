<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContinentsTable extends Migration{
    public function up(){
        Schema::create('continents', function (Blueprint $table){
            $table->id();
            $table->string('code')->unique();
            $table->string('area_square_kilometers');
            $table->string('area_square_miles');
        });

        Schema::create('continents_translations', function (Blueprint $table){
            $table->id();
            $table->bigInteger('continent_id')->index()->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->unique(['continent_id', 'locale']);
            $table->foreign('continent_id')->references('id')->on('continents')->cascadeOnDelete();
            $table->foreign('locale')->references('locale')->on('app_languages')->cascadeOnDelete();
        });
    }

    public function down(){
        Schema::drop('continents_translations');
        Schema::drop('continents');
    }
}
