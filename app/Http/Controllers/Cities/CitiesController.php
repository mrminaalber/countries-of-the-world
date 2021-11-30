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
        $cities = $this->CityTranslation::with('info')
                          ->with(['info.country' => function($q) use ($request){
                              $q->where('locale', $request->lang ?: 'en');
                          }])
                          ->select(['name', 'city_id', 'locale'])
                          ->where('locale', $request->lang ?: 'en')
                          ->orderBy('name')->get();
        return CitiesResource::collection($cities);
    }
}
