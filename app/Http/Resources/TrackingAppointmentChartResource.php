<?php

namespace App\Http\Resources;

use GDebrauwer\Hateoas\Traits\HasLinks;
use Illuminate\Http\Resources\Json\JsonResource;

class TrackingAppointmentChartResource extends JsonResource
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
            'date' => $this->date,
            'evolution' => $this->evolution,
            'conduct' => $this->conduct,
            'vitalSingsMeasurement' => new VitalSignsMeasurementResource($this->vitalSignsMeasurement),
            '_links' => $this->links()
        ];
    }
}
