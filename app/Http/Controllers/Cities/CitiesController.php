<?php

namespace App\Http\Controllers\Cities;

use App\Http\Controllers\Controller;
use App\Models\CityTranslation;
use Illuminate\Http\Request;
use App\Http\Resources\Cities\CitiesResource;

class CitiesController extends Controller{
    protected $model;

    public function __construct(CityTranslation $CityTranslation){
        $this->model = $CityTranslation;
    }

    public function getCities(Request $request){
        $Cities = $this->model::with('info')
                          ->with(['info.continent' => function($q) use ($request){
                              $q->where('locale', $request->lang ?: 'en');
                          }])
                          ->select([
                              'name', 'city_id', 'locale', 'currency_short', 'currency_long',
                              'language'
                          ])
                          ->where('locale', $request->lang ?: 'en')
                          ->orderBy('name')->get();
        return CitiesResource::collection($Cities);
    }
}
