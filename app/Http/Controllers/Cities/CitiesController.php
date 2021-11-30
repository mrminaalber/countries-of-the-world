<?php

namespace App\Http\Controllers\Cities;

use App\Http\Controllers\Controller;
use App\Models\CityTranslation;
use Illuminate\Http\Request;
use App\Http\Resources\Cities\CitiesResource;

class CitiesController extends Controller{
    protected $model;

    public function __construct(CityTranslation $CityTranslation){
        $this->CityTranslation = $CityTranslation;
    }

    public function getCities(Request $request){
        $cities = $this->CityTranslation::with(['info' => function($q) use ($request){
                            $q->select('id', 'country_id');
                            $q->with(['country' => function($q) use ($request){
                                $q->where('locale', $request->lang ?: 'en');
                                $q->select('country_id', 'name');
                            }]);
                       }])
                       ->select(['name', 'city_id', 'locale'])
                       ->where('locale', $request->lang ?: 'en')
                       ->orderBy('name')->get();
        return CitiesResource::collection($cities);
    }
}
