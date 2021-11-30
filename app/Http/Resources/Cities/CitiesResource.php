<?php

namespace App\Http\Resources\Cities;

use Illuminate\Http\Resources\Json\JsonResource;

class CitiesResource extends JsonResource{
    public function toArray($request){
        return [
            'city' => $this->name,
            'country' => $this->info->country->name
        ];
    }
}
