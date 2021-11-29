<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContinentTranslation extends Model{
    protected $table = 'continents_translations';
    protected $fillable = [];
    protected $hidden = ['id', 'continent_id', 'locale'];

    public function info(){
        return $this->belongsTo(Continent::class, 'continent_id', 'id');
    }
}
