<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContinentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
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
