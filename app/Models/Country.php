<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model{
    protected $table = 'countries';
    protected $fillable = [];
    protected $hidden = ['id', 'continent_id'];

    public function locale(){
        return $this->hasMany(CountryTranslation::class);
    }

    public function continent(){
        return $this->hasOne(ContinentTranslation::class, 'continent_id', 'continent_id');
    }
}
