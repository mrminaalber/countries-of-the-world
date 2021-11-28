<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $table = 'continents';
    protected $fillable = [];
    protected $hidden = ['id'];

    public function locale(){
        return $this->hasMany(ContinentTranslation::class);
    }
}
