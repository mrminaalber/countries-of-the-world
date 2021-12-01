<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountryTranslation extends Model{
    protected $table = 'countries_translations';
    protected $fillable = [];
    protected $hidden = ['id', 'country_id', 'locale'];

    public function info(){
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function capital(){
        return $this->hasOne(City::class, 'country_id', 'country_id')->where('is_capital', 1);
    }
}
