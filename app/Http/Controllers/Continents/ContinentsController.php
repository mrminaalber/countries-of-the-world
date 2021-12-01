<?php

namespace App\Http\Controllers\Continents;

use App\Http\Controllers\Controller;
use App\Models\Continent;
use App\Models\ContinentTranslation;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Resources\Continents\ContinentsResource;
use App\Http\Resources\Continents\ContinentCountriesResource;

class ContinentsController extends Controller{
    protected $ContinentTranslation;

    public function __construct(
        Continent $Continent,
        ContinentTranslation $ContinentTranslation,
        Country $Country
    ){
        $this->Continent = $Continent;
        $this->ContinentTranslation = $ContinentTranslation;
        $this->Country = $Country;
    }

    public function getContinents(Request $request){
        $continents = $this->ContinentTranslation::with('info:id,code')
                           ->select(['name', 'continent_id', 'locale'])
                           ->where('locale', $request->lang ?: 'en')
                           ->orderBy('name')->get();
        return ContinentsResource::collection($continents);
    }

    public function getContinentCountries(Request $request, $continentCode){
        $continentId = $this->Continent::where('code', $continentCode)->firstOrFail('id');
        $continentCountries = $this->Country::where('continent_id', $continentId->id)
                                   ->with(['locale' => function($q) use ($request){
                                        $q->where('locale', $request->lang ?: 'en');
                                        $q->select(['name', 'country_id', 'currency_short','currency_long']);
                                   }])
                                   ->with(['capital' => function($q) use ($request){
                                        $q->where('locale', $request->lang ?: 'en');
                                        $q->select('city_id', 'name');
                                   }])
                                   ->select([
                                       'id', 'alpha_2_code', 'alpha_3_code', 'area_code',
                                       'currency_symbol', 'flag_png', 'flag_svg', 'capital_id'
                                   ])->orderBy('name')->get();
        return ContinentCountriesResource::collection($continentCountries);
    }
}
