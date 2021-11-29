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
        $continents = $this->ContinentTranslation::with('info:id,code,area_square_kilometers,area_square_miles')
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
                                    }])
                                    ->get();
        return ContinentCountriesResource::collection($continentCountries);
    }
}
