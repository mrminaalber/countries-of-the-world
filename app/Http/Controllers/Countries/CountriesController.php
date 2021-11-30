<?php

namespace App\Http\Controllers\Countries;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\CountryTranslation;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Resources\Countries\CountriesResource;
use App\Http\Resources\Countries\CountryCitiesResource;

class CountriesController extends Controller{
    protected $Country;
    protected $CountryTranslation;
    protected $City;

    public function __construct(
        Country $Country,
        CountryTranslation $CountryTranslation,
        City $City
    ){
        $this->Country = $Country;
        $this->CountryTranslation = $CountryTranslation;
        $this->City = $City;
    }

    public function getCountries(Request $request){
        $countries = $this->CountryTranslation::with('info')
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

    public function getCountryCities(Request $request, $countryCode){
        $countryId = $this->Country::where('alpha_2_code', $countryCode)
                                     ->orWhere('alpha_3_code', $countryCode)->firstOrFail('id');
        $countryCities = $this->City::where('country_id', $countryId->id)
                              ->with(['locale' => function($q) use ($request){
                                  $q->where('locale', $request->lang ?: 'en');
                              }])
                              ->get();
        return CountryCitiesResource::collection($countryCities);
    }
}
