<?php

namespace App\Http\Resources\Continents;

use Illuminate\Http\Resources\Json\JsonResource;

class ContinentCountriesResource extends JsonResource{
    public function toArray($request){
        return [
            'country' => $this->locale[0]->name,
            'capital' => $this->capital->name,
            'flags' => [
                'png' => $this->flag_png,
                'svg' => $this->flag_svg,
            ],
            'country_codes' => [
                'alpha2' => $this->alpha_2_code,
                'alpha3' => $this->alpha_3_code
            ],
            'currency' => [
                'short' => $this->locale[0]->currency_short,
                'long' => $this->locale[0]->currency_long,
                'symbol' => $this->currency_symbol
            ],
            'area_code' => $this->area_code
        ];
    }
}
