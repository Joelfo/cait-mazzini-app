<?php

namespace App\Http\Resources;

use GDebrauwer\Hateoas\Traits\HasLinks;
use Illuminate\Http\Resources\Json\JsonResource;

class PhysicalExamResource extends JsonResource
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
            'generalAspect' => $this->general_aspect,
            'hygieneConditions' => $this->hygiene_conditions,
            'head' => $this->head,
            'neck' => $this->neck,
            'chest' => $this->chest,
            'abdomen' => $this->abdomen,
            'mmssMmii' => $this->mmss_mmii,
            'urinaryTrack' => $this->urinary_track,
            'skinAndMucous' => $this->skinAndMucous,
            '_links' => $this->links()
        ];
    }
}
