<?php

namespace App\Http\Controllers\Countries;

use App\Http\Controllers\Controller;
use App\Models\CountryTranslation;
use Illuminate\Http\Request;
use App\Http\Resources\Countries\CountriesResource;

class CountriesController extends Controller{
    protected $model;

    public function __construct(CountryTranslation $CountryTranslation){
        $this->model = $CountryTranslation;
    }

    public function getCountries(Request $request){
        $countries = $this->model::with('info')
                          ->with(['info.continent' => function($q) use ($request){
                              $q->where('locale', $request->lang ?: 'en');
                          }])
                          ->select([
                              'name', 'country_id', 'locale', 'currency_short', 'currency_long',
                              'language'
                          ])
                          ->where('locale', $request->lang ?: 'en')
                          ->orderBy('name')->get();
        return CountriesResource::collection($countries);
    }
}
