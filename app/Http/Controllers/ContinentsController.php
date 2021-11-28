<?php

namespace App\Http\Controllers;

use App\Models\ContinentTranslation;
use Illuminate\Http\Request;
use App\Http\Resources\ContinentsResource;

class ContinentsController extends Controller
{
    protected $model;

    public function __construct(ContinentTranslation $ContinentTranslation)
    {
        $this->model = $ContinentTranslation;
    }

    public function getContinents(Request $request){
        $continents = $this->model::with('info:id,code,area_square_kilometers,area_square_miles')
                           ->select(['name', 'continent_id', 'locale'])
                           ->where('locale', $request->lang ?: 'en')
                           ->orderBy('name')->get();
        return ContinentsResource::collection($continents);
    }
}
