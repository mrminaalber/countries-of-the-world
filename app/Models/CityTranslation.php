<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CityTranslation extends Model{
    protected $table = 'cities_translations';
    protected $fillable = [];
    protected $hidden = ['id', 'city_id', 'locale'];

    public function info(){
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
