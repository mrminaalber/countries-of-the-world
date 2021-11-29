<?php

namespace App\Http\Resources\Countries;

use Illuminate\Http\Resources\Json\JsonResource;

class CountriesResource extends JsonResource{
    public function toArray($request){
        return [
            'country' => $this->name,
            'flags' => [
                'png' => $this->info->flag_png,
                'svg' => $this->info->flag_svg,
            ],
            'country_codes' => [
                'alpha2' => $this->info->alpha_2_code,
                'alpha3' => $this->info->alpha_3_code
            ],
            'currency' => [
                'short' => $this->currency_short,
                'long' => $this->currency_long,
                'symbol' => $this->info->currency_symbol
            ],
            'language' => $this->language,
            'area_code' => $this->info->area_code,
            'area' => [
                'square_kilometers' => $this->info->area_square_kilometers,
                'square_miles' => $this->info->area_square_miles
            ],
            'google_maps' => [
                'link' => $this->info->google_maps_link,
                'latitude' => $this->info->latitude,
                'longitude' => $this->info->longitude,
            ],
            'continent' => $this->info->continent->name
        ];
    }
}
