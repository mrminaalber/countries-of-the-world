<?php

namespace App\Http\Resources\Continents;

use Illuminate\Http\Resources\Json\JsonResource;

class ContinentCountriesResource extends JsonResource{
    public function toArray($request){
        return [
            'country' => $this->locale[0]->name,
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
            'capital' => '',
            'language' => $this->locale[0]->language,
            'area_code' => $this->area_code,
            'area' => [
                'square_kilometers' => $this->area_square_kilometers,
                'square_miles' => $this->area_square_miles
            ],
            'google_maps' => [
                'link' => $this->google_maps_link,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
            ]
        ];
    }
}
