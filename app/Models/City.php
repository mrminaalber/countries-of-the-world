<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model{
    protected $table = 'cities';
    protected $fillable = [];
    protected $hidden = ['id', 'country_id'];

    public function locale(){
        return $this->hasMany(CityTranslation::class);
    }

    public function country(){
        return $this->hasOne(CountryTranslation::class, 'country_id', 'country_id');
    }
}
