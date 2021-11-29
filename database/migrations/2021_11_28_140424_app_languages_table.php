<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AppLanguagesTable extends Migration{
    public function up(){
        Schema::create('app_languages', function (Blueprint $table){
            $table->id();
            $table->string('name')->unique();
            $table->string('locale')->index()->unique();
        });
    }

    public function down(){
        Schema::drop('app_languages');
    }
}
