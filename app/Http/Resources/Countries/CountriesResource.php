<?php

namespace App\Http\Resources\Countries;

use Illuminate\Http\Resources\Json\JsonResource;

class CountriesResource extends JsonResource{
    public function toArray($request){
        return [
            'country' => $this->name,
            'capital' => '',
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
            'area_code' => $this->info->area_code,
            'continent' => $this->info->continent->name
        ];
    }
}
