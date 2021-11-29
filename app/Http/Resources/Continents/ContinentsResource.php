<?php

namespace App\Http\Resources\Continents;

use Illuminate\Http\Resources\Json\JsonResource;

class ContinentsResource extends JsonResource{
    public function toArray($request){
        return [
            'continent' => $this->name,
            'code' => $this->info->code,
            'area' => [
                'square_kilometers' => $this->info->area_square_kilometers,
                'square_miles' => $this->info->area_square_miles
            ]
        ];
    }
}
