<?php

namespace App\Http\Resources\Countries;

use Illuminate\Http\Resources\Json\JsonResource;

class CountryCitiesResource extends JsonResource{
    public function toArray($request){
        return [
            'city' => $this->locale[0]->name,
        ];
    }
}
