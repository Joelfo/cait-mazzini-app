<?php

namespace App\Http\Resources;

use GDebrauwer\Hateoas\Traits\HasLinks;
use Illuminate\Http\Resources\Json\JsonResource;

class VitalSignsMeasurementResource extends JsonResource
{
    use HasLinks;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'pa' => $this->pa,
            'fc' => $this->fc,
            'oxygenSaturation' => $this->oxygen_saturation,
            'weight' => $this->weight,
            'height' => $this->height,
            'datetime' => $this->datetime,
            '_links' => $this->links()
        ];
    }
}
