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
            'paMmhg' => $this->pa_mmhg,
            'fcBpm' => $this->fc_bpm,
            'frIrpm' => $this->fr_irpm,
            'oxygenSaturationPercentage' => $this->oxygen_saturation_percentage,
            'weightKg' => $this->weight,
            'heightM' => $this->height,
            'MeasurementDateTime' => $this->measurement_date_time,
            '_links' => $this->links()
        ];
    }
}
